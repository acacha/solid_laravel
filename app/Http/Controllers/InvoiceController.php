<?php namespace SolidLaravel\Http\Controllers;

use SolidLaravel\Http\Requests;
use SolidLaravel\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SolidLaravel\InvoiceReport;
use SolidLaravel\Output\InvoiceShowHtml;
use SolidLaravel\Output\InvoiceShowText;
use SolidLaravel\Repositories\InvoiceRepositoryDB;

class InvoiceController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show invoice
     *
     * @return Response
     */
    public function index()
    {
        $invoice = new InvoiceReport(new InvoiceRepositoryDB(),1);
        return view('invoice')->with('totalAmmount',$invoice->show(new InvoiceShowHtml()));
        //return view('invoice')->with('totalAmmount',$invoice->show(new InvoiceShowText()));
    }

}
