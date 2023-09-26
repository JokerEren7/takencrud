<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taakcontroller; 

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


Route::get('/tasks', [taakcontroller::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [taakcontroller::class, 'create'])->name('tasks.create');

Route::post('/tasks', [taakcontroller::class, 'store'])->name('tasks.store');
Route::put('/tasks/toggle/{id}', [taakcontroller::class, 'toggle'])->name('tasks.toggle');

Route::get('/tasks/{id}/edit', [taakcontroller::class, 'edit'])->name('tasks.edit');
Route::get('/tasks/{id}', [Taakcontroller::class, 'show'])->name('tasks.show');


Route::put('/tasks/{id}', [taakcontroller::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [taakcontroller::class, 'destroy'])->name('tasks.destroy');



