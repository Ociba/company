<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    /** 
     * This function creates comment sent from user
    */
    private function createComment(){
        $comment =new Comment;
        $comment->first_name =request()->first_name;
        $comment->last_name =request()->last_name;
        $comment->email     =request()->email;
        $comment ->contact  =request()->contact;
        $comment ->comment  =request()->comment;
        $comment->save();
        return redirect()->back()->with('You have successfully submitted your messsage');
    }
    /** 
     * This function fetches comments sent to be approved before displaying it
    */
    protected function approveComment(){
        $comment_to_be_approved =Comment::where('status','approved')->get();
        return view('admin.comment', compact('comment_to_be_approved'));
    }
   
    /** 
     * This function displays form for replying comment
    */
    protected function replyForm($id){
        $reply_comment =Comment::where('id', $id)->get();
        return view('admin.reply-comment', compact('reply_comment'));
    }
     /** 
     * This function saves reply for particular reply
    */
    protected function replyComment($id){
        if(empty(request()->reply)){
            return redirect()->back()->withErrors('Reply is required, please fill it to continue');
        }else{
        Comment::where('id',$id)->update(array(
            'reply' =>request()->reply
        ));
        return redirect()->back()->with('You have successfully submitted your reply');
    }
    }
    /** 
     * This function changes from active to approved comments
    */
    protected function deleteComment($id){
        Comment::where('id',$id)->update(array('status' =>'active'));
        return redirect()->back()->with('You have successfully deleted comment');
    }
    /** 
     * This function validates creating comment 
    */
    protected function validateComment(){
        if(empty(request()->first_name)){
            return redirect()->back()->withErrors('Firstname is required, please fill it to continue');
        }elseif(empty(request()->last_name)){
            return redirect()->back()->withErrors('LastName is required, please fill it to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Email is required, please fill it to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Phone Number is required, please fill it to continue');
        }elseif(empty(request()->comment)){
            return redirect()->back()->withErrors('Comment is required, please fill it to continue');
        }
        else{
            return $this->createComment();
        }
    }
}
