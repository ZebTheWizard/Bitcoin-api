<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
  "prefix" => "user",
  "middleware" => "auth:api"
],function () {
  Route::post('create', 'UserController@create');
  Route::post('login', 'UserController@login');
  Route::get('read/{uid}', 'NoteController@read');
  Route::get('update', 'NoteController@update');
  Route::get('delete', 'NoteController@delete');
});

Route::group([
  "prefix" => "note",
  "middleware" => "auth:api"
],function () {
  Route::get('fetch', 'NoteController@fetch');
  Route::post('create', 'NoteController@create');
  Route::get('read/{uid}', 'NoteController@read');
  Route::get('update', 'NoteController@update');
  Route::get('delete', 'NoteController@delete');
});
