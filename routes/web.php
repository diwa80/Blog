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




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home'  ]);
    Route::get('/post/create', [ 'uses'=> 'PostController@create', 'as' => 'post.create' ]);
    Route::post('/post/store', [ 'uses'=> 'PostController@store', 'as' => 'post.store' ]);
    Route::get('/posts', [ 'uses'=> 'PostController@index', 'as' => 'post.index' ]);
    Route::get('/post/delete/{id}', [ 'uses'=> 'PostController@destroy', 'as' => 'post.delete' ]);
    Route::get('/post/trashed', [ 'uses'=> 'PostController@trashed', 'as' => 'post.trashed' ]);
    Route::get('/post/kill/{id}', [ 'uses'=> 'PostController@kill', 'as' => 'post.kill' ]);
    Route::get('/post/restore/{id}', [ 'uses'=> 'PostController@restore', 'as' => 'post.restore' ]);
    Route::get('/post/edit/{id}', [ 'uses'=> 'PostController@edit', 'as' => 'post.edit' ]);
    Route::post('/post/update/{id}', [ 'uses'=> 'PostController@update', 'as' => 'post.update' ]);

    Route::get('/category/create', [ 'uses'=> 'CategoryController@create', 'as' => 'category.create' ]);
    Route::post('/category/store', [ 'uses'=> 'CategoryController@store', 'as' => 'category.store' ]);
    Route::get('/category/edit/{id}', [ 'uses'=> 'CategoryController@edit', 'as' => 'category.edit' ]);
    Route::post('/category/update/{id}', [ 'uses'=> 'CategoryController@update', 'as' => 'category.update' ]);
    Route::get('/category/delete/{id}', [ 'uses'=> 'CategoryController@destroy', 'as' => 'category.delete' ]);
    Route::get('/categories', [ 'uses'=> 'CategoryController@index', 'as' => 'category.index' ]);

});