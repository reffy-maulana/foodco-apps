<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/partner', function () {
    return view('partner');
});
