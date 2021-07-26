<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router){
$router->put('create', ['uses' => 'AdminController@create']);
$router->put('create', ['uses' => 'ReserveController@create']);
$router->put('create/{id}', ['uses' => 'ReserveController@updateReserve']);
$router->get('reserve', ['uses' => 'ReserveController@getAllReserve']);
$router->get('about', ['uses' => 'AboutController@getAllAbout']);
$router->get('reserve/{id}', ['uses' => 'ReserveController@getOneReserve']);
$router->delete('reserve/{id}', ['uses' => 'ReserveController@delete']);

});