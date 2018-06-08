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
    'uses' => 'NoticiesController@index', 'NoticiesController@fanfic_random']);

Route::get('/fanfictions/{button}', [
    'as' => 'fanfictions',
    'uses' => 'HistoriesController@index']);

Route::get('/fanfictions/{titol}', [
    'as' => 'fanfic-escollit',
    'uses' => 'HistoriesController@veure_fanfic']);


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
    Route::post('admin/category/{category}', [
        'as' => 'update-category',
        'uses' => 'backend\CategoryController@update']);
    Route::resource('admin/fanfics', 'backend\HistoriesCRUDController');
    Route::resource('admin/noticies', 'backend\NoticiesCRUDController');
    Route::post('admin/noticies/{noticia}', [
        'as' => 'update-noticia',
        'uses' => 'backend\NoticiesCRUDController@update']);
    Route::get('admin/noticies/{noticia}/edit', [
        'as' => 'edit-noticia',
        'uses' => 'backend\NoticiesCRUDController@edit']);
    Route::resource('admin/user', 'UserController');
});
Route::get('user/{name}', [
    'as' => 'backend-user',
    'uses' => 'backend\UserbackendController@index']);
Route::resource('user/{name}/fanfiction', 'backend\HistoriesUserController');

//Rutes per CRUD histories
Route::post('user/{name}/fanfiction/create', [
    'as' => 'crear-historia',
    'uses' => 'backend\HistoriesUserController@store']);
//Route::get('user/{name}/fanfiction/{fanfiction}/edit', [
//    'as' => 'edit-historia',
//    'uses' => 'backend\HistoriesUserController@edit']);

Route::post('user/{name}/fanfiction/{fanfiction}', [
    'as' => 'update-historia',
    'uses' => 'backend\HistoriesUserController@update']);
//FInal rutes per CRUD histories
Route::bind('category', function($category) {

    return App\Category::find($category);
});

Route::post('admin/category/{category}', [
    'as' => 'update-category',
    'uses' => 'backend\CategoryController@update']);
