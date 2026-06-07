<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/',           [Controller::class, 'showHome'])->name('show.home');
Route::get('/about',      [Controller::class, 'showAbout'])->name('show.about');
Route::get('/product',    [ProductController::class, 'index'])->name('show.product');
Route::get('/project',    [ProjectController::class, 'index'])->name('show.project');
Route::get('/news',       [NewsController::class, 'index'])->name('show.news');
Route::get('/news/{id}',  [NewsController::class, 'showDetail'])->name('show.news.detail');
Route::get('/career',     [CareerController::class, 'index'])->name('show.career');
Route::get('/contact',    [Controller::class, 'showContact'])->name('show.contact');

// Email + Gallery
Route::get('/send-email',        [Controller::class, 'sendEmail'])->name('send.email');
Route::post('/input-gallery',    [Controller::class, 'inputImageGallery'])->name('input.gallery');
Route::get('/gallery',           [Controller::class, 'showGallery'])->name('show.gallery');
Route::get('/disclaimer',        [Controller::class, 'showDisclaimer'])->name('show.disclaimer');
Route::get('/terms',             [Controller::class, 'showTerms'])->name('show.terms');
Route::get('/privacy',           [Controller::class, 'showPrivacy'])->name('show.privacy');
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes (protected)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Careers — manual routes so we can use adminIndex
    Route::get('/careers',               [CareerController::class, 'adminIndex'])->name('careers.index');
    Route::get('/careers/create',        [CareerController::class, 'create'])->name('careers.create');
    Route::post('/careers',              [CareerController::class, 'store'])->name('careers.store');
    Route::get('/careers/{career}/edit', [CareerController::class, 'edit'])->name('careers.edit');
    Route::put('/careers/{career}',      [CareerController::class, 'update'])->name('careers.update');
    Route::delete('/careers/{career}',   [CareerController::class, 'destroy'])->name('careers.destroy');

    // Projects
    Route::get('/projects',                [ProjectController::class, 'adminIndex'])->name('projects.index');
    Route::get('/projects/create',         [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects',               [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}',      [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}',   [ProjectController::class, 'destroy'])->name('projects.destroy');

    // Products
    Route::get('/products',                  [ProductController::class, 'adminIndex'])->name('products.index');
    Route::get('/products/create',           [ProductController::class, 'create'])->name('products.create');
    Route::post('/products',                 [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit',   [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}',        [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}',     [ProductController::class, 'destroy'])->name('products.destroy');

    // News
    Route::get('/news',              [NewsController::class, 'adminIndex'])->name('news.index');
    Route::get('/news/create',       [NewsController::class, 'create'])->name('news.create');
    Route::post('/news',             [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit',  [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}',       [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}',    [NewsController::class, 'destroy'])->name('news.destroy');
});