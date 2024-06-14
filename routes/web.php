<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.layouts.app');
});

Route::get('/redirect', [RedirectController::class, 'index']);

Route::middleware(['auth', 'role:merchant'])->group(function() {
    Route::get('/merchant/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::controller(MenuCategoryController::class) -> group(function(){
        Route::get('/merchant/categories', 'Index')->name('allcategory');
        Route::get('/merchant/categories/create', 'AddCategory')->name('addcategory');
        Route::post('/merchant/categories', 'StoreCategory')->name('storecategory');
        Route::get('/merchant/categories/edit/{id}', 'EditCategory')->name('editcategory');
        Route::post('/merchant/categories/update/{id}', 'UpdateCategory')->name('updatecategory');
        Route::get('/merchant/categories/delete/{id}', 'DeleteCategory')->name('deletecategory');
    });
    Route::resource('/merchant/menu', MenuController::class);
});

Route::get('/customer/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index']);


require __DIR__.'/auth.php';
