<?php

namespace CVMWeb;

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
                Model\RADClient::class => function($container) {
                    $radclient = new Model\RADClient(
                        $container->get(Model\RADHttpClient::class));
                        
                    $radclient->loadCompanies(
                        $container->get('Config')['cvm_company_file']);
                        
                    return $radclient;
                },
                Model\FIDCClient::class => function($container) {
                    return new Model\FIDCClient(
                        $container->get(Model\FIDCSoapClient::class));
                },
                Model\RADHttpClient::class => function($container) {
                    $uri = $container->get('Config')['rad_http_config']['uri'];
                    $maxredirects = $container->get('Config')['rad_http_config']['maxredirects'];
                    $timeout = $container->get('Config')['rad_http_config']['timeout'];
                    
                    $txtLogin = $container->get('Config')['rad_http_config_local']['txtLogin'];
                    $txtSenha = $container->get('Config')['rad_http_config_local']['txtSenha'];
                    
                    $client = new \Zend\Http\Client();
                    $client->setMethod(\Zend\Http\Request::METHOD_POST);
                    $client->setUri($uri);
                    $client->setOptions([
                        'maxredirects' => $maxredirects,
                        'timeout'      => $timeout,
                    ]);
            
                    $client->setParameterPost(array(
                        'txtLogin'  => $txtLogin,
                        'txtSenha'   => $txtSenha,
                    ));
                    
                    return $client;
                },
                Model\FIDCSoapClient::class => function($container) {
                    $wsdl = $container->get('Config')['fidc_soap_config']['wsdl'];
                    $options = $container->get('Config')['fidc_soap_config']['options'];
                    return new \Zend\Soap\Client($wsdl, $options);
                },
            ],
        ];
    }
    
    // Add this method:
    public function getControllerConfig()
    {
        return [
            'factories' => [
                Controller\RADController::class => function($container) {
                    return new Controller\RADController(
                        $container->get(Model\RADClient::class)
                    );
                },
                Controller\FIDCController::class => function($container) {
                    return new Controller\FIDCController(
                        $container->get(Model\FIDCClient::class)
                    );
                },
            ],
        ];
    }
}

?>