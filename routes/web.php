<?php


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookAdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionContoller;
use App\Http\Controllers\DetailController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/details/{id?}', [DetailController::class, 'index'])->name('detail');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('success');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-products');
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create'])->name('dashboard-products-create');
Route::get('/dashboard/products/{id?}', [DashboardProductController::class, 'details'])->name('dashboard-products-details');
Route::get('/dashboard/transactions', [DashboardTransactionContoller::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id?}', [DashboardTransactionContoller::class, 'details'])->name('dashboard-transactions-details');
Route::get('/dashboard/account', [DashboardSettingController::class, 'account'])->name('dashboard-account');
Route::get('/admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
Route::get('/booksadmin', [BookAdminController::class, 'index'])->name('dashboard-admin-books');


    // ->middleware('auth', 'admin');
