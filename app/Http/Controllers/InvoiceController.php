<?php namespace SolidLaravel\Http\Controllers;

use SolidLaravel\Http\Requests;
use SolidLaravel\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SolidLaravel\InvoiceReport;
use SolidLaravel\Output\Contracts\InvoiceShowInterface;
use SolidLaravel\Output\InvoiceShowHtml;
use SolidLaravel\Output\InvoiceShowText;
use SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface;
use SolidLaravel\Repositories\InvoiceRepositoryDB;
use SolidLaravel\Repositories\InvoiceRepositoryFile;

class InvoiceController extends Controller {

    /**
     * @var InvoiceRepositoryInterface
     */
    private $repo;
    /**
     * @var InvoiceShowInterface
     */
    private $output;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InvoiceRepositoryInterface $repo, InvoiceShowInterface $output)
    {
        $this->middleware('auth');
        $this->repo = $repo;
        $this->output = $output;
    }

    /**
     * Show invoice
     *
     * @return Response
     */
    public function index()
    {
        $invoice = new InvoiceReport($this->repo,1);
        return view('invoice')->with('totalAmmount',$invoice->show($this->output));

    }

}
