<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/hh', function () {
//     return Inertia\Inertia::render('HomeC');
// })->name('home0');

Route::get('/about', function () {
    return Inertia\Inertia::render('AboutC');
})->name('about');

Route::get('/contact', function () {
    return Inertia\Inertia::render('ContactC');
})->name('contact');

Route::get('/content', function () {
    return Inertia\Inertia::render('ContentC');
});

// Route::get('/test', function () {
//     return Inertia\Inertia::render('test');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', [HomeController::class, 'test'])->name('test');

