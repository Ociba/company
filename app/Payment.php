<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable =['company','item','amount','deposit','balance','time_frame','incharge','reason'];
}
