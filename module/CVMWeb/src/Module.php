<?php

namespace CVMWeb;

/*use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;*/
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Soap\Client;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\StockTable::class => function($container) {
                    $tableGateway = $container->get(Model\StockClient::class);
                    return new Model\StockTable($tableGateway);
                    //return new Model\StockTable();
                },
                Model\StockClient::class => function($container) {
                    return new Client("http://sistemas.cvm.gov.br/webservices/Sistemas/SCW/CDocs/WsDownloadInfs.asmx?WSDL");
                },
                /*Model\StockTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Stock());
                    return new TableGateway('stock', $dbAdapter, null, $resultSetPrototype);
                },*/
            ],
        ];
    }
    
    // Add this method:
    public function getControllerConfig()
    {
        return [
            'factories' => [
                Controller\CVMWebController::class => function($container) {
                    return new Controller\CVMWebController(
                        $container->get(Model\StockTable::class)
                    );
                },
            ],
        ];
    }
}

?>