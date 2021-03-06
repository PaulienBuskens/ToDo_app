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


Route::get('/', 'CreatesController@home');
Route::get('/create', function(){
    return view('create');
});


Route::get('/signin', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/logout', function(){
    Auth::logout();

    return Redirect::to('/');
})->middleware("auth");


Route::get('/archief', 'CreatesController@archief');


Route::post('/insert', 'CreatesController@add');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');
Route::get('/done/{id}', 'CreatesController@done');
Route::post('/finished/{id}', 'CreatesController@finished');
Route::get('deleteDone/{id}', 'CreatesController@deleteDone');


Route::post('/register_action', 'RegisterController@store');
Route::post('/login_check', 'RegisterController@login');

Route::post('/items/{items}/comments', 'CommentsController@store');


Route::get('pagenotfound', ['as'=> 'notfound','uses'=>'CreatesController@pagenotfound']);
