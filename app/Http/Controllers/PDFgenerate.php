<?php
  
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Requests;
  use App\Http\Controllers\Controller;
  use PDF;
  use View;

class PDFgenerate extends Controller
{
    public function genePDF()
    {
    	 $data=['title'=>'Invoice 1003',
    	       'total'=>'700',
    	        'products'=>['paper','pen','laptop']
    	    ];
    	 $pdf=PDF::loadView('pdf.invoice',$data);
    	 return $pdf->download('invoice.pdf');
    	// grab some html
    	// create pdf class
    	// send html to the class
    	// then respond with pdf back to the browser or
    	// send to the file system
    }
}
