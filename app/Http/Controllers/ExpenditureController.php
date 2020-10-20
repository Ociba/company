<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;

class ExpenditureController extends Controller
{
     /** 
     * This function fetches the view for Expenditure
    */
    protected function getExpenditure(){
        $expenditure =Expenditure::get();
        return view('admin.expenditure', compact('expenditure'));
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
        $expenditure =new Expenditure;
        $expenditure->item     =request()->item;
        $expenditure->quantity =request()->quantity;
        $expenditure->unit_price=request()->unit_price;
        $expenditure->amount =request()->amount;
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
        }elseif(empty(request()->unit_price)){
            return redirect()->back()->withErrors('Unit Price is required, please fill it to continue');
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
            'unit_price' =>request()->unit_price,
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
