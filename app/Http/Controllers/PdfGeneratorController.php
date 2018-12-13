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
        //return view('shares/shareholdersDetails', $data);
      //return view('registration/form-3', $data);

  // return view('PCA/PCA4', $data);
      
        // $pdf = PDF::loadView('change/form-20', $data);
      //return $pdf->stream('change/form-20');
 // return view('PCA/PCA9', $data);
        $pdf = PDF::loadView('auditors/form1D', $data);
        return $pdf->stream('form1D');
        //$pdf = PDF::loadView('change/form-20', $data);
        //return $pdf->stream('form-20');
    }
}
