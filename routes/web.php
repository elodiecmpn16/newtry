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

Route::get('/admin/profil', function(){
    return view('admin/profil');
});

Route::get('/agent/profil', function(){
    return view('agent/profil');
});

Route::get('/client/profil', function(){
    return view('client/profil');
});
Route::resource('test', 'FormController');
//Route::get('/test', 'FormController@index');
//
//Route::post('/store','FormController@results');

//Route::get('/client/profil','ClientController@afficherStock')->middleware('auth','client');

Route::get('/accueil','ClientController@index')->middleware('auth','client');

Route::get('/stock/afficher','StockController@index');
//Route::get('/stock/infos','StockController@index');
Route::get('/client/stocks','ClientController@afficherStock');


Route::get('/accueil/transport', function () {
    return view('transport.accueil_transport');
});

Route::get('/accueil/logistique', function () {
    return view('logistique.accueil_logistique');
});

Route::get('/accueil/location', function () {
    return view('location.accueil_location');
});