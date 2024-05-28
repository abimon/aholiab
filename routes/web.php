<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/','index');
    Route::get('/projects','projects');
    Route::get('/reports','reports');
    Route::get('/contact','contact');
    Route::get('/volunteer','volunteer');
    Route::get('/about','about');
});
Auth::routes();
Route::get('/sms', [HomeController::class,'sms']);