<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\application;

class ApplicationController extends Controller
{
    //
    /** 
     * This function returns Application form
    */
    protected function getApplicationForm(){
        return view('frontpages.application');
    }
    /** 
     * This function returns only applications that are not read
    */
    protected function getApplicationNotRead(){
        $not_read_applications =application::Where('status','not read')->get();
        return view('admin.not-read-application', compact('not_read_applications'));
    }
    /** 
     * This function returns only applications that are read
    */
    protected function getApplicationRead(){
        $read_applications =application::Where('status','read')->get();
        return view('admin.read-application', compact('read_applications'));
    }
    /** 
     * This function create applications datail
    */
    private function submitApplication(){
        $apply =new application;
        $apply ->first_name  =request()->first_name;
        $apply ->last_name   =request()->last_name;
        $apply ->email       =request()->email;
        $apply ->language    =request()->language;
        $apply ->others      =request()->others;
        $apply ->git_link    =request()->git_link;
        $apply ->message     =request()->message;
        $apply ->save();
        return redirect()->back()->with('message','You have submitted your application Successfully');
    }
     /**
     * This function validates the application
     */
    protected function validateApplication(){
        if(empty(request()->first_name)){
            return redirect()->back()->withErrors('First name is required, please fill it to continue');
        }elseif(empty(request()->last_name)){
            return redirect()->back()->withErrors('Last name is required, please fill it to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Email is required, please fill it to continue');
        }elseif(empty(request()->language)){
            return redirect()->back()->withErrors('Language is required, please fill it to continue');
        }elseif(empty(request()->others)){
            return redirect()->back()->withErrors('Other skill is required, please fill it to continue');
        }elseif(empty(request()->git_link)){
            return redirect()->back()->withErrors('Git link is required, please fill it to continue');
        }elseif(empty(request()->message)){
            return redirect()->back()->withErrors('Message is required, please fill it to continue');
        }
        else{
            return $this->submitApplication();
        }
    }
    protected function updateStatusToRead($id){
        application::where('id',$id)->update(array('status'=>'read'));
        return redirect()->back()->with('message','You have deleted the status successfully');
    }
}
