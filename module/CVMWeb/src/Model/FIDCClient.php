<?php

namespace CVMWeb\Model;

use RuntimeException;

class FIDCClient
{
    
    private $soapClient;

    public function __construct(\Zend\Soap\Client $soapClient)
    {
        $this->soapClient = $soapClient;
    }
    
    /**
     * $iNrSist - identificador do sistema
     * $strSenha - a senha de acesso 
     * Fornecidos via e-mail após o processo de cadastro.
     * */
    public function login($iNrSist, $strSenha) {
        $login = new \stdClass();
        $login->iNrSist = $iNrSist;
        $login->strSenha = $strSenha;
        
        return $this->soapClient->Login ($login);
    }
    
    /**
     * $iCdTpDoc -  Para informe diário deve ser utilizada a constante '209'.
     *              Para balancete deve ser utilizada a constante '50'.
     * $strDtIniEntregDoc - formato aaaa-mm-dd (dias úteis)
     * */
    public function retornaListaComptcDocs($iCdTpDoc, $strDtIniEntregDoc) {
        $retornaListaComptcDocs = new \stdClass();
        $retornaListaComptcDocs->iCdTpDoc = $iCdTpDoc;
        $retornaListaComptcDocs->strDtIniEntregDoc = $strDtIniEntregDoc;
        
        return $this->soapClient->retornaListaComptcDocs ($retornaListaComptcDocs);
    }
    
}

?>