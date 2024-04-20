<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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


Route::get('/create',[CrudController::class,'index'])->name('index');
Route::post('/create',[CrudController::class,'create'])->name('create');
Route::get('/create/{id}/edit',[CrudController::class,'edit'])->name('edit');
Route::put('/create/{id}/update',[CrudController::class,'update'])->name('update');
Route::get('/create/{id}/delete',[CrudController::class,'delete']);
