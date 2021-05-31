<?php
declare(strict_types=1);

namespace Sportires\SyncProducts\Model;

class SyncpriceManagement implements \Sportires\SyncProducts\Api\SyncpriceManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postSyncprice($data)
    {

		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/updateStockAndPricePGP.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);

    	//{"data":[{"product_id":72,"price":"999.99"},{"product_id":73,"price":"1000.00"}]}
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
		$connection = $resource->getConnection(); 
		$i = 0;
		$e = 0;
		$response = array();
    	foreach($data as $item){

			try{

				$price = $item['price'];
				$sku = $item['sku'];

				$sql = "UPDATE catalog_product_entity_decimal SET value = '$price' WHERE entity_id = (SELECT entity_id FROM catalog_product_entity WHERE sku = '$sku') AND attribute_id = 77;";
				$connection->query($sql);

				$indexprice = "UPDATE catalog_product_index_price SET price = '$price', final_price = '$price', min_price = '$price', max_price = '$price' WHERE entity_id = (SELECT entity_id FROM catalog_product_entity WHERE sku = '$sku');";

				$connection->query($indexprice);

			$response['success'] = $i;
			$response['item_success'][] = $item['sku'];

			}catch(\Exception $err){
				++$e;
				$response['error'] = $e;
				$response['item_error'][] = $item['sku'];
				$response['item_message'][$item['sku']] = $err->getMessage();
			}
			++$i;
    	}

    	$logger->info("Response TO SEND Stock : ".json_encode($response));

		try{
		    $_cacheTypeList = $objectManager->create('Magento\Framework\App\Cache\TypeListInterface');
		    $_cacheFrontendPool = $objectManager->create('Magento\Framework\App\Cache\Frontend\Pool');
		    $types = array('block_html','collections','eav');
		    //$types = array('config','layout','block_html','collections','reflection','db_ddl','eav','config_integration','config_integration_api','full_page','translate','config_webservice');
		    foreach ($types as $type) {
		        $_cacheTypeList->cleanType($type);
		    }
		    foreach ($_cacheFrontendPool as $cacheFrontend) {
		        $cacheFrontend->getBackend()->clean();
		    }
		    $response['cache_clean'] = 'Caches limpios';
		}catch(Exception $e){
		    $response['cache_clean_error'] = $e->getMessage();
		}

    	return json_encode($response);

    }
}


