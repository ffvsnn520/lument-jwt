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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/auth/login', 'AuthController@loginPost');
$app->group(['middleware' => 'jwt.auth'], function($app) {
    $app->post('/posts', [
        'as'   => 'a',
        'uses' => 'PostController@create'
    ]);
    $app->PUT('/posts/{postId}', 'PostController@update');
    $app->GET('/posts', 'PostController@index');
});

/*
$app->GET('/posts', 'PostController@index');
$app->POST('/posts', 'PostController@create');
$app->PUT('/posts/{postId}', 'PostController@update');*/