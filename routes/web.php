<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('xyz', function () {
//     return view('xyz');
// });


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/userindex', function () {
    return view('userindex');
});



Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/proudact-details', function () {
    return view('proudact-details');
});

Route::get('/prodects', function () {
    return view('products');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::view('/register','register');

Route::view('/terms','terms');




