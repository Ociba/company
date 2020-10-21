<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use App\Payment;

class ExpenditureController extends Controller
{
     /** 
     * This function fetches the view for Expenditure
    */
    protected function getExpenditure(){
        $expenditure =Expenditure::get();
        $total_amount =Payment::get()->sum('paid');
        $total_expenditure =Expenditure::get()->sum('amount');
        $current_balance =$total_amount-$total_expenditure;
        return view('admin.expenditure', compact('expenditure','current_balance','total_expenditure'));
    }
    /*** 
     * This function displays a form for expenditure
    */
    protected function expenditureForm(){
        return view('admin.expenditure-form');
    }
    /** 
     * This function saves expenditure to database
    */
    private function createExpenditure(){
        $quantity =Expenditure::request()->quantity;
        $rate =Expenditure::request()->rate;
        $amount =$quantity * $rate;
        $expenditure =new Expenditure;
        $expenditure->item     =request()->item;
        $expenditure->particulars =request()->particulars;
        $expenditure->quantity =request()->quantity;
        $expenditure->unit=request()->unit;
        $expenditure->rate =request()->rate;
        $expenditure->amount =$amount;
        $expenditure->person =request()->person;
        $expenditure->date   =request()->date;
        $expenditure->save();
        return redirect()->back()->with('message','You have successfully saved expenditure');
    }
    /** 
     * This function validates expenditure
    */
    protected function validateExpenditure(){
        if(empty(request()->item)){
            return redirect()->back()->withErrors('Item is required, please fill it to continue');
        }elseif(empty(request()->quantity)){
            return redirect()->back()->withErrors('Quantity is required, please fill it to continue');
        }elseif(empty(request()->particulars)){
            return redirect()->back()->withErrors('Particular is required, please fill it to continue');
        }elseif(empty(request()->rate)){
            return redirect()->back()->withErrors('Quantity is required, please fill it to continue');
        }elseif(empty(request()->unit)){
            return redirect()->back()->withErrors('Unit is required, please fill it to continue');
        }elseif(empty(request()->amount)){
            return redirect()->back()->withErrors('Amount is required, please fill it to continue');
        }elseif(empty(request()->person)){
            return redirect()->back()->withErrors('Person is required, please fill it to continue');
        }elseif(empty(request()->date)){
            return redirect()->back()->withErrors('Date is required, please fill it to continue');
        }else{
            return $this->createExpenditure();
        }
    }
    /** 
     * This function shows what to print as expenditure
    */
    protected function expenditureDetails($id){
        $get_expenditure =Expenditure:://join('users','payments.user_id','users.id')
            get();
            return view('admin.expenditure-details', compact('get_expenditure'));
    }
    /** 
     * This function display edit form
    */
    protected function editExpenditure($id){
        $edit_expenditure =Expenditure::where('id',$id)->get();
        return view('admin.edit-expenditure', compact('edit_expenditure'));
    }
    /** 
     * This function saves the details edited  for expenditure
    */
    protected function updatePayment($id){
        Expenditure::where('id',$id)->update(array(
            'item'     =>request()->item,
            'quantity' =>request()->quantity,
            'particulars' =>request()->particulars,
            'rate' =>request()->rate,
            'unit' =>request()->unit,
            'amount' =>request()->amount,
            'person' =>request()->person,
            'date'   =>request()->date,
            'sign'   =>request()->sign 
       ));
       return redirect()->back()->with('message','You have successfully edited Expenditure');
    }
    /** 
     * This function deletes payment softly
    */
    protected function deleteExpenditure($id){
        Expenditure::where('id',$id)->update(array('status'=>'deleted'));
        return redirect()->back()->withErrors('message','You have successfully deleted');
    }
}
