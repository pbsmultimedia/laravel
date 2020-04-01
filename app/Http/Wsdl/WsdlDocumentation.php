<?php

namespace App\Http\Wsdl;
use App\Http\Wsdl\TestService as TestService;

class WsdlDocumentation {

    function __construct()
    {
        $autodiscover = new \Laminas\Soap\AutoDiscover();
        $autodiscover
            ->setClass(TestService::class)
            ->setUri('http://40.84.190.73/wsdl/server') // this will be the endpoint on tools like SoapUI
            ->setServiceName('MySoapService');

        $wsdl = $autodiscover->generate();

        // Emit the XML:
        echo $wsdl->toXml();
    }

}