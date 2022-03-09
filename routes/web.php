<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use \App\Http\Controllers\CategoryController;
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
    return view('client.index');
});

Route::get('/category', function () {
    return view('category');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories');
    Route::get('/category', 'create')->name('category-create');
    Route::delete('/category/{category}', 'destroy')->name('category-delete');
    Route::get('/category/{category}', 'show')->name('category-edit');
    Route::post('/category', 'store');
    Route::put('/category', 'update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
