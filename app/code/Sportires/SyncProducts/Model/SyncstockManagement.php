<?php
declare(strict_types=1);

namespace Sportires\SyncProducts\Model;

class SyncstockManagement implements \Sportires\SyncProducts\Api\SyncstockManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postSyncstock($data)
    {

		$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
		$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
		$connection = $resource->getConnection();

		$i = 0;
		$e = 0;
		$response = array();
    	foreach($data as $item){    	
		
			try{
				$qty = $item['qty'];
				$sku = $item['sku'];

				$sql = "UPDATE cataloginventory_stock_item SET qty = '$qty' WHERE product_id = (SELECT entity_id FROM catalog_product_entity WHERE sku = '$sku')";
				$connection->query($sql);

				$response['success'] = $i;
				$response['item_success'][] = $item['sku'];
			}catch(\Exception $err){
				++$e;
				$response['error'] = $e;
				$response['item_error'][] = $item['sku'];
				$response['item_message'][$item['sku']] = $e->getMessage();
			}
			++$i;			
		}

    	return json_encode($response);

    }
}


