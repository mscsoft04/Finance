<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Group;
use App\branch;
use App\Subscriber;
use App\CreditPaymentAuctionHistory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $group=Group::whereRaw('? between first_auction_date and last_auction_date', [date('Y-m-d')])->count();
         $branch=branch::count();
         $subscriber=Subscriber::count();
         $today_credit=CreditPaymentAuctionHistory::where('payment_date',date('Y-m-d'))->sum('paid_amount');
         $last_credit=CreditPaymentAuctionHistory::where('payment_date',date('Y-m-d',strtotime("-1 days")))->sum('paid_amount');
         $thisMonth_credit=CreditPaymentAuctionHistory::whereYear('payment_date', '=', date('Y'))->whereMonth('payment_date', '=', date('m'))->sum('paid_amount');

         
             
       
        return view('home',compact('group','branch','subscriber','today_credit','last_credit','thisMonth_credit'));
    }
}
