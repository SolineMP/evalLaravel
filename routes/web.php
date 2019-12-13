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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/animals', 'AnimalsController@showAnimals')->name('animals');
route::get('/createAnimal', 'AnimalsController@createAnimal')->name('createAnimal');
Route::post('/storeAnimal', 'AnimalsController@store')->name('storeAnimal');
Route::post('/edit/{id}', 'AnimalsController@edit')->name('editAnimal');
Route::post('/updateAnimal/{id}', 'AnimalsController@update')->name('updateAnimal');
Route::post('/deleteAnimal/{id}', 'AnimalsController@deleteAnimal')->name('deleteAnimal');