<?php
namespace App\Services;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    protected $dompdf;

    public function __construct()
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $this->dompdf = new Dompdf($options);
    }

    public function generatePdf($html, $filename)
    {
        // Load the HTML content
        $this->dompdf->loadHtml($html);

        // Set the paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');

        // Render the HTML as a PDF
        $this->dompdf->render();

        // Output the generated PDF for download
        return $this->dompdf->stream($filename, ['Attachment' => true]);
    }
}
