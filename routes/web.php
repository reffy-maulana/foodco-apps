<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);

Route::get('/regist', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('/admin', [AuthController::class, 'login_post']);


Route::group(['middleware' => 'admin'], function(){
    Route::get('admin', [HomeController::class, 'admin']);
});



Route::get('/about', function () {
    return view('about');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/menu', function () {
    return view('menu');
});
