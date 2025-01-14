<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\MainController;

// Route to display mainpage.blade.php
Route::get('/', [MainController::class, 'index'])->name('home');

// Resource routes for medical records
Route::resource('medical_records', MedicalRecordController::class);
