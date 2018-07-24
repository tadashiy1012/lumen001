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

$router->get('/hoge', function() use ($router) {
    return 'hoge hoge hoge!';
});

$router->get('/list', function() use ($router) {
    $ls = ['hoge', 'fuga', 'piyo'];
    return $ls;
});

$router->get('/listv', function() use ($router) {
    $ls = ['hoge', 'fuga', 'piyo'];
    return view('listview', compact('ls'));
});

$router->get('/user/{id}', function($id) {
    return 'user:' .$id;
});

$router->get('/choge', 'HogeController@get');

$router->get('/calc', 'HogeController@calc');

$router->get('/json', function() use ($router) {
    $obj = [['name' => 'yama', 'age' => 31], ['name' => 'taro', 'age' => 22]];
    return response()->json($obj);
});

$router->post('/post', 'HogeController@post');