<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwetController;
use App\Models\Twet;

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

Route::get('/interaction', function () {
    return view('groups');
})->middleware(['auth'])->name('/interaction');

Route::get('/exclusive', function () {
    return view('premium');
})->middleware(['auth'])->name('/exclusive');

Route::get('/posts', function () {
    return view('home');
})->middleware(['auth'])->name('/posts');

/*rota para criar tweet */
Route::get('/twet', [TwetController::class,'index'])->name('home');

/*rota para criar tweet */
Route::post('/twet', [TwetController::class,'store']);

Route::get('/dashboard', function () {
    

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

Route::get('/tweet',[TweetController::class,'index'])->name('home');


