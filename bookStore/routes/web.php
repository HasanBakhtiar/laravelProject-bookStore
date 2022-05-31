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
    echo 'Hello';
});

Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/','indexController@index')->name('index');

    Route::group(['namespace'=>'publisher','prefix'=>'publisher','as'=>'publisher.'],function(){
            Route::get('/','indexController@index')->name('index');
            Route::get('/add','indexController@create')->name('create');
            Route::post('/add','indexController@store')->name('create.post');
    });
});
