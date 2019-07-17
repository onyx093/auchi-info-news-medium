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

Route::get('/', 'ContentsController@home')->name('welcome');
Route::get('/business', 'ContentsController@business')->name('business');
Route::get('/politics', 'ContentsController@politics')->name('politics');
Route::get('/health', 'ContentsController@health')->name('health');
Route::get('/arts', 'ContentsController@arts')->name('arts');
Route::get('/religion', 'ContentsController@religion')->name('religion');
Route::get('/editorial', 'ContentsController@editorial')->name('editorial');
Route::get('/opinions', 'ContentsController@opinions')->name('opinions');
Route::get('/environment', 'ContentsController@environment')->name('environment');
Route::get('/sports', 'ContentsController@sports')->name('sports');
Route::get('/about', 'ContentsController@about')->name('about');
Route::get('/terms', 'ContentsController@terms')->name('terms');
Route::get('/policy', 'ContentsController@policy')->name('policy');
Route::get('/advert', 'ContentsController@advert')->name('advert');
Route::get('/directory', 'ContentsController@directory')->name('directory');
Route::get('/ireport', 'ContentsController@ireport')->name('ireport');
Route::get('/writeforus', 'ContentsController@writeforus')->name('writeforus');


Route::get('/news/post', 'ContentsController@newpost')->name('post');

Auth::routes();

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
