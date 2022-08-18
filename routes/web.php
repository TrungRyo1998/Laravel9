<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showFormLogin'])->name('auth.form');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', function () {
           dd(\Illuminate\Support\Facades\Auth::guard('admin')->user());
        })->name('test');
        Route::get('logout', [AuthController::class, 'logout']);
    });
});
