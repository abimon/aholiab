<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (Auth()->user()->fname != null) {
            return view('dashboard.index');
        } else {
            return view('auth.step-two');
        }
    });
    Route::resources([
        'user' => UserController::class,
        'chat'=>ChatController::class,
        'event'=>ReportController::class,
    ]);
    Route::get('/profile', function () { 
        return view('dashboard.user.profile');
    });

});