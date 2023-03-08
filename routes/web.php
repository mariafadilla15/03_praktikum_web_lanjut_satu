<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Auth::routes();

Route::get('/', function () {
    return view('bladephp.homee', ['nama'=>'Maria Fadilla']);
})->name('hm');

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames'])->name('meg');
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kidsgames'])->name('mkg');
    Route::get('/riri-story-books', [ProductController::class, 'riristory'])->name('rs');
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkids'])->name('kk');
});

Route::get('/news/{namaberita?}', [NewsController::class, 'news'])->name('nw');

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir'])->name('kr');
    Route::get('/magang', [ProgramController::class, 'magang'])->name('mg');
    Route::get('/kunjungan-industri', [ProgramController::class, 'industri'])->name('ki');
});

Route::get('/home/about-us', [AboutController::class, 'about'])->name('abt');

Route::resource('contact-us',  ContactController::class)->only(['index']);