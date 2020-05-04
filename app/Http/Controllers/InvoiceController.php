<?php

namespace App\Http\Controllers;

use PDF;
use App\Publication;

class InvoiceController extends Controller
{
    public function download()
    {
        $publications=Publication::all();

        

        $pdf = PDF::loadView('pdf.invoice', compact('publications'));

        return $pdf->download('invoice.pdf');
    }
}

