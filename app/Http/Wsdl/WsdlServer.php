<?php

namespace App\Http\Wsdl;

class WsdlServer
{
    function __construct($service)
    {
        $options = array(
            'uri' => 'http://40.84.190.73/wsdl/server/'.$service,
            'location' => 'http://40.84.190.73/wsdl/server'.$service // what´s the diff?
        );

        $server = new \Laminas\Soap\Server(null, $options);

        // check if class exists..
        if (!class_exists(__NAMESPACE__ . "\\" .$service)) {
            die('service does not exist.');
        }

        // Bind class to Soap Server:
        $server->setClass( __NAMESPACE__ . "\\" .$service);

        // Handle a request:
        $server->handle();
    }
}