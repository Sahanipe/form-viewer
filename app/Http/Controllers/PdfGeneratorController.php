<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfGeneratorController extends Controller
{
    function index(){
        return view('registration.form1');
    }
    function generatePdf() {
        $data = [
            'foo' => 'bar'
        ];

        $pdf = PDF::loadView('PCA.PCA2', $data);
        return $pdf->stream('PCA.PCA2');
    }
}
