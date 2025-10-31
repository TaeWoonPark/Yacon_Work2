<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WorkRecordController;

// 認証済みユーザー用のルート
Route::middleware(['auth'])->group(function () {
    Route::get('work_records/create', [WorkRecordController::class, 'create'])->name('work_records.create');
    Route::post('work_records', [WorkRecordController::class, 'store'])->name('work_records.store');
    Route::middleware(['auth'])->group(function () {
        Route::get('work_records', [WorkRecordController::class, 'index'])->name('work_records.index');
        Route::get('work_records/create', [WorkRecordController::class, 'create'])->name('work_records.create');
        Route::post('work_records', [WorkRecordController::class, 'store'])->name('work_records.store');

        // ダッシュボード
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    // ダッシュボード（認証必須）
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); // ← ここで閉じる

// ログイン表示
Route::get('/login', [Controller::class, 'showLoginForm'])->name('login');

// ログイン処理
Route::post('/login', [Controller::class, 'login'])->name('login.post');

// ログアウト（任意）
Route::post('/logout', [Controller::class, 'logout'])->name('logout');
