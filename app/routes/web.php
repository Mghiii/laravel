<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RessourceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[RouteController::class,'index'])->name('home.index');
Route::get('/about',[RouteController::class,'about'])->name('home.about');
Route::get('/contact',[RouteController::class,'contact'])->name('home.contact');
Route::get('/portfolio',[RouteController::class,'portfolio'])->name('home.portfolio');
//-----------
Route::get('/pages/index',[RessourceController::class,'index']);