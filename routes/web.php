<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
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
    Route::post('/admin/update/{id}',[userController::class, 'PostUpdateUser'])->name('resUpdateUser');
    Route::get('/admin/delete/{id}',[userController::class, 'deleteUser'])->name('delUser');

      // chức năng sản phẩm
    Route::get('/admin/product',[productController::class,'index'])->name('product');
    Route::get('/admin/product/addProduct',[productController::class,'showAddProduct'])->name('addProduct');
    Route::post('/admin/product/addProduct',[productController::class,'addProduct'])->name('ResaddProduct');
    Route::get('/admin/product/dleProduct/{id}',[productController::class,'dleProduct'])->name('dleProduct');
    Route::get('/admin/product/UpdateProduct/{id}',[productController::class,'updateProduct'])->name('showUpdateProduct');
    Route::post('/admin/product/UpdateProduct/{id}',[productController::class,'PostupdateProduct'])->name('UpdateProduct');
    // kết thúc chức  năng sản phẩm
    // các  chức năng của loại sản phẩm
    Route::get('/admin/category',[categoryController::class,'showCategory'])->name('category');
    Route::get('/admin/category/addcategory', [categoryController::class, 'index'])->name('addcategory');
    Route::post('/admin/category/addcategory', [categoryController::class, 'addTypeProduct'])->name('Resaddcategory');
    Route::get('/admin/category/update/{id}',[categoryController::class, 'ShowUpdate'])->name('GetUpdateCategory');
    Route::post('/admin/category/update/{id}',[categoryController::class, 'UpdateCategory'])->name('UpdateCategory');
    Route::get('/admin/category/delete/{id}',[categoryController::class, 'Dlete'])->name('GetDleteCategory');
    // các chức năng của banner
    Route::get('/admin/banner',[bannerController::class,'index'])->name('showListBanner');
    Route::get('/admin/banner/addBanner',[bannerController::class,'showFormAddBanner'])->name('showFormAddBanner');
    Route::post('/admin/banner/addBanner',[bannerController::class,'actionAddBanner'])->name('actionAddBanner');
    Route::get('admin/banner/showUpdateBanner/{id}',[bannerController::class,'showUpdateBanner'])->name('showUpdateBanner');
    Route::post('admin/banner/showUpdateBanner/{id}',[bannerController::class,'UpdateBanner'])->name('UpdateBanner');
    Route::get('/admin/banner/addBanneerror',function(){
        return ("éo thêm được nữa đâu mà cứ cố mà bấm");
    })->name('eoThemDuocDau');
    // Route::get('/admin/test',function(Request $request){
    //     dd($request);
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
