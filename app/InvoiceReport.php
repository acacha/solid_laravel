<?php namespace SolidLaravel;

class InvoiceReport {


    private $id;

    private $invoice;

    function __construct($id)
    {

        if(!\Auth::user()) {
            throw new \Exception("Authentication needed to obtain data");
        }

        $this->id = $id;
        $this->invoice = $this->getFromDatabase($id);
    }

    private function getFromDatabase($id)
    {
        return $this->invoice = Invoices::find($id);
    }

    public function show(){
        return "<strong>" . $this->invoice->totalAmmount . " </strong>";
    }
}
