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
//return view('registration/form1Omega', $data);
        $pdf = PDF::loadView('certificates/auditorcertificate2', $data);
        return $pdf->stream('form2D');
        //$pdf = PDF::loadView('change/form-20', $data);
        //return $pdf->stream('form-20');
    }
}
