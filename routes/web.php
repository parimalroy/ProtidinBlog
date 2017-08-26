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
Route::get('/read-more/{id}','WelcomeController@blogReadmore');
Route::get('/categorie-details/{id}','WelcomeController@detailsCategorie');
Route::get('/contact','WelcomeController@getContact');


Route::get('admin','AdminController@index');
Route::post('admin-login','AdminController@adminLogin');
Route::get('admin-dashboard','SupperAdminController@index');
Route::get('admin-logout','SupperAdminController@adminLogout');


Route::get('categorie-add','CategorieController@index')->name('categorie-add');
Route::post('categorie-add','CategorieController@saveCategorie')->name('categorie-add');
Route::get('categorie-manage','CategorieController@manageCategorie')->name('categorie-manage');
Route::get('categorie-publish/{id}','CategorieController@unublishCategorie')->name('categorie-publish');
Route::get('categorie-unpublish/{id}','CategorieController@publishCategorie')->name('categorie-unpublish');
Route::get('categorie-delete/{id}','CategorieController@deleteCategorie')->name('categorie-delete');
Route::get('categorie-edit/{id}','CategorieController@editCategorie')->name('categorie-edit');
Route::post('categorie-update','CategorieController@updateCategorie')->name('categorie-update');


Route::get('blog-add','BlogController@index')->name('blog-add');
Route::post('blog-save','BlogController@saveBlog')->name('blog-add');

Route::post('save-comment','WelcomeController@saveComment');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
