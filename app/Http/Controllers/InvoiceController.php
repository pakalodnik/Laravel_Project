<?php

namespace App\Http\Controllers;

use PDF;
use App\Publication;

class InvoiceController extends Controller
{
    public function download()
    {
        $publications=Publication::all();

        

        $pdf = PDF::loadView('pdf.report', compact('publications'));

        return $pdf->download('report.pdf');
    }
}

