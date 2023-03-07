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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Products
Route::prefix('products')->group(function(){
    Route::get('/marbel-edu-games', [ProductsController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'kidsgames']);
    Route::get('/riri-story-books', [ProductsController::class, 'riristory']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolakkids']);
});