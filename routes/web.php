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
    return view('welcome');
});
Route::get('/me', function () {
    return 'Imzoughene Youssef';
});
Route::get('/moi', function () {
    return '<h1>Imzoughene Youssef</h1>';
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/name/{name}/{age}', function ($name, $age) {
    return 'my name is : '.$name.' my age is : '.$age;
});
