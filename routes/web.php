<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\Feedbackcontroller;
use App\Models\feedback;
use App\Models\kategori;
use Illuminate\Support\Facades\Auth;
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

Route::get('feedback', [Feedbackcontroller::class, 'feedback']);
Route::post('/feedback', [Feedbackcontroller::class, 'store'])->name('feedback.store');

Route::resource('feedback', FeedbackController::class);
Route::get('/', function () {
    $kategori=kategori::all();
    return view('welcome',compact('kategori'));
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

Route::get('feedbacks', [FrontController::class,'feedback']);
Route::group(['middleware'=>'auth'],function(){
    Route::get('habits', [Frontcontroller::class, 'about']);
});


