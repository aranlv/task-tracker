<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'view'])->name('view');
Route::get('/add', [TaskController::class, 'add'])->name('add');
Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [TaskController::class, 'update'])->name('update');
Route::post('/', [TaskController::class, 'save'])->name('save');
Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('delete');


