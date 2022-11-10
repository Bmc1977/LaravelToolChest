<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
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

Route::get('/tools', [ToolController::class, 'index'])->middleware(['auth', 'verified'])->name('tools');

Route::get('/tools/new-tool', [ToolController::class, 'create'])->middleware(['auth', 'verified'])->name('new-tool');
Route::post('/tools/new-tool', [ToolController::class, 'store'])->middleware(['auth', 'verified'])->name('create-tool');

Route::delete('/tools/delete/{id}', [ToolController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteTool');

Route::get('/categories/new-category', [CategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('new-category');
Route::post('/categories/new-category', [CategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('create-category');


Route::get('/categories', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('categories');
Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteCategory');

Route::get('/groups', [GroupController::class, 'index'])->middleware(['auth', 'verified'])->name('groups');
Route::delete('/groups/delete/{id}', [GroupController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteGroup');

Route::get('/groups/new-group', [GroupController::class, 'create'])->middleware(['auth', 'verified'])->name('new-group');
Route::post('/groups/new-group', [GroupController::class, 'store'])->middleware(['auth', 'verified'])->name('create-group');


Route::get('/brands', [BrandController::class, 'index'])->middleware(['auth', 'verified'])->name('brands');
Route::delete('/brands/delete/{id}', [BrandController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteBrand');

Route::get('/brands/new-brand', [BrandController::class, 'create'])->middleware(['auth', 'verified'])->name('new-brand');
Route::post('/brands/new-brand', [BrandController::class, 'store'])->middleware(['auth', 'verified'])->name('create-brand');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tools/{id}', [ToolController::class, 'show'])->middleware(['auth', 'verified'])->name('iTool');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('iCategory');
Route::get('/groups/{id}', [GroupController::class, 'show'])->middleware(['auth', 'verified'])->name('iGroup');
Route::get('/brands/{id}', [BrandController::class, 'show'])->middleware(['auth', 'verified'])->name('iBrand');

Route::get('/', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
