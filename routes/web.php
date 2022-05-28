<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('Admin',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('Admin/index',[AdminController::class, 'index'])->name('index');
Route::get('Admin/create',[AdminController::class, 'create'])->name('create');
Route::post('Admin/store',[AdminController::class, 'store'])->name('store');
Route::get('Admin/{id}/edit',[AdminController::class, 'edit'])->name('edit');
Route::put('Admin/{id}/update',[AdminController::class, 'update'])->name('update');
Route::get('Admin/destroy/{id}',[AdminController::class, 'destroy'])->name('destroy');

Route::get('Auth/login',[LoginController::class,'login'])->name('login');
Route::post('Auth/login/proses',[LoginController::class, 'proseslogin'])->name('proseslogin');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('Auth/register',[RegisterController::class, 'register'])->name('register.index');
Route::post('Auth/register',[RegisterController::class, 'store'])->name('register.store');

Route::group([ 'middleware'=> ['userlogin']], function() {

    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('shop',[ShopController::class,'shopping'])->name('shop.shopping');
    Route::get('shop/detail/{id}',[ShopController::class,'gian'])->name('shop.detail');
    
    Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');
    Route::get('contact/menu',[ContactController::class,'menu'])->name('contact.menu');
    Route::get('contact/{id}/Acount',[ContactController::class,'Acount'])->name('contact.Acount');
    
});
