<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SpendingController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class); hecho de la siguiente forma para entender la lógica
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');
Route::get('incomes/{id}', [IncomeController::class, 'show'])->name('incomes.show');
Route::post('/incomes/{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
Route::put('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');
Route::delete('/incomes', [IncomeController::class, 'destroy'])->name('incomes.destroy');

//Route::resource('spending', SpendingController::class);
Route::get('/spending', [SpendingController::class, 'index'])->name('spending.index');
Route::get('/spending/create', [SpendingController::class, 'create'])->name('spending.create');
Route::post('/spending', [SpendingController::class, 'store'])->name('spending.store');
Route::get('spending/{id}', [SpendingController::class, 'show'])->name('spending.show');
Route::post('/spending/{id}/edit', [SpendingController::class, 'edit'])->name('spending.edit');
Route::put('/spending/{id}', [SpendingController::class, 'update'])->name('spending.update');
Route::delete('/spending', [SpendingController::class, 'destroy'])->name('spending.destroy');
