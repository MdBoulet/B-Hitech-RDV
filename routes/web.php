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
    return view('welcome');
});

Route::get('/acte-naissance', 'ActeBiometriqueController@index')->name('acte');
Route::get('/demande-acte', 'ActeBiometriqueController@create')->name('demandeActe');

Route::get('/carte-nationale', 'CarteController@index')->name('carte');
Route::get('/demande-carte', 'CarteController@create')->name('demandeCarte');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin/carte/{id}', 'AdminController@showCarte')->name('showCarte')->middleware('auth');

Route::get('/admin/acte', 'AdminController@acte')->name('acteDeNaissance')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/appointment', function() {
    return view('appointment.index');
});
