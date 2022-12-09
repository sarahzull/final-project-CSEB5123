<?php

use App\Http\Controllers\LecturersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/students')->group(function () {
    Route::get('/', [StudentsController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentsController::class, 'create'])->name('students.create');
    Route::post('/', [StudentsController::class, 'store'])->name('students.store');
    Route::delete('/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
});

Route::get('lecturers', [LecturersController::class, 'index']);

Route::get('roles', [RolesController::class, 'index']);