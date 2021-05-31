<?php
error_reporting(-1);
ini_set('display_errors', 'On');
ini_set('soap.wsdl_cache_enabled', 0);
use Magento\Framework\App\Bootstrap;
use Psr\Log\LoggerInterface;
use Magento\Framework\ObjectManagerInterface;

require __DIR__ . '/app/bootstrap.php';
$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);
$obj = $bootstrap->getObjectManager();
$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');
$obj = $bootstrap->getObjectManager();

$resource = $obj->get('Magento\Framework\App\ResourceConnection');
$connection = $resource->getConnection();

$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/updateStockAndPricePGP.log');
$logger = new \Zend\Log\Logger();
$logger->addWriter($writer);



$data = json_decode(file_get_contents('php://input'), true);
if(!empty($data['data'])){

		$i = 0;
		$e = 0;
		$response = array();
    	foreach($data['data'] as $item){    	
		
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


	    $indexerFactory = $obj->get('Magento\Indexer\Model\IndexerFactory');
	    $indexerIds = array(
	        'cataloginventory_stock'
	    );
	    foreach ($indexerIds as $indexerId) {

	        $indexer = $indexerFactory->create();
	        $indexer->load($indexerId);
	        $indexer->reindexAll();
	    }

    	return json_encode($response);

}else{
	return json_encode(array('error' => 'no hay nada que procesar'));
}
