<?php
/**
 * Created by Sergi Tur Badenas @2015
 * http://acacha.org/sergitur
 * http://acacha.org
 * Date: 08/04/15
 * Time: 18:24
 */

namespace SolidLaravel\Output;

use SolidLaravel\Output\Contracts\InvoiceShowInterface;

class InvoiceShowHtml implements InvoiceShowInterface {

    public function show($invoice)
    {
        return "<strong>" . $invoice->totalAmmount . " </strong>";
    }
}