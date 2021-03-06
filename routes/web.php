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

// should be on the API routes..?
Route::get('wsdl/server/{service}', function ($service) {
    return response(new App\Http\Wsdl\WsdlDocumentation($service))
        ->header('Content-Type', 'text/xml');
});

// should this be on the API?
Route::post('wsdl/server/{service}', function($service){
    new App\Http\Wsdl\WsdlServer($service);
});
