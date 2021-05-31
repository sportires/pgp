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


$json = file_get_contents('http://localhost/sportires/CronSyncInventoryToPgp.php');
$obj = json_decode($json)
echo '<pre>';
print_r($obj);
echo '</pre>';
/*
$data = json_decode(file_get_contents('php://input'), true);
if(!empty($data['data'])){

		$i = 0;
		$e = 0;
		$response = array();
    	foreach($data['data'] as $item){

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

    	$indexerFactory = $obj->get('Magento\Indexer\Model\IndexerFactory');
	    $indexerIds = array(
	        'catalog_product_price'
	    );
	    foreach ($indexerIds as $indexerId) {

	        $indexer = $indexerFactory->create();
	        $indexer->load($indexerId);
	        $indexer->reindexAll();
	    }

    	$logger->info("Response TO SEND Stock : ".json_encode($response));

		try{
		    $_cacheTypeList = $obj->create('Magento\Framework\App\Cache\TypeListInterface');
		    $_cacheFrontendPool = $obj->create('Magento\Framework\App\Cache\Frontend\Pool');
		    $types = array('block_html','collections','eav');
		    //array('config','layout','block_html','collections','reflection','db_ddl','eav','config_integration','config_integration_api','full_page','translate','config_webservice');
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


}else{
	return json_encode(array('error' => 'no hay nada que procesar'));
}



		try{
		    $_cacheTypeList = $objectManager->create('Magento\Framework\App\Cache\TypeListInterface');
		    $_cacheFrontendPool = $objectManager->create('Magento\Framework\App\Cache\Frontend\Pool');
		    $types = array('block_html','collections','eav');
		    //array('config','layout','block_html','collections','reflection','db_ddl','eav','config_integration','config_integration_api','full_page','translate','config_webservice');
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
