<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[userController::class, 'showUser'])->name('user');
    Route::get('/admin/register', [userController::class, 'index'])->name('dangky');
    Route::post('/admin/register', [userController::class, 'registerUser'])->name('resdangky');
    Route::get('/admin/update/{id}',[userController::class, 'UpdateUser'])->name('resUpdate');
    Route::get('/admin/delete/{id}',[userController::class, 'deleteUser'])->name('delUser');
      // chức năng sản phẩm
    Route::get('/admin/product',[productController::class,'index'])->name('product');
    Route::get('/admin/product/addProduct',[productController::class,'showAddProduct'])->name('addProduct');
    Route::post('/admin/product/addProduct',[productController::class,'addProduct'])->name('ResaddProduct');
    // kết thúc chức  năng sản phẩm
    // các  chức năng của loại sản phẩm
    Route::get('/admin/category',[categoryController::class,'showCategory'])->name('category');
    Route::get('/admin/category/addcategory', [categoryController::class, 'index'])->name('addcategory');
    Route::post('/admin/category/addcategory', [categoryController::class, 'addTypeProduct'])->name('Resaddcategory');
    Route::get('/admin/category/update/{id}',[categoryController::class, 'ShowUpdate'])->name('GetUpdateCategory');
    Route::get('/admin/category/delete/{id}',[categoryController::class, 'Dlete'])->name('GetDleteCategory');
    // Route::get('/admin/test',function(){
    //     return view('backend.categorys.updateCategory');
    // })->name('test');
    
    // kết thúc chức năng loại sản phẩm 
  
    Route::get('/admin/order', function () {
        return view('backend.orders.listOrder');
    })->name('addorder');
    route::get('/logout',[LoginController::class, 'getLogout'])->name('logout');
});


//đây là router frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/loginUser',[LoginController::class,'showFormLogin'])->name('loginFront');
Route::post('/loginUser',[LoginController::class,'postLoginFront'])->name('ResloginFront');
// url login
route::get('/login',[LoginController::class, 'index'])->name('login');
route::post('/login',[LoginController::class, 'postLogin'])->name('checkLogin');
