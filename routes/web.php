<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/',[HomeController::class,'homepage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('try',function (){ return 444; })->middleware(['auth','admin']);

require __DIR__.'/auth.php';

Route::resource('post',PostController::class)->middleware(['auth','admin']);
Route::get('show_page',[PostController::class,'show_page'])->middleware(['auth','admin']);
Route::get('delete_all',[PostController::class,'delete_all'])->middleware(['auth','admin']);
Route::get('post_details/{id}',[HomeController::class,'post_details']);
Route::get('add_post',[HomeController::class,'add_post'])->middleware('auth');
Route::post('store_post',[HomeController::class,'store_post'])->middleware('auth');
Route::get('my_posts',[HomeController::class,'my_posts'])->middleware('auth');
Route::get('my_posts_delete/{id}',[HomeController::class,'my_posts_delete'])->middleware('auth');
Route::post('my_posts_update/{id}',[HomeController::class,'my_posts_update'])->middleware('auth');
Route::get('Accept_post/{id}',[HomeController::class,'Accept_post'])->middleware('auth');
Route::get('Reject_post/{id}',[HomeController::class,'Reject_post'])->middleware('auth');
