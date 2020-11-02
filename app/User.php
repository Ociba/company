<?php

namespace App;
use DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Payment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /** 
     * This function gets the total amount of money paid
    */
    public function getTotalAmount(){
        $total_amount =Payment::sum('paid')->get();
        return $total_amount;
    }
    /** 
     * This function counts the months in the whole year
     * pushes them to the graph
    */
    public function getMonthlyIncome(){
        $months_array = [];
        $monthly_income = Payment::whereYear('payments.created_at', date('Y'))
        ->select(DB::raw('MONTHNAME(created_at) month'))
        ->orderBy('month', 'Asc')
        ->groupBy('month')
        ->get();
        foreach($monthly_income as $monthly_amount){
            array_push($months_array, $monthly_amount->month);
        }
        $months_array = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        return $months_array;
    }
    /** 
     * 
     * This functions fetches total amount collected per month in the company
    */
    public function getAmountInJanuary(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"January")->get()
        ->sum('paid');
        return number_format($add_amount);
    }
    public function getAmountInFebruary(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"February")->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInMarch(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"March")->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInApril(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"April")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInMay(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"May")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInJune(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"June")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInJuly(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"July")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInAugust(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"August")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInSeptember(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"September")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInOctober(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"October")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
    public function getAmountInNovember(){
            $add_amount =Payment::join('item','payments.item_id','item.id')
            ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"November")
            ->get()
            ->sum('paid');
            return $add_amount;
    }
    public function getAmountInDecember(){
        $add_amount =Payment::join('item','payments.item_id','item.id')
        ->whereYear('payments.created_at', date('Y'))->where(DB::raw("(MONTHNAME(payments.created_at))"),"December")
        ->get()
        ->sum('paid');
        return $add_amount;
    }
}
