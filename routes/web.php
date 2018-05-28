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
Route::bind('category', function($category) {
    return App\Category::find($category);
});
Route::get('/', [
    'as' => 'noticies',
    'uses' => 'NoticiesController@index', 'NoticiesController@fanficRandom']);

Route::get('/fanfictions', [
    'as' => 'fanfictions',
    'uses' => 'HistoriesController@index']);

Route::get('/fanfictions/{titol}', [
    'as' => 'fanfic-escollit',
    'uses' => 'HistoriesController@veure_fanfic']);

Route::get('/ultims', [
    'as' => 'fanfic-ultims',
    'uses' => 'HistoriesController@ultims']);

Route::get('/nous', [
    'as' => 'fanfic-nous',
    'uses' => 'HistoriesController@nous']);
Auth::routes();

//Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout']);
//Backend
//Login
Route::get('admin/login', 'auth\LoginadminController@showLoginForm');
Route::post('admin/login', 'auth\LoginadminController@login');
//Categories del backend
Route::group(['middleware' => 'admin'], function () {
    Route::resource('admin/category', 'backend\CategoryController');
    Route::resource('admin/fanfics', 'backend\HistoriesCRUDController');
    Route::resource('admin/noticies', 'backend\NoticiesCRUDController');
    Route::resource('admin/user', 'UserController');
});

