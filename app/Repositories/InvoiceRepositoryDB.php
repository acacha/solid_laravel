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
use SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface;

/**
 * Class InvoiceRepositoryDB
 * @package SolidLaravel\Repositories
 */
class InvoiceRepositoryDB implements InvoiceRepositoryInterface {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquent object
     */
    public function get($id) {
        return Invoices::find($id);
    }

}