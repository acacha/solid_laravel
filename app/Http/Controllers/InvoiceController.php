<?php namespace SolidLaravel\Http\Controllers;

use SolidLaravel\Http\Requests;
use SolidLaravel\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SolidLaravel\InvoiceReport;

class InvoiceController extends Controller {

    /**
     * Show invoice
     *
     * @return Response
     */
    public function index()
    {
        $invoice = new InvoiceReport(1);
        return view('invoice')->with('totalAmmount',$invoice->show());
    }

}
