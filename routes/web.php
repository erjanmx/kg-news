<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/news', 'ArticleController@index');

/*
Route::get('/news', function () {
    return view('index');
});

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/top', function () use ($app) {
    return view('top');
});

$app->get('/news', [
    'as' => 'ct', 'uses' => 'ArticleController@index'
]);

$app->get('/ct/{timestamp}', [
    'as' => 'ct', 'uses' => 'ArticleController@getCountNew'
]);

$app->get('/cl/{url}', [
    'as' => 'ct', 'uses' => 'ArticleController@click'
]);

$app->get('/tops', [
    'as' => 'top', 'uses' => 'ArticleController@top'
]);
*/