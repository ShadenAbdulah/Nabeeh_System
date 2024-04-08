<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\Facade\Pdf;
//use Illuminate\Support\Facades\App;
//use Illuminate\Support\Facades\Cache;

use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Mpdf\MpdfException;

class PDFController extends Controller
{
    /**
     * @throws MpdfException
     */
    public function view()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->download('j.pdf');
    }
}
