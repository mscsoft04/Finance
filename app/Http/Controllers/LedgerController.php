<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Ledger;
use Illuminate\Http\Request;
use App\Subscriber;
use App\GroupAssign;

class LedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ledger.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    public function show(Ledger $ledger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    public function edit(Ledger $ledger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ledger $ledger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ledger $ledger)
    {
        //
    }
   public function fetch(Request $request)
    {
       
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Subscriber::where('subscriber_name', 'LIKE', "%{$query}%")
        ->orWhere('phone_no', 'LIKE', "%{$query}%")
        ->orWhere('mail_id', 'LIKE', "%{$query}%")
        ->get();
      $output = '<table class="table table-streched table-hover">';
      $output .= "<thead>
          <tr>
              <th>Name</th>
              <th>Initial</th>
              <th>Phone No</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Email</th>
              <th>Occupation</th>
          </tr>
      </thead>
      
      <tbody>";
      foreach($data as $row)
      {
       $output .= "<tr>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->subscriber_name." </a></td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->Initial_name."</a></td>";

       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->phone_no."</a> </td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->age."</a></td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->gender."</a></td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->p_address."</a></td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->mail_id."</a></td>";
       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->occupation."</a></td>";
       $output .= "</tr>";
      }
      $output .= '</tbody></table>';
      return $output;
     }
    }
    public function showgroup($id)
    {
        //
    }
    public function auctiondata(Request $request)
    {
        //
        $data = GroupAssign::leftJoin('groups', 'group_assigns.group_id', '=', 'groups.id')
                ->leftJoin('auctions', 'auctions.group_id', '=', 'group_assigns.group_id')
                ->leftJoin('schemes', 'schemes.id', '=', 'groups.schemes_id')
                ->where('group_assigns.subscriber_id',$request['id'])
                ->select('groups.name as group_name',
                         'groups.unique_id as group_id',
                         'groups.group_Type',
                         'groups.id as groupId',
                         'schemes.chit_value',
                         'schemes.monthly_due',
                         'group_assigns.collection_type',
                         'group_assigns.ticket_number',
                         'group_assigns.subscriber_id',
                         'auctions.status',
                         'auctions.subscriber_id as actionSub_id',
                         'auctions.auction_number',
                        
                        )->get()->groupBy(function($item) {
                            return $item->group_id;
                        });
                        $id=$request['id'];
    
            
           
           return view('ledger.show_group',compact('data','id'));
    }
    public function addPayment(Request $request){
         
         $data = GroupAssign::leftJoin('groups', 'group_assigns.group_id', '=', 'groups.id')
                ->leftJoin('auctions', 'auctions.group_id', '=', 'group_assigns.group_id')
                ->leftJoin('credit_payment_auctions', function ($join) {
                    $join->on('credit_payment_auctions.auction_id', '=', 'auctions.id');
                    $join->on('credit_payment_auctions.subscriber_id', '=', 'group_assigns.subscriber_id')
                    ->where('credit_payment_auctions.status', '=', '0')
                    ->orWhereNull('credit_payment_auctions.status');
                    
                         
                })
                ->where('group_assigns.subscriber_id',$request['subscriber_id'])
                ->where('group_assigns.group_id',$request['group'])
              
                 ->select(
                  'auctions.auction_number',
                  'auctions.due_amount',
                  'auctions.auction_date',
                  'credit_payment_auctions.payment_date',
                  'credit_payment_auctions.paid_amount',
                  'credit_payment_auctions.penalty_amount',
                  'credit_payment_auctions.discount_amount',
                  'credit_payment_auctions.pending_amount',
                  'credit_payment_auctions.credit_amount',
                  'credit_payment_auctions.status',
                 
                 )->get();

         return $this->days_diff(date("Y-m-d"),date("Y-m-30"));

        return view('ledger.add');

    }

    public function days_diff($fromDay,$toDay){
        $from = \Carbon\Carbon::createFromFormat('Y-m-d', $fromDay);
        $to = \Carbon\Carbon::createFromFormat('Y-m-d', $toDay);
        $diff_in_days = $to->diffInDays($from);
      return  $diff_in_days;
    }

}
