<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['auth','SuperAdmin'])->group(function () {
    Route::get('/SuperAdmin', [SuperAdminController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('SuperAdmin');
    Route::post('SuperAdmin/tenant/new', [SuperAdminController::class, 'newTenant']);

});

require __DIR__.'/auth.php';
