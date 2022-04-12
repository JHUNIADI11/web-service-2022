<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/tentang', function () {
//     return view('about');
// });

Route::get('/about', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

// route::get('/nama', function(){
//     return 'juniadi';

// });

// Route::get('dari-view', function () {
//     return view('welcome');
// });

//Crud data
//  Route::get('blog','BlogController@index');
//  Route::get('add','BlogController@create');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'App\Http\Controllers\BlogController@index');

Route::get('/blog/create', 'App\Http\Controllers\BlogController@create')->name('blog.create');

Route::post('/blog/store', 'App\Http\Controllers\BlogController@store')->name('blog.store');
