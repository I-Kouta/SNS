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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ,ここにログイン時にはいけない
Route::group(["middleware" => "guest"], function() {
  Route::get('/login', 'Auth\LoginController@login')->name('login'); // ルーティング->('任意の名前');
  Route::post('/login', 'Auth\LoginController@login');

  Route::get('/register', 'Auth\RegisterController@register');
  Route::post('/register', 'Auth\RegisterController@register');

  Route::get('/added', 'Auth\RegisterController@added'); // ここはログイン前
  Route::post('/added', 'Auth\RegisterController@added');
});

Route::group(["middleware" => "auth"], function() {
  //ログイン中のページ
  Route::get('/top','PostsController@index');
  Route::post('/top','PostsController@index');

  Route::post('post/create', 'PostsController@create');

  Route::get('/profile','UsersController@profile');
  Route::post('/profile/update','UsersController@profileUpdate');

  // edit, deleteは直接URL入力してもできないようしたいけど、特に実装は不要
  Route::post('post/update', 'PostsController@update');

  Route::get('post/{id}/delete', 'PostsController@delete');

  Route::get('/search','UsersController@index');

  Route::get('/follow-list','PostsController@index');
  Route::get('/follower-list','PostsController@index');

  Route::get('/logout','Auth\LoginController@logout');
});
