<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


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
})->middleware(['auth'])->name('dashboard');


Route::middleware(['role:admin|teacher|student'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.show');
});

Route::middleware(['role:admin|teacher'])->group(function () {
    Route::post('/courses/create', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/createPage', [CourseController::class, 'create'])->name('courses.createPage');
    Route::get('/courses/edit/{id}', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/update/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/delete/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
});

require __DIR__ . '/auth.php';
