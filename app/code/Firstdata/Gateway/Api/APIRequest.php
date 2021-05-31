<?php

namespace Firstdata\Gateway\Api;

use Firstdata\Gateway\Api\APIResponse;

class APIRequest {

    protected $apiresponse;

    public function __construct(APIResponse $apiresponse) {

        $this->apiresponse = $apiresponse;
    }

    // Use only inside FD Network otherwise set $enble_proxy = false;
    public $enble_proxy = false;
    public $proxy_url = "";

    public function build_request($request = null) {

        $headers = array(
            "Content-type: text/xml;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: " . $request['URL'],
            "Content-length: " . strlen($request['XML']),
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

        if ($this->enble_proxy) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy_url);
        }

        curl_setopt($ch, CURLOPT_URL, $request['URL']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $request['USER'] . ":" . $request['PWD']);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CAINFO, $request['TRUST_PEM']);
        curl_setopt($ch, CURLOPT_SSLCERT, $request['CERT_PEM']);
        curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'PEM');
        curl_setopt($ch, CURLOPT_SSLKEY, $request['CERT_KEY']);
        curl_setopt($ch, CURLOPT_SSLKEYTYPE, 'PEM');
        curl_setopt($ch, CURLOPT_SSLKEYPASSWD, $request['KEY_PWD']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request['XML']); // the SOAP request
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        
        // Error log
        //$fileHandle = fopen("api_error.log","w");
        //curl_setopt($ch, CURLOPT_STDERR, $fileHandle);
        
        $response = curl_exec($ch);
        curl_close($ch);

        return $this->apiresponse->api_response($request, $response);
    }

}
