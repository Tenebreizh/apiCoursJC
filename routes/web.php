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
    $path = base_path() . "/resources/meteo.json";
    return file_get_contents($path);
});

$router->get('/download', function () use ($router) {
    $path = base_path() . "/resources/meteo.json";
    return response()->download($path);
});