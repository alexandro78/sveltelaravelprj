<?php
namespace App;

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


Route::get('/about', function () {
    return Inertia\Inertia::render('AboutC');
})->name('about');

Route::get('/contact', function () {
    return Inertia\Inertia::render('ContactC');
})->name('contact');
Route::get('/', [HomeController::class, 'index'])->name('content');
Route::get('/test', [HomeController::class, 'test'])->name('test');


Route::view("search", "search");
Route::get('/res', [HomeController::class, 'getFormRequest'])->name('res');
// Route::get('/search', [HomeController::class, 'search'])->name('search');




