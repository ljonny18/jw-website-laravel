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


// Route::get('/hello', function () {
//     return "<h1>hello world</h1>";
// });

// Route::get('/users/{id}/{name}', function($id, $name) {
//     return 'This is user '.$name.' with and id of '.$id;
// });



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/profile', function () {
//     return view('pages.profile');
// });

Route::get('/', 'PagesController@index');
Route::get('/profile', 'PagesController@profile');