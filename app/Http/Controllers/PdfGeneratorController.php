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
     //   return view('auditors/form1', $data);
        $pdf = PDF::loadView('auditors/formfirm', $data);
        return $pdf->stream('auditors/formfirm');
    }
}
