<?php
/**
 * Created by Sergi Tur Badenas @2015
 * http://acacha.org/sergitur
 * http://acacha.org
 * Date: 08/04/15
 * Time: 18:17
 */

namespace SolidLaravel\Repositories;


use SolidLaravel\Invoices;

class InvoiceRepository {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquen object
     */
    public function get($id) {
        return Invoices::find($id);
    }

}