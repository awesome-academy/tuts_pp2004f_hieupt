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

Route::get('/',	function()	
{
return	'Welcome	to	our	home	page!';
});

Route::get('/',	'PagesController@home');
Route::get('/about',	'PagesController@about');
Route::get('/contact',	'PagesController@contact');
Route::get('/contact',	'TicketsController@create');
Route::post('/contact',	'TicketsController@store');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');







// Route::get('test/menu','Test\MenuController@menu');
// Route::get('test/search', 'Test\MenuController@search')->name('search');
// Route::get('test/update', 'Test\MenuController@update')->name('update');
// Route::get('test/complete', 'Test\MenuController@complete')->name('complete');
