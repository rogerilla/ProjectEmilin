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

Route::get('/', [
    'as' => 'noticies',
    'uses' => 'NoticiesController@index']); 
        
Route::get('/fanfictions', [
    'as' => 'fanfictions',
    'uses' => 'HistoriesController@index']);

Route::get('/fanfictions/{titol}', [
    'as' => 'fanfic-escollit',
    'uses' => 'HistoriesController@veure_fanfic']);

Route::get('/ultims', [
    'as' => 'fanfic-ultims',
    'uses' => 'HistoriesController@ultims']);