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

Route::get('/', [TaskController::class, 'index'])->name('tasks');
// 
Route::get('/task/create', [TaskController::class, 'create'])->name('create_task');

Route::post('/task/save', [TaskController::class, 'store'])->name('save_task');

Route::get('/task/show/{taskId}', [TaskController::class, 'show'])->name('task_show');

Route::get('/task/edit/{taskId}', [TaskController::class, 'edit'])->name('edit_task');

// Route::put('/task/update/{taskId}', [TaskController::class, 'update'])->name('update_task');

Route::post('/task/update/{taskId}', [TaskController::class, 'update'])->name('update_task');

Route::delete('/task/delete/{taskId}', [TaskController::class, 'destroy'])->name('delete_task');
