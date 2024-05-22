<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('admin.login');
Route::post('/', [AuthController::class, 'auth'])->name('admin.login.auth');

Route::prefix('admin')->middleware('admin.auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/create', [DashboardController::class, 'create'])->name('admin.create');
    Route::post('/create/store', [DashboardController::class, 'store'])->name('admin.create.store');

    Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('admin.edit');
    Route::put('/edit/store/{id}', [DashboardController::class, 'updated'])->name('admin.edit.store');

    Route::delete('/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.delete');
});

