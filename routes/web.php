<?php

use App\Http\Controllers\Admin\MenuCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;

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

Route::middleware('auth')->group(function() {
    Route::get('/merchant/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::controller(MenuCategoryController::class) -> group(function(){
        Route::get('/merchant/all-category', 'Index')->name('allcategory');
        Route::get('/merchant/add-category', 'AddCategory')->name('addcategory');
        Route::post('/merchant/store-category', 'StoreCategory')->name('storecategory');
        Route::get('/merchant/edit-category/{id}', 'EditCategory')->name('editcategory');
        Route::post('/merchant/update-category', 'UpdateCategory')->name('updatecategory');
        Route::get('/merchant/delete-category/{id}', 'DeleteCategory')->name('deletecategory');
    });

});

Route::get('/customer/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index']);


require __DIR__.'/auth.php';
