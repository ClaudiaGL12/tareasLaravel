<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SpendingController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');


Route::get('/spending', [SpendingController::class, 'index'])->name('spending.index');
Route::get('/spending/create', [SpendingController::class, 'create'])->name('spending.create');
Route::post('/spending', [SpendingController::class, 'store'])->name('spending.store');
