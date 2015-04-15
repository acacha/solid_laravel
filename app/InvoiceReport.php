<?php namespace SolidLaravel;

use SolidLaravel\Output\Contracts\InvoiceShowInterface;
use SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface;

class InvoiceReport {


    private $invoice;

    function __construct(InvoiceRepositoryInterface $repo, $id)
    {
        $this->invoice = $repo->get($id);
    }

    public function show(InvoiceShowInterface $i){
        return $i->show($this->invoice);
    }
}
