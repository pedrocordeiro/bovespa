<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'fidc_soap_config' => [
        'wsdl' => 'http://sistemas.cvm.gov.br/webservices/Sistemas/SCW/CDocs/WsDownloadInfs.asmx?WSDL',
        'options' => [],
    ],
    'rad_http_config' => [
        'uri' => 'https://WWW.RAD.CVM.GOV.BR/DOWNLOAD/SolicitaDownload.asp',
        'maxredirects' => 0,
        'timeout'      => 30,
    ],
    'cvm_company_file' => 'data/SPW_CIA_ABERTA.txt',
];
