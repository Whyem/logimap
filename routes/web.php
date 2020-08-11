<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Villes----------------------------------------------------------------------
Route::get('/listeville', 'VilleController@index')->name('Villes');
Route::post('/ajouterville', 'VilleController@store')->name('Ajoutvilles');
Route::get('/ajoutervilleview', 'VilleController@create');
Route::get('/searchville', 'VilleController@search');
Route::get('editville/{id}', 'VilleController@edit');
Route::put('updateville/{id}', 'VilleController@update');
Route::get('detailville/{id}', 'VilleController@show');
Route::delete('deleteville/{id}', 'VilleController@destroy');

//Secteurs--------------------------------------------------------------------
Route::get('/listesecteur', 'SecteurController@index')->name('Secteurs');
Route::get('/ajoutersecteurview', 'SecteurController@create');
Route::get('/searchsecteur', 'SecteurController@search');
Route::post('/ajoutersecteur', 'SecteurController@store')->name('Ajoutsecteurs');
Route::get('editsecteur/{id}', 'SecteurController@edit');
Route::put('updatesecteur/{id}', 'SecteurController@update');
Route::get('detailsecteur/{id}', 'SecteurController@show');
Route::delete('deletesecteur/{id}', 'SecteurController@destroy');

//Etages-------------------------------------------------------------------------
Route::get('/listeetage', 'EtageController@index')->name('Etages');
Route::get('/ajouteretageview', 'EtageController@create');
Route::get('/searchetage', 'EtageController@search');
Route::post('/ajouteretage', 'EtageController@store')->name('Ajoutetages');
Route::get('editetage/{id}', 'EtageController@edit');
Route::put('updateetage/{id}', 'EtageController@update');
Route::get('detailetage/{id}', 'EtageController@show');
Route::delete('deleteetage/{id}', 'EtageController@destroy');

//Equipements---------------------------------------------------------------------
Route::get('/listeequipement', 'EquipementController@index')->name('Equipements');
Route::get('/ajouterequipementview', 'EquipementController@create');
Route::get('/searchequipement', 'EquipementController@search');
Route::post('/ajouterequipement', 'EquipementController@store')->name('Ajoutequipements');
Route::get('editequipement/{id}', 'EquipementController@edit');
Route::put('updateequipement/{id}', 'EquipementController@update');
Route::get('detailequipement/{id}', 'EquipementController@show');
Route::delete('deleteequipement/{id}', 'EquipementController@destroy');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');