<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable =['company','item','amount','paid','balance','time_frame','incharge','reason','phone','company_email'];
}
