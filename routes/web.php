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

//Home page route
Route::get('/', 'TestController@Index');

//posts page route
route::get('/posts','TestController@posts');

// Creating a new post routes
Route::get('/posts/create','TestController@create');
Route::post('/posts','TestController@store');

// Updating routes
Route::get('posts/edit/{id}','TestController@edit');
Route::put('posts/{id}','TestController@update');

// deleting route
Route::delete('posts/{id}','TestController@destroy') -> name('posts.destroy');

//Showing one post route
Route::get('/posts/{id}', 'TestController@Show');

//About page route
Route::get('/About', 'TestController@About');

//Contact page route
Route::get('/Contact', 'TestController@Contact');
Route::post('/Contact','TestController@StoreContact');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
