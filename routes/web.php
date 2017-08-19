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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','WelcomeController@index');
Route::get('/read-more','WelcomeController@blogReadmore');
Route::get('/categorie-details','WelcomeController@detailsCategorie');
Route::get('/contact','WelcomeController@getContact');


Route::get('admin','AdminController@index');
Route::post('admin-login','AdminController@adminLogin');
Route::get('admin-dashboard','SupperAdminController@index');
Route::get('admin-logout','SupperAdminController@adminLogout');


Route::get('categorie-add','CategorieController@index')->name('categorie-add');


