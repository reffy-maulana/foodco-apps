<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Models\Partner;
use App\Models\Menu;
use App\Models\News;



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
Route::get('/admin', function () {
    return view('admin.daftar');
})->middleware('auth');


Route::get('/admin/news', function () {
    $news = News::all();
    return view('admin/news', compact('news'));
})->middleware('auth');


Route::get('/admin/partner', function () {
    $partners = Partner::all();
    return view('admin/partner', compact('partners'));
})->middleware('auth');




Route::get('/admin/partner/{partner}/menu', function ($id) {
    // echo $partner_id;
    $partners = Partner::find($id);


    // echo $id;

    $menuItems = Menu::get();

    // Filter the menu items by the partner_id
    $filteredMenuItems = $menuItems->where('partner_id', $id);

    // Return the filtered items (in JSON or to a view)
    // return $filteredMenuItems;

    return view('admin.menu', [
        'partner' => $partners
    ], compact(
        'filteredMenuItems',
        'partners'
    ));
})->name('adminmenus')->middleware('auth');

Route::get('/partner', [PartnerController::class, 'partner'])->name('partner');

Route::post('/admin/news', [NewsController::class, 'store'])->middleware('auth');
Route::put('/admin/news/{news}', [NewsController::class, 'update'])->name('berita.update')->middleware('auth');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('berita.destroy');
Route::get('/partner/{partner}/menu', [MenuController::class, 'menu'])->name('menus');

Route::post('/admin/partner', [PartnerController::class, 'store'])->middleware('auth');
Route::put('/admin/partner/{partner}', [PartnerController::class, 'update'])->name('partner.update')->middleware('auth');

// Route::get('/partner/{partner}/menu/addmenu',[MenuController::class, 'create'])->middleware('auth');
Route::post('/partner/{partner}/menu', [MenuController::class, 'store'])->name('store.menu');
Route::delete('/partner/{partner}', [PartnerController::class, 'destroy'])->name('partner.destroy');
Route::get('/partner/{partner}/menu/{menu}', [MenuController::class, 'edit'])->name('menus.edit')->middleware('auth');
Route::put('/partner/{partner}/menu/{menu}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/partner/{partner}/menu/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
