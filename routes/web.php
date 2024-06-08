<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/profile', function () {
//     return view('profile');
// })->name('myprofile');

Route::get('/login',[Login::class, 'LoginView']);
Route::get('/addexpert',[ManageExpertProfile::class, 'addExpert']);
Route::post('/editexpert',[ManageExpertProfile::class, 'editExpert']);
Route::get('/searchexpert',[ManageExpertProfile::class, 'searchExpert']);
Route::get('/editexpert',[ManageExpertProfile::class, 'editExpert']);
Route::get('/generatereport',[ManageExpertProfile::class, 'generateReport']);