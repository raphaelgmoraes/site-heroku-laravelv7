<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
*	WEB :: METHOD => GET
*/

Route::get('/', 'WebController@home')->name('home');
Route::get('/sobre', 'WebController@about')->name('about');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog/{uri}', 'WebController@article')->name('article');
Route::get('/contact', 'WebController@contact')->name('contact');

/*
*	WEB >> FORM PAGE CONTACT e HOME:: METHOD => POST > @csrf !!!
*/
Route::post('/send-mail', 'WebController@sendmail')->name('send-mail');
Route::get('/contact-success', 'WebController@contact_success')->name('contact-success');

