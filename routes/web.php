<?php

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
Route::get('/admin', function () {
    return view('backend.users.listUsers');
})->name('user');
Route::get('/admin/register', function () {
    return view('backend.users.addUser');
})->name('dangky');
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
