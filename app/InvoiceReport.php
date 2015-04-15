<?php namespace SolidLaravel;

use SolidLaravel\Output\Contracts\InvoiceShowInterface;
use SolidLaravel\Repositories\InvoiceRepository;

class InvoiceReport {


    private $invoice;

    function __construct(InvoiceRepository $repo, $id)
    {
        $this->invoice = $repo->get($id);
    }

    public function show(InvoiceShowInterface $i){
        return $i->show($this->invoice);
    }
}
