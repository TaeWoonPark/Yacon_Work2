<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// 🔐 認証関連
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// 🧭 認証後にアクセスできるルート
Route::middleware('auth')->group(function () {
    // 作業履歴ページ
    Route::get('/work_records', [TaskController::class, 'index'])->name('work_records.index');

    // ダッシュボード（ここで tasks を渡す）
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // タスク管理
    Route::resource('tasks', TaskController::class);

    // プロフィール関連（任意）
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🏠 トップページはログインにリダイレクト
Route::get('/', function () {
    return redirect('/login');
});
