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
      $data = Subscriber::leftJoin('taluks', 'subscribers.p_taluk', '=', 'taluks.id')
               ->leftJoin('villages', 'subscribers.p_village', '=', 'villages.id')
               ->leftJoin('collection_areas', 'subscribers.collection_area', '=', 'collection_areas.id')
            ->where('subscribers.subscriber_name', 'LIKE', "%{$query}%")
        ->orWhere('subscribers.mobile_no', 'LIKE', "%{$query}%")
        ->orWhere('subscribers.mail_id', 'LIKE', "%{$query}%")
        ->select('subscribers.id',
                 'subscribers.subscriber_name',
                 'subscribers.Initial_name',
                 'subscribers.age',
                 'subscribers.mobile_no',
                 'subscribers.gender',
                 'subscribers.mail_id',
                 'subscribers.p_pincode',
                 'subscribers.profile',
                 'subscribers.credit_amount',
                 'subscribers.occupation',
                 'taluks.name as taluk',
                 'villages.name as village',
                 'collection_areas.area_name as area'
                        
                )
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

       $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->mobile_no."</a> </td>";
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
                ->leftJoin('branches', 'branches.id', '=', 'groups.branch_id')
                ->leftJoin('subscribers', 'subscribers.id', '=', 'group_assigns.subscriber_id')
                ->leftJoin('auctions', 'auctions.group_id', '=', 'group_assigns.group_id')
                ->leftJoin('credit_payment_auctions', function ($join) {
                    $join->on('credit_payment_auctions.auction_id', '=', 'auctions.id');
                    $join->on('credit_payment_auctions.subscriber_id', '=', 'group_assigns.subscriber_id');
                         
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
                  'subscribers.credit_amount as cus_credit_amount',
                  'branches.bonus_days',
                  'branches.bonus_precentage',
                  'branches.penalty_days',
                  'branches.prize_subscriber_penalty',
                  'branches.non_prize_subscriber_penalty'
                 
                 )->get();
         $exit=DB::table('auctions')->where('group_id', $request['group'])->where('subscriber_id', $request['subscriber_id'])->exists();
          $results=array();
          $date=date("Y-m-d");
          $cus_credit_amount="";
         foreach($data as $key=>$row){
             
             if(is_null($row['status']) || empty($row['status']) || $row['status']==0){
            
             $result['auction_number']=$row['auction_number']??0;
             $result['due_amount']=$row['due_amount']??0;
             $result['paid_amount']=$row['paid_amount']??0;
             $cus_credit_amount=$row['cus_credit_amount']??0;
             
             $diff_days=$this->days_diff($row['auction_date'],$date);
             $result['days']=$diff_days;
             $discount=0;
             if($row['bonus_days'] >=$diff_days){
                 $discount=($row['due_amount']*$row['bonus_precentage']/100);
                 $result['discount']=$discount??0;
             }else{
                $result['discount']=$discount??0;  
             }
              $day_count=0; $amount=0;
             if(is_null($row['payment_date']) || empty($row['payment_date'])){
                $day_count=$this->days_diff($row['auction_date'],$date);
                 $amount=$row['due_amount']??0;

             }else{
                $day_count=$this->days_diff($row['payment_date'],$date);
                $amount=$row['due_amount']-$row['paid_amount']??0;
             }
             if($row['penalty_days'] < $diff_days){
                $preCentage=($exit==true)?$row['prize_subscriber_penalty']:$row['non_prize_subscriber_penalty'];
                $penalty=($amount*$preCentage/100)/365;
                $day=$day_count-$row['penalty_days'];
                $penalty_amount=0;
                if($amount>=1000){
                    $p_a=$penalty*$day ;
                    $penalty_amount=$this->round_off($p_a);
                    
                }
               
                $result['penalty']=$penalty_amount+$row['penalty_amount'];;

             }else{
                $penalty_amount=0;
                $result['penalty']=$penalty_amount+$row['penalty_amount'];
             }
             $result['pending_amount']=$amount??0;
            
             $tot=$penalty_amount+$amount-$discount;
             $result['total_amount']=$tot??0;

             $results[]=$result;
            }
         }
         $toatl_due_amount=array_sum(array_column($results,'due_amount'));
         $toatl_pending_amount=array_sum(array_column($results,'pending_amount'));
         $toatl_discount=array_sum(array_column($results,'discount'));
         $toatl_penalty=array_sum(array_column($results,'penalty'));
         $toatl_total_amount=array_sum(array_column($results,'total_amount'));
         $toatl_paid_amount=array_sum(array_column($results,'paid_amount'));
         
         $total=array("due_amount"=>$toatl_due_amount,
                      "discount"=>$toatl_discount,
                      "pending_amount"=>$toatl_pending_amount,
                      "penalty"=>$toatl_penalty,
                      "total_amount"=>number_format($toatl_total_amount,2),
                      "paid_amount"=>$toatl_paid_amount,
                      "auction_number"=>"",
                      "days"=>"",
                    );
         $res=$results;
         array_push($results,$total);
         $group_id=$request['group'];
         $subscriber_id= $request['subscriber_id'];

        return view('ledger.add',compact('res','results','cus_credit_amount','group_id','subscriber_id','total'));

    }

    public function days_diff($fromDay,$toDay){
        $from = \Carbon\Carbon::createFromFormat('Y-m-d', $fromDay);
        $to = \Carbon\Carbon::createFromFormat('Y-m-d', $toDay);
        $diff_in_days = $to->diffInDays($from);
      return  $diff_in_days;
    }
    public function round_off($data){
        $x=intdiv($data,5);
        $v=$data-$x*5;
        if($v!=0){
       
        $d=0;
        if($v<3){
          $d= $data-$v;
        }else{
         $s=5-$v;
         $d= $data+$s;
        }
       }else{
         $d= $data;
      }
      return $d;
       
   }

}
