<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable =['first_name','last_name','email','contact','comment','reply'];
}
