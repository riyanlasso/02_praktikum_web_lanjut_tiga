<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

//route prefix
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbeledugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelandfriendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

//route parameter
Route::get('/news', function () {
    return redirect('https://www.educastudio.com/news');
});
Route::get('/news/{topik}', function ($topik) {
    return redirect('https://www.educastudio.com/news/' . $topik);
});

//route prefix
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri']);
});
//route biasa
Route::get('about', [AboutController::class, 'about']);
Route::get('contact', [ContactController::class, 'contact']);
