<?php

use App\Http\Controllers\ExaminersController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SupervisorsController;
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

Route::prefix('/lecturers')->group(function () {
    Route::get('/', [LecturersController::class, 'index'])->name('lecturers.index');
    Route::get('/create', [LecturersController::class, 'create'])->name('lecturers.create');
    Route::post('/', [LecturersController::class, 'store'])->name('lecturers.store');
    Route::delete('/{id}', [LecturersController::class, 'destroy'])->name('lecturers.destroy');
});

Route::prefix('/projects')->group(function () {
    Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/{id}', [ProjectsController::class, 'show'])->name('projects.show');
    Route::delete('/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
});
