<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;

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

Route::post('/register', [UserController::class, 'storeUser']);
Route::get('/profile', [UserController::class, 'showProfile']);
Route::middleware('auth')->group(function () {
Route::get('/', [ItemController::class, 'index']);});

// プロフィール設定画面にリダイレクト
Route::middleware(['auth'])->get('/mypage/profile', [ProfileController::class, 'update'])->name('profile-update');

// プロフィール設定を保存するルート（POSTリクエスト）
Route::middleware(['auth'])->post('/mypage/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/sell', [ItemController::class, 'create'])->name('item.create');
Route::post('/sell', [ItemController::class, 'store'])->name('item.store');
Route::get('/products/detail/{product_id}', [ProductController::class, 'getDetail']);