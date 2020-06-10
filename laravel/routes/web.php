<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/blog', 'PageController@blog')->name('blog');
// Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/contact', 'MailController@contact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::post('/newsletter', 'NewsLetterController@postNewsletter')->name('newsletter');

Route::get('/donations', 'PageController@donations')->name('donations');
Route::get('/privacy', 'PageController@privacy')->name('privacy');

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

