<?php
/**
 * Created by Sergi Tur Badenas @2015
 * http://acacha.org/sergitur
 * http://acacha.org
 * Date: 15/04/15
 * Time: 12:56
 */

namespace SolidLaravel\Repositories\Contracts;

/**
 * Interface InvoiceRepository
 * @package SolidLaravel\Repositories\Contracts
 */
interface InvoiceRepositoryInterface {

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

}