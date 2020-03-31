<?php

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

$router->post('user', 'UserController@store');
$router->get('user', 'UserController@index');
$router->get('user/{id}', 'UserController@show');
$router->put('user/{id}', 'UserController@update');
$router->delete('user/{id}', 'UserController@destroy');

$router->post('git', 'GitController@store');
$router->get('git', 'GitController@index');
$router->get('git/{id}', 'GitController@show');
$router->put('git/{id}', 'GitController@update');
$router->delete('git/{id}', 'GitController@destroy');
