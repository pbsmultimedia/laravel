<?php

namespace App\Http\Wsdl;

class WsdlServer
{
    /**
     * This method takes ...
     *
     * @param string $arg
     * @return string
     */
    public function test($arg)
    {
        return "received $arg";
    }
}

$options = array(
    'uri' => 'http://uri.com',
    'location' => 'http://location.com'
);

$server = new \Laminas\Soap\Server(null, $options);

// Bind class to Soap Server:
$server->setClass(WsdlServer::class);

// Handle a request:
$server->handle();