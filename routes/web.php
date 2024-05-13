<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Login;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ManageExpertProfile;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[Login::class, 'LoginView']);
Route::get('/addexpert',[ManageExpertProfile::class, 'addExpert']);
Auth::routes();

// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
