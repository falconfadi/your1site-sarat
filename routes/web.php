<?php

declare(strict_types=1);

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang');

Route::controller(HomeController::class)
->group(function(){
    Route::get('/','home')->name('home');
    Route::get('courses','courses')->name('courses');
    Route::get('elements','elements')->name('elements');
    Route::get('news','news')->name('news');
    Route::get('about','about')->name('about');
    Route::get('newsPost','newsPost')->name('newsPost');
    Route::get('teachers','teachers')->name('teachers');
    Route::get('contact','contact')->name('contact');
});

Route::prefix('admin')
    ->name('admin.')
    ->group(function (): void {
        require 'admin.php';
    });
