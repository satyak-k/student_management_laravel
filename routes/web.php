<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('students', StudentController::class);
});

Route::get('/test', function () {
    return "Test route works!";
})->middleware('auth');

require __DIR__.'/auth.php'; 
