<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

// To do routes
Route::get('/',[TodoController::class,'index'])->name('todo.index');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::post('/todo',[TodoController::class,'store'])->name('todo.store');
Route::delete('/todo/{todo}',[TodoController::class,'destroy'])->name('todo.destroy');



// categories routes:
Route::get('/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/categories',[CategoryController::class,'store'])->name('category.store');
Route::put('/categories/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
