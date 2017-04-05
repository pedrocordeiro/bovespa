<?php

namespace CVMWeb\Controller;

use CVMWeb\Model\FIDCClient;
use Zend\Mvc\Controller\AbstractActionController;

class FIDCController extends AbstractActionController
{
    private $client;
    
    // Add this constructor:
    public function __construct(FIDCClient $client)
    {
        $this->client = $client;
    }
    
    public function indexAction()
    {
        print_r($this->client->login(2328, '7300'));
        print_r($this->client->retornaListaComptcDocs(50, '2017-01-03'));
    }
}

?>