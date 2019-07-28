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

Route::get('/', 'ContentsController@index')->name('welcome');
Route::get('/business', 'ContentsController@business')->name('business');
Route::get('/politics', 'ContentsController@politics')->name('politics');
Route::get('/health', 'ContentsController@health')->name('health');
Route::get('/arts', 'ContentsController@arts')->name('arts');
Route::get('/religion', 'ContentsController@religion')->name('religion');
Route::get('/editorial', 'ContentsController@editorial')->name('editorial');
Route::get('/opinions', 'ContentsController@opinions')->name('opinions');
Route::get('/environment', 'ContentsController@environment')->name('environment');
Route::get('/sports', 'ContentsController@sports')->name('sports');
Route::get('/about-us', 'ContentsController@about')->name('about');
Route::get('/terms-of-agreement', 'ContentsController@terms')->name('terms');
Route::get('/privacy-policy', 'ContentsController@policy')->name('policy');
Route::get('/advert-rate', 'ContentsController@advert')->name('advert');
Route::get('/directory', 'ContentsController@directory')->name('directory');
Route::get('/ireport', 'ContentsController@ireport')->name('ireport');
Route::get('/writeforus', 'ContentsController@writeforus')->name('writeforus');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/the-marketplace', 'AdvertController@index')->name('marketplace.index');


Route::get('/news/post', 'ContentsController@newpost')->name('post');

Route::get('/contact-us', 'ContactController@index')->name('contact.index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Admin section

Route::prefix('admin')->group(function()
{

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/dashboard', 'Admin\AdminRouteController@dashboard')->name('admin.dashboard');
    Route::get('/page-categories', 'Admin\AdminRouteController@pages')->name('page.categories');

    Route::resource('/settings', 'Admin\AccountSettingsController');
    Route::resource('/posts', 'Admin\PostController');
    Route::resource('/users', 'Admin\UsersController');
    Route::resource('/directories', 'Admin\DirectoryController');

    Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::get('/lga', 'Admin\AccountSettingsController@loadLGA');

});

Route::get('/lga', 'Admin\AccountSettingsController@loadLGA');
