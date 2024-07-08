<?php
namespace App\Http\Controllers;

use App\Services\PdfService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    protected $pdfService;

    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    public function showPhoneBill()
    {
        return view('phoneBill');
    }

    public function generatePdf(Request $request)
    {
        // Render the HTML from the Blade view
        $html = view('phoneBill')->render();

        // Define the filename for the PDF
        $filename = 'phone_bill.pdf';

        // Generate and return the PDF using the PdfService
        return $this->pdfService->generatePdf($html, $filename);
    }
}
