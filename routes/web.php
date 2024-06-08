<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/addExpert', [ExpertController::class, 'addExpert'])->name('addExpert');
Route::post('/store-expert', [ExpertController::class, 'store'])->name('storeExpert');
Route::get('/viewexpert', [ExpertController::class, 'viewExpert'])->name('listexpert');
Route::get('editExpert/{id}', [ExpertController::class, 'editExpert'])->name('editExpert');
Route::post('updateExpert', [ExpertController::class, 'updateExpert'])->name('updateExpert');
Route::get('/searchexpert', [ExpertController::class, 'searchExpert']);
Route::get('/generatereport', [ExpertController::class, 'generateReport']);
Route::get('/viewlist-expert', [ExpertController::class, 'viewlistExpert']);
Route::get('/deleteExpert/{id}', [ExpertController::class, 'deleteExpert']);
Route::get('/view', [ExpertController::class, 'view']);