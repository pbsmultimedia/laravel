<?php

namespace App\Http\Wsdl;
use App\Http\Wsdl\TestService as TestService;

class WsdlDocumentation {

    public $wsdl;

    function __construct()
    {
        $autodiscover = new \Laminas\Soap\AutoDiscover();
        $autodiscover
            ->setClass(TestService::class)
            ->setUri('http://40.84.190.73/wsdl/server') // this will be the endpoint on tools like SoapUI
            ->setServiceName('MySoapService');

        $this->wsdl = $autodiscover->generate()->toXml();
    }

    public function __toString()
    {
        return strval($this->wsdl);
    }

}