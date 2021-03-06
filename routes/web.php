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

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('{n}', function ($n) {
    return view('vue1');
})->where('n', '[1-3]');

Route::get('facture/{n}', function ($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('compte', 'UsersController@getInfos');
Route::post('compte', 'UsersController@postInfos');
