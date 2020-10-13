<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class FrontPagesController extends Controller
{
    //
    /** 
     * This function returns home pages
    */
    protected function homepage(){
        $comment_to_be_approved =Comment::where('status','approved')->get();
        return view('welcome', compact('comment_to_be_approved'));
    }
}
