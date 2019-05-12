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

Route::get('/','PagesController@index');

Route::get('/about ','PagesController@about');
Route::get('/services','PagesController@services');

// Route::resource('posts','PostsController');

Route::group(['prefix' => 'posts'], function() {
    Route::get('', [
        'uses' => 'PostsController@index',
        'as' => 'posts.index'
    ]);

    Route::get('create', [
        'uses' => 'PostsController@create',
        'as' => 'posts.create'
    ]);

    Route::post('store', [
        'uses' => 'PostsController@store',
        'as' => 'posts.store'
    ]);

    Route::get('/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'posts.edit'
    ]);
     Route::get('show/{id}', [
        'uses' => 'PostsController@show',
        'as' => 'posts.show'
    ]);

	Route::get('edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'posts.edit'
    ]);
    Route::post('update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'posts.update'
    ]);
     Route::get('destroy/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'posts.destroy'
    ]);
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
