<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MenuController;


Route::get('/', [HomeController::class, 'index'])->name('base_url');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login_post', [AuthController::class, 'login_post']);

Route::get('/regist', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);


// Route::group(['middleware' => 'admin'], function(){
//     Route::get('/', [HomeController::class, 'admin']);
// });


Route::get('logout', [AuthController::class, 'logout']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/partner', [PartnerController::class, 'partner'])->name('partner');
Route::get('/partner/add_partner', [PartnerController::class, 'create'])->middleware('auth');
Route::post('/partner', [PartnerController::class, 'store']);
Route::get('/partner/{partner}/menu', [MenuController::class, 'menu'])->name('menus');
// Route::get('/partner/{partner}/menu/addmenu',[MenuController::class, 'create'])->middleware('auth');
Route::post('/partner/{partner}/menu', [MenuController::class, 'store'])->name('store.menu');
Route::put('/partner/{partner}', [PartnerController::class, 'update'])->name('partner.update');
Route::delete('/partner/{partner}', [PartnerController::class, 'destroy'])->name('partner.destroy');
Route::get('/partner/{partner}/menu/{menu}', [MenuController::class, 'edit'])->name('menus.edit')->middleware('auth');
Route::put('/partner/{partner}/menu/{menu}', [MenuController::class, 'update'])->name('menus.update');
