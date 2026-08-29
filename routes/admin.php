<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VisitorsMessagesController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest.admin')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('/', 'loginForm')->name('loginForm');
        Route::post('login', 'login')->name('login');
    });

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang');

Route::middleware('auth.admin')
    ->group(function () {
        Route::get('home', fn() => view('admin.home'))->name('home');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        Route::controller(SettingController::class)
            ->prefix('settings')
            ->name('settings.')
            ->group(function () {
                Route::get('/', 'all')->name('all');
                Route::post('create', 'create')->name('create');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

        Route::controller(VisitorsMessagesController::class)
            ->prefix('visitorsMessages')
            ->name('visitorsMessages.')
            ->group(function () {
                Route::get('/', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

        Route::controller(AdminsController::class)
            ->prefix('admins')
            ->name('admins.')
            ->group(function () {
                Route::get('/', 'all')->name('all');
                Route::post('create', 'create')->name('create');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });
    });
