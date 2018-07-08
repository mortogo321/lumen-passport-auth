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

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('version', function () use ($router) {
        return $router->app->version();
    });

    $router->get('keygen', function () {
        return str_random(32);
    });
});

$router->group(['middleware' => 'auth', 'prefix' => 'api/v1'], function () use ($router) {
    $router->get('user', 'Api/V1/UserController@user');
});

$router->get('/{any:.*}', 'HomeController@index');
