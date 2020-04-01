<?php

namespace App\Http\Wsdl;

class TestService
{
    /**
     * This method takes a string as an arg
     * and returns a string as output.
     * Amazing!
     *
     * @param string $arg
     * @return string
     */
    public function test($arg)
    {
        return "received $arg";
    }
}