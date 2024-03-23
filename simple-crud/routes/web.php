<?php
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[CrudController::class, "getDataFromDB"])->name('index');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/store', [CrudController::class, 'store'])->name('store');
Route::get('/{module}/edit', [CrudController::class, 'edit'])->name('edit');
Route::put('update/{module}', [CrudController::class, 'update'])->name('update');
Route::delete('/destroy/{module}', [CrudController::class, 'destroy'])->name('destroy');

