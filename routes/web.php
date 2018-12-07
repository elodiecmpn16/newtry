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

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/main','ClientController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/admin', function(){echo "Hello Admin";})->middleware('auth','admin');

Route::get('/agent/profil', function(){echo "Hello Agent";})->middleware('auth','agent');

Route::get('/client/profil','ClientController@afficherStock')->middleware('auth','client');

Route::get('/accueil','ClientController@index')->middleware('auth','client');

Route::get('/stock/afficher','StockController@index')->middleware('auth','client');


Route::get('/accueil/transport', function () {
    return view('transport.accueil_transport');
});

Route::get('/accueil/logistique', function () {
    return view('logistique.accueil_logistique');
});

Route::get('/accueil/location', function () {
    return view('location.accueil_location');
});