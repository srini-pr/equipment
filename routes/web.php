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
    return [
        "name" => "equipment",
        "version" => "0.1"
    ];
});

$router->group(['prefix' => 'equipment'], function ($route) {
    $route->get('/', 'EquipmentController@index');
    $route->post('/', 'EquipmentController@store');
    $route->get('/{id}', 'EquipmentController@get');
    $route->put('/{id}', 'EquipmentController@update');
    $route->delete('/{id}', 'EquipmentController@delete');
    $route->post('/{id}/restore', 'EquipmentController@restore');
    $route->delete('/{id}/purge', 'EquipmentController@purge');
});