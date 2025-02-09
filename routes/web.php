<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'index']);

Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');

Route::get('/tasks', [TodoController::class, 'index'])->name('posts.index');
Route::get('/tasks/create', [TodoController::class, 'create'])->name('posts.create');
Route::post('/tasks', [TodoController::class, 'store'])->name('posts.store');
Route::get('/tasks/{id}', [TodoController::class, 'show'])->name('posts.show');
