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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
  $http = new GuzzleHttp\Client;
  // dd($http);
  $response = $http->post('http://localhost:8000/oauth/token', [
      'form_params' => [
          'grant_type' => 'password',
          'client_id' => '8',
          'client_secret' => 'lYemmAYY8GROALR0iWoyLDfKYL4cvXN0qY1X28Fm',
          'username' => 'burroughszeb@me.com',
          'password' => 'asdfasdf',
          'scope' => '',
      ],
  ]);
  //
  return json_decode((string) $response->getBody(), true);
});
