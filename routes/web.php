<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicle-checklist-pdf', [PdfController::class, 'generate']);
Route::get('/black-stone', [PdfController::class, 'blackstonepdf']);
