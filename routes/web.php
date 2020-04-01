<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','test\TestController@index');

Route::get('wsdl/server', function(){
    new App\Http\Wsdl\WsdlDocumentation();
    //require
	//new App\Http\Wsdl\WsdlServer()->description();
    /*
    return "Sample XML to be posted to this endpoint<br>".
    htmlentities("<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ser=\"http://sb.ecs.vodafone.nl/servicebus/\">
       <soapenv:Header>
          <ser:authenticationHeader>
             <username>?</username>
             <password>?</password>
             <applicationId>?</applicationId>
          </ser:authenticationHeader>
       </soapenv:Header>
       <soapenv:Body>
          <ser:test>
            <arg>
                {here be your argument}
            </arg>
          </ser:test>
       </soapenv:Body>
    </soapenv:Envelope>");
    */
});

// should this be on the API?
Route::post('wsdl/server', function(){
    new App\Http\Wsdl\WsdlServer;
});
