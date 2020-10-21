<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    //
    protected $fillable =['item','quantity','unit','rate','particulars','amount','person','date','sign'];
}
