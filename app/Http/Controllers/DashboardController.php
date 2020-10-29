<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use App\Payment;
use DB;
class DashboardController extends Controller
{
    //
    protected function getDashboard(){
        //This variable returns web site amount
        $website_amount = Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',1)
        ->sum('paid');
        //This variable returns web application amount
        $web_app_amount = Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',2)
        ->sum('paid');
        //This variable returns mobile application amount
        $mobile_app_amount = Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',3)
        ->sum('paid');
        //This variable returns graphics amount
        $graphics = Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',4)
        ->orwhere('payments.item_id',5)
        ->sum('paid');
        //This variable returns installation amount
        $installations = Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',6)
        ->sum('paid');
        //This variable counts no. of website
        $number_of_websites =Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',1)->count();

        $number_of_web_app =Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',2)->count();

        $number_of_mobile =Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',3)->count();

        $number_of_graphic =Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',4)
        ->orwhere('payments.item_id',5)
        ->count();

        $number_of_installation =Payment::join('item','payments.item_id','item.id')
        ->where('payments.item_id',6)->count();
        //This variable returns total expenditure
        $total_expenditure =Expenditure::get()->sum('amount');
        //This variable returns total payment
        $total_amount =Payment::get()->sum('paid');
        if(auth()->user()->role_id ==1){
        return view('Admin.template', compact('total_expenditure','total_amount','website_amount','web_app_amount',
        'mobile_app_amount','graphics','installations','number_of_websites','number_of_mobile','number_of_web_app',
         'number_of_graphic','number_of_installation'));
        }else{
            return redirect('/404');
        }
    }
}
