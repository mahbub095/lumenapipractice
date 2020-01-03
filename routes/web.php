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

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/
$router->get('/get', function () use ($router) {
    return "I am get";
});

$router->post('/post', function () use ($router) {
    return "I am post";
});


$router->post('/mahbub', function ()  {
    return "I am Mahbub";
});

//$router->get('/','MyController@My');
$router->get('/First','MyController@First');
$router->get('/Second','MyController@Second');
$router->get('/Download','MyController@Download');
$router->post('/catch','MyController@catch');

//$router->get('/','ExampleController@testConn');

$router->get('/details','DetailsController@DetailsSelect');
$router->post('/details','DetailsController@DetailsCreate');
$router->delete('/details','DetailsController@DetailsDelete');
$router->put('/details','DetailsController@DetailsUpdate');

$router->get('/builder','BuilderController@AllRows');
