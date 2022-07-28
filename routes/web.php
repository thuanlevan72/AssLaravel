<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// đây là router admin
Route::get('/admin',[userController::class, 'showUser'])->name('user');
Route::get('/admin/register', [userController::class, 'index'])->name('dangky');
Route::post('/admin/register', [userController::class, 'registerUser'])->name('resdangky');
Route::get('/admin/update/{id}',[userController::class, 'UpdateUser'])->name('resUpdate');

Route::get('/admin/product', function () {
    return view('backend.products.product');
})->name('product');
Route::get('/admin/product/addProduct', function () {
    return view('backend.products.addProduct');
})->name('addProduct');
Route::get('/admin/category', function () {
    return view('backend.categorys.category');
})->name('category');
Route::get('/admin/category/addcategory', function () {
    return view('backend.categorys.addcategory');
})->name('addcategory');
Route::get('/admin/order', function () {
    return view('backend.orders.listOrder');
})->name('addcategory');
//đây là router frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('home');
//
route::get('/login', function (){
    return view('auth.login');
});
