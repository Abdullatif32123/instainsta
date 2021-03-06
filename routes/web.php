<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/profile/{user_id}', [App\Http\Controllers\ProfilesController::class, 'index'])->name("profile.id");
Route::get("/p/create",[PostsController::class,"create"]);
Route::post("/p/store",[PostsController::class,"store"]);
Route::get("/p/{post_id}",[PostsController::class,"show"]);