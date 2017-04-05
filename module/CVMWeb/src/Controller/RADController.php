<?php

namespace CVMWeb\Controller;

use CVMWeb\Model\RADClient;
use CVMWeb\Model\CompanyClient;
use CVMWeb\Form\RADForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RADController extends AbstractActionController
{
    private $client;
    
    // Add this constructor:
    public function __construct(RADClient $client)
    {
        $this->client = $client;
    }
    
    public function indexAction()
    {
        $form = new RADForm();
        //$form->get('submit')->setValue('Consultar');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        //$album->exchangeArray($form->getData());
        //$this->table->saveAlbum($album);
        //return $this->redirect()->toRoute('album');
        
        
        /*
         * Code prepared to accept start date and end date
         */
        $documents = [];
        
        $startdate = $form->get('date')->getValue();
        $startdate = new \DateTime($startdate); //::createFromFormat ( 'd/m/Y', $startdate );
        
        $inc = new \DateInterval('P1D');
        $enddate = clone $startdate;
        $enddate->add($inc);
        
        while ($startdate < $enddate) {
            // ITR
            $data = simplexml_load_string(
                $this->client->listDownloadMultiplo($startdate->format('d/m/Y'), '00:00', 'TODOS')->getBody()
            );    
            
            if (! $data->NUMERO_DO_ERRO) {
                foreach ($data->Link as $element) {
                    if (((string) $element['Documento']) == 'ITR' 
                            || ((string) $element['Documento']) == 'DFP') {
                            
                        $element->addAttribute('Nome', $this->getCompanyName((string) $element['ccvm']));
                            
                        array_push($documents, $element);
                    }
                }
            }
            
            $startdate->add($inc);
        }
        
        return new ViewModel([
            'form' => $form,
            'documents' => $documents,
        ]);
        
        //return $this->redirect()->toRoute('rad');
    }
    
    private function getCompanyName($code) {
        return $this->client->getCompany((int) $code)->name;
    }

}

?>