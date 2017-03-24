<?php

namespace CVMWeb\Controller;

use CVMWeb\Model\StockTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CVMWebController extends AbstractActionController
{
    private $table;
    
    // Add this constructor:
    public function __construct(StockTable $table)
    {
        $this->table = $table;
    }
    
    public function indexAction()
    {
        $table->fetchAll();
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}

?>