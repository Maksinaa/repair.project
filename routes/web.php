<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
/*
| Web Routes
*/

Route::view('/', 'user.index');
Route::view('/admin', 'admin.index');
//> Панель администратора
$groupAdminData = [
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'middleware' => 'auth',
];

Route::group(
    $groupAdminData,
    function () {
        Route::resource('offices', OfficeController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('applications', ApplicationController::class);
        Route::resource('details', DetailController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('reviews', ReviewController::class);
    }
);
//<
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
