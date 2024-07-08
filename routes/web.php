<?php
use App\Http\Controllers\PdfController;

// Route to display the phoneBill view
Route::get('/', [PdfController::class, 'showPhoneBill']);

// Route to generate the PDF on form submission
Route::post('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');
