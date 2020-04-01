<?php

namespace App\Http\Wsdl;

class WsdlDocumentation {

    function __construct()
    {
        $autodiscover = new \Laminas\Soap\AutoDiscover();
        $autodiscover
            ->setClass('App\Http\Wsdl\WsdlServer')
            ->setUri('http://localhost/server.php')
            ->setServiceName('MySoapService');

        $wsdl = $autodiscover->generate();

        // Emit the XML:
        echo $wsdl->toXml();
    }

}