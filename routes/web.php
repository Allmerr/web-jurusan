<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\Blog;
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
    return view('blog.index' , [
        'posts' => Blog::all(),
    ]);
});

Route::get('/blog/detail/{blog:slug}', function(Blog $blog){
    return view('blog.detail', [
        'post' => $blog,
    ]);
});

Route::get('/profile/{user:username}', [ProfileController::class, 'index']);
Route::post('/profile/{user:username}', [ProfileController::class, 'update']);
Route::get('/profile/{user:username}/edit', [ProfileController::class, 'edit']);


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

Route::get('/dashboard/blog/checkSlug', [BlogController::class , 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/blog', BlogController::class)->middleware('auth');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');