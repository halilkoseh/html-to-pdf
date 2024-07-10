<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function downloadPdf()
    {
        $html = view('welcome')->render(); // Replace 'your_view_name_here' with the actual view name
        $pdf = PDF::loadHTML($html)->setPaper('A4', 'portrait');
        return $pdf->download('invoice.pdf');
    }
}
?>
