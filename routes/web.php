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

Route::middleware('auth')->group(function () { //Use this to protect routes that require you to sign in
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/dashboard/my-account/', [DashboardController::class, 'myAccount']);
    Route::post('/dashboard/update-my-account/', [UserController::class, 'updateBasicInfo']);

    Route::get('/dashboard/create-maintenance-request/', [MaintenanceRequestController::class, 'createMaintenanceRequest']);
    Route::post('/dashboard/post-create-maintenance-request/', [MaintenanceRequestController::class, 'postCreateMaintenanceRequest']);
    Route::get('/dashboard/maintenance-requests/', [MaintenanceRequestController::class, 'maintenanceRequests']);
    Route::post('/dashboard/maintenance-requests/fetch-units/', [MaintenanceRequestController::class, 'fetchUnits']);
    Route::get('/dashboard/resolve-maintenance-request/{maintenance_request_id}', [MaintenanceRequestController::class, 'resolveMaintenanceRequest']);

    Route::get('/dashboard/properties/', [PropertyController::class, 'properties']);
    Route::get('/dashboard/add-property/', [PropertyController::class, 'addProperty']);
    Route::post('/dashboard/post-add-property', [PropertyController::class, 'createProperty']);
    Route::get('/dashboard/manage-property/{property_id}', [PropertyController::class, 'manageProperty']);
    Route::get('/dashboard/delete-property/{property_id}', [PropertyController::class, 'deleteProperty']);
    Route::post('/dashboard/update-property/',[PropertyController::class,'postUpdateProperty']);

    Route::get('/dashboard/add-unit/{property_id}', [PropertyController::class, 'addUnit']);
    Route::post('/dashboard/post-add-unit/', [PropertyController::class, 'createUnit']);
    Route::get('/dashboard/delete_unit/{unit_id}', [PropertyController::class, 'deleteUnit']);


    Route::get('/dashboard/manage-tenant/', [TenantController::class, 'manageTenant']);
    Route::get('/dashboard/tenants/', [TenantController::class, 'tenants']);
});
