<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageExpertProfile;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/addexpert',[ManageExpertProfile::class, 'addExpert']);
Route::post('/editexpert',[ManageExpertProfile::class, 'editExpert']);
Route::get('/searchexpert',[ManageExpertProfile::class, 'searchExpert']);
Route::get('/editexpert',[ManageExpertProfile::class, 'editExpert']);
Route::get('/generatereport',[ManageExpertProfile::class, 'generateReport']);

Auth::routes();
Auth::routes(['verify' => true]);

// Route::get('/platinum/home', [UserController::class, 'platinumHome'])
// ->name('home.platinum')
// ->middleware('auth','verified','role:platinum');

// Route::get('/staff/home', [UserController::class, 'staffHome'])
// ->name('home.staff')
// ->middleware('auth','verified','role:staff');

// Route::get('/mentor/home', [UserController::class, 'mentorHome'])
// ->name('home.mentor')
// ->middleware('auth','verified','role:mentor');

// Route::get('/{role}/home', [UserController::class, 'home'])
// ->name('home')
// ->middleware('auth', 'verified', 'role:platinum,staff,mentor');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/email/verification-notification', [VerificationController::class, 'resend'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/', [UserController::class, 'index'])->name('profile.index');

Route::get('profile/{user}', [UserController::class, 'show'])->name('profile.show');
Route::get('profile/search/{user}', [UserController::class, 'search'])->name('profile.search');
Route::delete('profile/{user}', [UserController::class, 'destroy'])->name('user.delete');

Route::get('profile/{user}/edit-profile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('profile/{user}/update-profile', [UserController::class, 'update'])->name('profile.update.profile');

Route::get('profile/{user}/edit-image', [UserController::class, 'edit_image'])->name('profile.edit.image');
Route::put('profile/{user}/update-image', [UserController::class, 'upload'])->name('profile.update.image');

Route::get('/insert-user-data/{userId}', [UserController::class, 'insertUserDataForm'])->name('insert.user.data.form');
Route::post('/insert-user-data/{userId}', [UserController::class, 'insertUserData'])->name('insert.user.data');

});