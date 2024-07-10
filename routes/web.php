
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});


$html = view('welcome')->render();


Route::get('/pdf', [PdfController::class, 'downloadPdf'])->name('user.pdf');
?>
