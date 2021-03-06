<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));
Route::get('login', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));
Route::post('login', array('as' => 'auth.login', 'uses' => 'AuthenticationController@postLogin'));
Route::get('logout', array('as' => 'auth.logout', 'uses' => 'AuthenticationController@logout'));
Route::get('register', array('as' => 'auth.register', 'uses' => 'AuthenticationController@register'));
Route::get('home', array('as' => 'home', 'uses' => 'HomeController@menuUtama'));

Route::resource('users', 'UsersController');

Route::resource('sasaran', 'SasaransController');
Route::resource('biros', 'BirosController');

Route::resource('renstras', 'RenstrasController');
Route::resource('penetapan-kinerja', 'TapkinsController');
Route::resource('rkt', 'RktController');
Route::resource('capaian', 'CapaiansController');
Route::resource('anggaran', 'AnggaransController');

// Route::resource('sasaran.indikator', 'IndikatorsController');
//Route::resource('RKTS', 'RKTsController');
// Route::resource('capaian-tapkins', 'CapaianTapkinsController');