<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Login;
use App\http\Controllers\ExpertController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[Login::class, 'LoginView']);
Route::get('/addexpert',[ExpertController::class, 'addExpert']);
Route::get('/viewexpert',[ExpertController::class, 'viewExpert']);
Route::get('/editexpert',[ExpertController::class, 'editExpert']);