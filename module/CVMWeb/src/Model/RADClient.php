<?php

namespace CVMWeb\Model;

use RuntimeException;

class RADClient
{
    
    private $httpClient;
    private $companies = [];
    
    public function __construct(\Zend\Http\Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    /**
     * $path - csv file
     * */
    public function loadCompanies($path) {
        if (($handle = fopen($path, "r")) !== FALSE) {
            $row = 1;
            while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
                if ($row > 1) {
                    $company = new Company();
                    $company->exchangeArray([ 'code' => $data[0], 'name' => $data[1] ]);
                    //$company = [ $data[0] => $company ];
                    
                    //print_r( $company );
                    $this->companies[$data[0]] = $company;
                    //array_push($this->companies, $company);
                }
                $row++;
            }
            fclose($handle);
        }
    }
    
    /**
     * $txtData - data para a pesquisa de arquivos (dd/mm/aaaa)
     * $txtHora - hora inicial para a pesquisa de arquivos (99:99)
     * $txtDocumento -  tipo de documento a ser pesquisado:

        TODOS => Documentos e formulários recebidos pela CVM <1>;

        RAD => Os formulários ITR, DFP e IAN recebidos pela CVM <2>;

        ITR => Somente Informações Trimestrais recebidas pela CVM <3>;

        DFP => Somente Demonstrativos Financeiros recebidos pela CVM <4>

        IAN => Somente Informações Anuais recebidas pela CVM <5>;

        IPE => Somente Informações Periódicas recebidas pela CVM <6>;

        ENET => Formulários do Empresas.Net recebidos pela CVM <7>.
        
     * $txtAssuntoIPE -  Exibição dos assuntos dos documentos IPE

        SIM => Exibe os assuntos;

        NÃO => Não exibe os assuntos.

     * */
    public function listDownloadMultiplo($txtData, $txtHora, $txtDocumento, $txtAssuntoIPE = null)
    {
        $request = $this->httpClient->getRequest();
        $request->getPost()->set('txtData', $txtData);
        $request->getPost()->set('txtHora', $txtHora);
        $request->getPost()->set('txtDocumento', $txtDocumento);
        if (isset($txtAssuntoIPE)) {
            $request->getPost()->set('txtAssuntoIPE', $txtAssuntoIPE);
        }
        
        return $this->httpClient->send();
    }
    
    public function getCompany($code) {
        return $this->companies[$code];
    }
}

?>