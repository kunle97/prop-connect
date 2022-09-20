<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaintenanceRequestController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;


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

Route::post('/dashboard/post-register/', [UserController::class, 'register']);
Route::post('/dashboard/post-login/', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/dashboard/login/', [UserController::class, 'loginView'])->name('login');
Route::get('/dashboard/register/', [UserController::class, 'registerView']);
Route::get('/dashboard/forgot-password/', [UserController::class, 'forgotPasswordView']);

Route::middleware('auth')->group(function () {
    //Use this to protect routes that require you to sign in
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/dashboard/my-account', [DashboardController::class, 'myAccount']);

    Route::get('/dashboard/maintenance/create-maintenance-request', [MaintenanceRequestController::class, 'createMaintenanceRequest']);
    Route::get('/dashboard/maintenance/maintenance-requests', [MaintenanceRequestController::class, 'maintenanceRequests']);

    Route::get('/dashboard/properties/', [PropertyController::class, 'properties']);
    Route::get('/dashboard/add-property/', [PropertyController::class, 'addProperty']);
    Route::get('/dashboard/manage-property/', [PropertyController::class, 'manageProperty']);
    Route::get('/dashboard/add-unit/', [PropertyController::class, 'addUnit']);

    Route::get('/dashboard/manage-tenant/', [TenantController::class, 'manageTenant']);
    Route::get('/dashboard/tenants/', [TenantController::class, 'tenants']);
});
