<?php
/**
 * Created by Sergi Tur Badenas @2015
 * http://acacha.org/sergitur
 * http://acacha.org
 * Date: 15/04/15
 * Time: 11:54
 */

namespace SolidLaravel\Output;


class InvoiceShow {

    public function show($invoice)
    {
        return "<strong>" . $invoice->totalAmmount . " </strong>";
    }

}