<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WorkRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NextController;

// ------------------- 認証 -------------------
Route::get('/login', [Controller::class, 'showLoginForm'])->name('login');
Route::post('/login', [Controller::class, 'login'])->name('login.post');
Route::post('/logout', [Controller::class, 'logout'])->name('logout');

// ------------------- 認証済みユーザー -------------------
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/next', [NextController::class, 'index'])->name('next');

    Route::get('work_records', [WorkRecordController::class, 'index'])->name('work_records.index');
    Route::get('work_records/create', [WorkRecordController::class, 'create'])->name('work_records.create');
    Route::post('work_records', [WorkRecordController::class, 'store'])->name('work_records.store');
    Route::get('work_records/pdf/{id}', [WorkRecordController::class, 'pdf'])->name('work_records.pdf');
    Route::get('work_records/{id}/share', [WorkRecordController::class, 'share'])->name('work_records.share');
});

// ------------------- 共有リンク（認証不要） -------------------
Route::get('work_records/shared/{token}', [WorkRecordController::class, 'sharedView'])
    ->name('work_records.shared');
Route::get('work_records/shared/{token}/pdf', [WorkRecordController::class, 'sharedPdf'])
    ->name('work_records.shared.pdf');
