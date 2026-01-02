<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Khubaib Routes
Route::get('/vehicle-checklist-pdf', [PdfController::class, 'vehicleChecklist']);
Route::get('/investment-letter', [PdfController::class, 'investmentLetter']);
Route::get('/investment-a4', [PdfController::class, 'investmentLetterA4']);

// Ahad Routes
Route::get('/black-stone-pdf', [PdfController::class, 'blackstonepdf']);
Route::get('/salesreciept-pdf', [PDFController::class, 'salesreciept']);