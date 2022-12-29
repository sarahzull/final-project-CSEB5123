<?php

use App\Http\Controllers\LecturersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectDetailsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/students')->middleware(['auth'])->group(function () {
    Route::get('/', [StudentsController::class, 'index'])->name('students.index');

    Route::middleware('can:isAdmin')->group(function () {
        Route::get('/create', [StudentsController::class, 'create'])->name('students.create');
        Route::post('/', [StudentsController::class, 'store'])->name('students.store');
        Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('students.edit');
        Route::patch('/{id}', [StudentsController::class, 'update'])->name('students.update');
        Route::delete('/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
    });
});

Route::prefix('/lecturers')->middleware(['auth'])->group(function () {
    Route::get('/', [LecturersController::class, 'index'])->name('lecturers.index');

    Route::middleware('can:isAdmin')->group(function () {
        Route::get('/create', [LecturersController::class, 'create'])->name('lecturers.create');
        Route::post('/', [LecturersController::class, 'store'])->name('lecturers.store');
        Route::get('/edit/{id}', [LecturersController::class, 'edit'])->name('lecturers.edit');
        Route::patch('/{id}', [LecturersController::class, 'update'])->name('lecturers.update');
        Route::delete('/{id}', [LecturersController::class, 'destroy'])->name('lecturers.destroy');
    });
});

Route::prefix('/projects')->middleware(['auth'])->group(function () {
    Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/{id}', [ProjectsController::class, 'show'])->name('projects.show');
    Route::get('/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::patch('/{id}', [ProjectsController::class, 'update'])->name('projects.update');

    Route::middleware('can:isAdmin')->group(function () {
        Route::delete('/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
    });
});

Route::prefix('/details')->middleware(['auth'])->group(function () {
    Route::get('/create/{project_id}', [ProjectDetailsController::class, 'create'])->name('details.create');
    Route::post('/', [ProjectDetailsController::class, 'store'])->name('details.store');
    Route::patch('/{id}', [ProjectDetailsController::class, 'update'])->name('details.update');
    Route::delete('/{id}', [ProjectDetailsController::class, 'destroy'])->name('details.destroy');
});

require __DIR__.'/auth.php';
