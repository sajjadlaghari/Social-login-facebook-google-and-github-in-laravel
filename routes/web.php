<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaceBookController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\InstagramController;



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


Route::get('/home', function () {
    return view('home');
});

// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

Route::get('google', [GoogleController::class, 'LoginUsingGoogle'])->name('google-login');
Route::get('/googlecallback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
     
Route::get('/auth/github',[GithubController::class,'github_sign_in'])->name('github-login');
Route::get('/githubcallback',[GithubController::class,'github_callback'])->name('githubcallback');

