<?php

namespace CVMWeb;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

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
                    $tableGateway = $container->get(Model\StockTableGateway::class);
                    return new Model\AlbumTable($tableGateway);
                },
                Model\StockTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Stock());
                    return new TableGateway('stock', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }
}

?>