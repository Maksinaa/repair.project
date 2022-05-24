<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\PriceController;
use App\Http\Controllers\User\StatusController;
use App\Http\Controllers\User\ReviewController as UserReviewController;
/*
| Web Routes
*/

//> Открытая часть сайта
$groupUserData = [
    // 'prefix' => 'user',
    'as' => 'user.',
];

Route::group(
    $groupUserData,
    function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/price', [PriceController::class, 'index'])->name('price');
        Route::get('/status', [StatusController::class, 'index'])->name('status');
        Route::resource('reviews', UserReviewController::class);
    }
);
//<

//> Панель администратора
$groupAdminData = [
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'middleware' => 'auth',
];

Route::group(
    $groupAdminData,
    function () {
        Route::view('/', 'admin.index')->name('index');
        Route::resource('offices', OfficeController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('applications', ApplicationController::class);
        Route::resource('details', DetailController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('reviews', AdminReviewController::class);
    }
);
//<

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
