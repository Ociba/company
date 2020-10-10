<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class MessageController extends Controller
{
    //
    /** 
     * This function returns only messages that are not read
    */
    protected function getNotReadMessages(){
        $get_all_messsages_not_read =message::where('status','not read')->get();
        return view('admin.unread-messages', compact('get_all_messsages_not_read'));
    }
    /** 
     * This function returns only messages that are read
    */
    protected function getReadMessages(){
        $get_all_messsages_read =message::where('status','read')->get();
        return view('admin.read-messages', compact('get_all_messsages_read'));
    }
    /** 
     * This function creates message and saved to the database
    */
    private function submitMessage(){ 
        $message = new message();
        $message ->name     =request()->name;
        $message ->email    =request()->email;
        $message ->number   =request()->number;
        $message ->message  =request()->message;
        $message ->save();
        return redirect()->back()->with('message','You have successfully submitted your messsage');
    }
    /** 
     * This function chdnges messages status to read
    */
    protected function updateMessageToRead($id){
        message::where('id',$id)->update(array('status' =>'read'));
        return redirect()->back()->with('message','You deleted messsage successfully');
    }
    /** 
     * This function validates messsage fields
    */
    protected function validateMessage(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Name is required, please fill it to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Email is required, please fill it to continue');
        }elseif(empty(request()->number)){
            return redirect()->back()->withErrors('Phone Number is required, please fill it to continue');
        }elseif(empty(request()->message)){
            return redirect()->back()->withErrors('Message is required, please fill it to continue');
        }
        else{
            return $this->submitMessage();
        }
    }
}
