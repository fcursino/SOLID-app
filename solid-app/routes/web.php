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

$router->post("so/calculadora/quadrado", 'CalculadoraAreaController@calcularAreaQuadrado');

$router->post("so/calculadora/retangulo", 'CalculadoraAreaController@calcularAreaRetangulo');

$router->get("i/consumo/lanches", 'ConsumoLanchesController@consumirLanches');

$router->get("ld/link/video", 'ConteudoController@entregarLinkVideo');

$router->get("ld/link/pdf", 'ConteudoController@entregarLinkPdf');
