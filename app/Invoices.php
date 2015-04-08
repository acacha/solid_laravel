<?php namespace SolidLaravel;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['totalAmmount'];

}
