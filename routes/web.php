<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmailController;

// To do routes
Route::get('/',[TodoController::class,'index'])->name('todo.index');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::get('/todo/{todo}',[TodoController::class,'show'])->name('todo.show');
Route::post('/todo',[TodoController::class,'store'])->name('todo.store');
Route::delete('/todo/{todo}',[TodoController::class,'destroy'])->name('todo.destroy');
Route::get('/todo/{todo}/complete',[TodoController::class,'complete'])->name('todo.complete');
Route::get('/todo/{todo}/doing',[TodoController::class,'doing'])->name('todo.doing');
Route::get('/todo/{todo}/edit',[TodoController::class,'edit'])->name('todo.edit');
Route::put('/todo/{todo}',[TodoController::class,'update'])->name('todo.update');

// categories routes:
Route::get('/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/categories',[CategoryController::class,'store'])->name('category.store');
Route::put('/categories/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->name('category.destroy');

// email routes:
Route::get('/email',[EmailController::class,'index'])->name('email.index');
Route::post('/email/send',[EmailController::class,'send'])->name('email.send');

