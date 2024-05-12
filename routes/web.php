<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Login',Login::class);
Route::resource('Expert',ExpertController::class);