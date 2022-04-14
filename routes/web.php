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

$router->get(
    '/',
    [
        'as' => 'main-home',
        'uses' => 'MainController@home'
    ]
);

$router->get(
    '/characters/{id}',
    [
        'as' => 'characters-index',
        'uses' => 'CharacterController@index'
    ]
);


$router->get(
    '/houses',
    [
        'as' => 'houses-list',
        'uses' => 'HouseController@list'
    ]
);

$router->get(
    '/house/{id}',
    [
        'as' => 'houses-index',
        'uses' => 'HouseController@index'
    ]
);
