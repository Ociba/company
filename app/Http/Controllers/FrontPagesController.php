<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    //
    /** 
     * This function returns home pages
    */
    protected function homepage(){
        return view('welcome');
    }
}
