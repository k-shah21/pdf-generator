<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicle-checklist-pdf', [PdfController::class, 'vehicleChecklist']);
Route::get('/investment-letter', [PdfController::class, 'investmentLetter']);
Route::get('/investment-a4', [PdfController::class, 'investmentLetterA4']);
