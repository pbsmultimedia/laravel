<?php

namespace App\Http\Wsdl;

class WsdlDocumentation {

    public $wsdl;

    function __construct($service)
    {

        // check if class exists..
        if (!class_exists(__NAMESPACE__ . "\\" .$service)) {
            die('service does not exist.');
        }

        $autodiscover = new \Laminas\Soap\AutoDiscover();
        $autodiscover
            ->setClass(__NAMESPACE__ . "\\" .$service)
            ->setUri('http://40.84.190.73/wsdl/server/'.$service) // this will be the endpoint on tools like SoapUI
            ->setServiceName($service);

        $this->wsdl = $autodiscover->generate()->toXml();
    }

    public function __toString()
    {
        return strval($this->wsdl);
    }

}