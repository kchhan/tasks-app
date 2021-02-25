<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TaskController::class, 'index']);
Route::get('/create', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store']);
Route::get('/{task}/edit', [TaskController::class, 'edit']);
Route::patch('/{task}', [TaskController::class, 'update']);
Route::delete('/{task}/delete', [TaskController::class, 'destroy']);