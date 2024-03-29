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
    return view('index', [
        'host' => request()->url(),
        'year' => date('Y'),
    ]);
});


$router->group(['prefix' => 'api/'], function () use ($router) {
    $router->get('extract/start={start}&end={end}&kind={kind}', [
        'uses' => 'Core@extractWithKind'
    ]);

    $router->get('extract/start={start}&end={end}', [
        'uses' => 'Core@extract'
    ]);

    $router->get('export/kind={kind}', [
        'uses' => 'Core@exportWithKind'
    ]);

    $router->get('export', [
        'uses' => 'Core@export'
    ]);
});
