<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laminas\Soap\Server;

class TestController extends Controller
{
    function index () {
	return  'hello.';
	}
}
