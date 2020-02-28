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

// Route::get('home', function () {
//     return view('home',[
//     	'name' => 'HOme Page',
//     ]);
// });

// Route::get('php', function () {
//     return view('php',[
//     	'data' => array(
//     	'frurit1' => 'apple',
//     	'frurit2' => 'orange',
//     	'frurit3' => 'stawberry',
//     	'frurit4' => 'lime',
//     	)
//     ]);
// });

// Route::get('js', function () {
//     return view('js',[
//     	'data' => array(
//     	'frurit1' => 'apple',
//     	'frurit2' => 'orange',
//     	'frurit3' => 'stawberry',
//     	'frurit4' => 'lime',
//     	)
//     ]);
// });

Route::get('/home','HomeController@index');
Route::get('/php','HomeController@PhpPage');
Route::get('/js','HomeController@JsPage');

Route::get('/receipe','ReceipeController@index');

