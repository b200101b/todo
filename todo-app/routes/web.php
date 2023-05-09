<?php

use App\Http\Controllers\TodolistController;
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



Route::get('/',[TodolistController::class,'index'])->name('index');
Route::post('/',[TodolistController::class,'store'])->name('store');

Route::get('/edit/{id}', [TodolistController::class, 'edit'])->name('edit');
Route::post('/update', [TodolistController::class, 'update'])->name('update');

Route::get('/delete/{id}', [TodolistController::class, 'delete'])->name('delete');
