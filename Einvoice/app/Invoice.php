<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //Table Name
    protected $table = 'invoices';
    //Primary Key
    protected $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
