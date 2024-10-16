<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-transactions', [TransactionController::class, 'showAlltrans'])->name('showAlltrans');

Route::post('/store', [TransactionController::class, 'storeTrans'])->name('storeTrans');
Route::get('/create', [TransactionController::class, 'createTrans'])->name('createTrans');

Route::get('/read/{id}', [TransactionController::class, 'readTrans'])->name('readTrans');


Route::get('/edit/{id}', [TransactionController::class, 'getTrans'])->name('getTrans');
Route::put('/update/{id}', [TransactionController::class, 'updateTrans'])->name('updateTrans');

Route::delete('/delete/{id}', [TransactionController::class, 'deleteTrans'])->name('deleteTrans');