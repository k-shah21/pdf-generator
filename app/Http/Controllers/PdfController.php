<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate()
    {
        $pdf = Pdf::loadView('pdf.vehicle-checklist')
            ->setPaper('A4', 'portrait');

        return $pdf->stream('vehicle-midpoint-checklist.pdf');
    }
}
