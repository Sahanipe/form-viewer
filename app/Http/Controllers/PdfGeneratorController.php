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
      //return view('registration/form-3', $data);

    //return view('change/form-13', $data);
      
        // $pdf = PDF::loadView('change/form-20', $data);
       // return $pdf->stream('change/form-20');

        $pdf = PDF::loadView('change/form-39', $data);
        return $pdf->stream('change/form-39');
    }
}
