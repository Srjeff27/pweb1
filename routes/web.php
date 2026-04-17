<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/direktori-mahasiswa', function () {
    $students = \App\Models\Student::latest()->get();
    return view('public.students', compact('students'));
})->name('public.students');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::resource('students', StudentController::class);
});

require __DIR__.'/auth.php';
