<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('index');
});

Route::get('/blog', function(){
    return view('blog.index');
});

Route::get('/profile/{user:username}', [ProfileController::class, 'index']);
Route::post('/profile/{user:username}', [ProfileController::class, 'update']);
Route::get('/profile/{user:username}/edit', [ProfileController::class, 'edit']);



Route::get('/blog/detail', function(){
    return view('blog.detail');
});

Route::get('/mading', function(){
    return view('mading.index');
});

Route::get('/diskusi', function(){
    return view('diskusi.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');