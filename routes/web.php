<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Login;
use App\Http\Controllers\ManageExpertProfile;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
