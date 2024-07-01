<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/markCompleteRoute/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');
Route::get('/editItem/{id}', [TodoListController::class, 'editItem'])->name('editItem');
Route::put('/updateItem/{id}', [TodoListController::class, 'updateItem'])->name('updateItem');
Route::post('/deleteItemRoute/{id}', [TodoListController::class, 'deleteItem'])->name('deleteItem');
