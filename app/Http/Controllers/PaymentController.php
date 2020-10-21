<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    /** 
     * This function fetches the view for payment
    */
    protected function getPayment(){
        $payment =Payment::get();
        $total_amount =Payment::get()->sum('paid');
        return view('admin.payment', compact('payment','total_amount'));
    }
    /** 
     * This function returns form for creating payments
    */
    protected function getPaymentForm(){
        return view('admin.payment-form');
    }
    /** 
     * This function creates payments
    */
    private function createPayment(){
        $payment =new Payment;
        $payment ->company    =request()->company;
        $payment ->item       =request()->item;
        $payment ->phone      =request()->phone;
        $payment ->company_email      =request()->company_email;
        $payment ->amount     =request()->amount;
        $payment ->paid    =request()->paid;
        $payment ->balance    =request()->balance;
        $payment ->time_frame =request()->time_frame;
        $payment ->incharge   =request()->incharge;
        $payment ->reason     =request()->reason;
        $payment->save();
        return redirect()->back()->with('message','You have successfully made payments');
    }
    /** 
     * This function validates payment bing created
    */
    protected function validatePayment(){
        if(empty(request()->company)){
            return redirect()->back()->withErrors('Company is required, please fill it to continue');
        }elseif(empty(request()->item)){
            return redirect()->back()->withErrors('Item is required, please fill it to continue');
        }elseif(empty(request()->phone)){
            return redirect()->back()->withErrors('Phone is required, please fill it to continue');
        }elseif(empty(request()->company_email)){
            return redirect()->back()->withErrors('Email is required, please fill it to continue');
        }elseif(empty(request()->amount)){
            return redirect()->back()->withErrors('Amount is required, please fill it to continue');
        }elseif(empty(request()->paid)){
            return redirect()->back()->withErrors('Paid is required, please fill it to continue');
        }elseif(empty(request()->balance)){
            return redirect()->back()->withErrors('Balance is required, please fill it to continue');
        }elseif(empty(request()->time_frame)){
            return redirect()->back()->withErrors('Incharge is required, please fill it to continue');
        }elseif(empty(request()->reason)){
            return redirect()->back()->withErrors('Reason is required, please fill it to continue');
        }else{
            return $this->createPayment();
        }
    }
    /** 
     * This function shows what to print
    */
    protected function paymentDetails($id){
        $get_payment_information =Payment:://join('users','payments.user_id','users.id')
            get();
            return view('admin.payment-information', compact('get_payment_information'));
    }
    /** 
     * This function display edit form
    */
    protected function editPayment($id){
        $edit_payment =Payment::where('id',$id)->get();
        return view('admin.edit-payment-form', compact('edit_payment'));
    }
    /** 
     * This function saves the details edited  for payment
    */
    protected function updatePayment($id){
       Payment::where('id',$id)->update(array(
        'company'    =>request()->company,
        'item'      =>request()->item,
        'amount'     =>request()->amount,
        'paid'    =>request()->paid,
        'balance'    =>request()->balance,
        'time_frame' =>request()->time_frame,
        'incharge'   =>request()->incharge,
        'reason'     =>request()->reason
       ));
       $balance_from_database = Payment::where('id',$id)
       ->select('payments.paid', 'payments.amount')
       ->first();

       

       if($balance_from_database->balance == 0) {

           Payment::where('id',$id)->update(array('status'=>'completed'));
       }
       return redirect()->back()->with('message','You have successfully edit Payments');
        
    }
    /** 
     * This function deletes payment softly
    */
    protected function deletePayment($id){
        Payment::where('id',$id)->update(array('status'=>'deleted'));
        return redirect()->back()->withErrors('message','You have successfully deleted');
    }
    /** 
     * This function fetches table for pricing
    */
    protected function getPrice(){
        return view('admin.price');
    }
}
