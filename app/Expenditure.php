<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    //
    protected $fillable =['item','quantity','unit_price','amount','person','date','sign'];
}
