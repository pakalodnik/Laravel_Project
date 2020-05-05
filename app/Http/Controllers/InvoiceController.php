<?php

namespace App\Http\Controllers;

use PDF;
use App\Publication;
use App\Qqson;

class InvoiceController extends Controller
{
    public function download()
    {
        $publications=Publication::all();
        $qqsons=Qqson::all();
        

        $pdf = PDF::loadView('pdf.invoice', compact('publications', 'qqsons'));

        return $pdf->download('report.pdf');
    }
}

