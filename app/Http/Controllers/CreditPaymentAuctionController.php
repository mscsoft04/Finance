<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CreditPaymentAuction;
use App\CreditPaymentAuctionDetail;
use App\CreditPaymentAuctionHistory;
use App\GroupAssign;
use App\Subscriber;
use Toastr;
use App;
use Illuminate\Http\Request;

class CreditPaymentAuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,['subscriber_id'=>'required', 
                                  'paid_amount'=>'required',
                                  'group_id'=>'required',
                                  'payment_date'=>'required',
                                  'payment_type'=>'required',
                                ]);
        $request['created_by']=auth()->user()->id;
        $request['payment_date']=date ("Y-m-d",strtotime($request['payment_date']));
        $request['cheque_date']=date ("Y-m-d",strtotime($request['cheque_date']));
        $histroy=array("subscriber_id"=>$request['subscriber_id'],
                       "payment_date"=>$request['payment_date'],
                       "paid_amount"=>$request['paid_amount'],
                       "payment_type"=>$request['payment_type'],
                       "bank_name"=>$request['bank_name'],
                       "cheque_number"=>$request['cheque_number'],
                       "cheque_date"=>$request['cheque_date'],
                       "created_by"=>$request['created_by']
                      );
         $histroy_insert=CreditPaymentAuctionHistory::create($histroy);
         $histroy_id=$histroy_insert->id;
         $data=$this->payementDetails($request);
            $payment_auction=array();
            $auction_detail=array();
            $credit_amount=0;
            $i=0;
          foreach($data as $key=>$row){ 
              
             if($i==0){
                $i++;
                $amount=$request['paid_amount']+$row['credit_amount'];
                if($amount < $row['total_amount'] && $amount!=0){ //i zero amount less

                    $detail=array("histroy_id"=>$histroy_id,
                                  "auction_id"=>$row['auction_id'],
                                  "payment_date"=>$request['payment_date'],
                                  "paid_amount"=>$amount,
                                  "pending_amount"=>$row['pending_amount'],
                                  "penalty_amount"=>$row['penalty'],
                                  "discount_amount"=>"0",
                                  "credit_amount"=>$row['credit_amount']??0,
                                  "created_by"=>$request['created_by']
                                  );
                         
                                  if($amount < $row['pending_amount']){
                                      $am=$row['pending_amount']-$amount;
                                      $pa=$row['penalty']+$am;
                                      $pay=$amount;
                                      $pl=$row['penalty'];
                                  }else{
                                    $am=$amount-$row['pending_amount'];
                                    $pa=$row['penalty']-$am;
                                    $pl=$row['penalty']-$am;
                                    $pay=$row['pending_amount'];
                                  }
                    $auction=array("subscriber_id"=>$request['subscriber_id'],
                                   "auction_id"=>$row['auction_id'],
                                   "payment_date"=>$request['payment_date'],
                                   "paid_amount"=>$row['paid_amount']+$pay,
                                   "penalty_amount"=>$pl,
                                   "discount_amount"=>"0",
                                   "pending_amount"=>$pa,
                                   "credit_amount"=>"0",
                                   "status"=>"0",
                                 );
                    $auction_detail=CreditPaymentAuctionDetail::create($detail);
                    if(is_null($row['id']) || empty($row['id'])){
                      $auction["created_by"]=$request['created_by'];
                      $auction_insert=CreditPaymentAuction::create($auction);
                    }else{
                      $auction["updated_by"]=$request['created_by'];
                      $auction_update = CreditPaymentAuction::findOrFail($row['id']);
                      $auction_update->update($auction);

                    }
                    $subscriber = Subscriber::findOrFail($request['subscriber_id']);
                    $subscriber->update(["credit_amount"=>0]);
                 
                }else{ // i zero amount more
                    if($amount >= $row['total_amount'] && $amount!=0){

                        $detail=array("histroy_id"=>$histroy_id,
                                      "auction_id"=>$row['auction_id'],
                                      "payment_date"=>$request['payment_date'],
                                      "paid_amount"=>$row['total_amount'],
                                      "pending_amount"=>$row['pending_amount'],
                                      "penalty_amount"=>$row['penalty'],
                                      "discount_amount"=>$row['discount'],
                                      "credit_amount"=>$amount-$row['total_amount'],
                                      "created_by"=>$request['created_by']
                                      );
                             
                                        $am=$amount-$row['pending_amount'];
                                        $pay=$row['pending_amount'];
                                        $credit_amount=$amount-$row['total_amount'];
                                    
                        $auction=array("subscriber_id"=>$request['subscriber_id'],
                                       "auction_id"=>$row['auction_id'],
                                       "payment_date"=>$request['payment_date'],
                                       "paid_amount"=>$row['paid_amount']+$pay,
                                       "penalty_amount"=>0,
                                       "discount_amount"=>$row['discount'],
                                       "pending_amount"=>0,
                                       "credit_amount"=>$credit_amount,
                                       "status"=>"1",
                                     );
                        $auction_detail=CreditPaymentAuctionDetail::create($detail);
                        if(is_null($row['id']) || empty($row['id'])){
                          $auction["created_by"]=$request['created_by'];
                          $auction_insert=CreditPaymentAuction::create($auction);
                        }else{
                          $auction["updated_by"]=$request['created_by'];
                          $auction_update = CreditPaymentAuction::findOrFail($row['id']);
                          $auction_update->update($auction);
    
                        }
                        $subscriber = Subscriber::findOrFail($request['subscriber_id']);
                        $subscriber->update(["credit_amount"=>$credit_amount]);
                        

                }
              }
                
             } else{ // i getterthen zero
                 $amount=$credit_amount;
                if($amount < $row['total_amount'] && $amount!=0){

                    $detail=array("histroy_id"=>$histroy_id,
                                  "auction_id"=>$row['auction_id'],
                                  "payment_date"=>$request['payment_date'],
                                  "paid_amount"=>$amount,
                                  "pending_amount"=>$row['pending_amount'],
                                  "penalty_amount"=>$row['penalty'],
                                  "discount_amount"=>"0",
                                  "credit_amount"=>$row['credit_amount']??0,
                                  "created_by"=>$request['created_by']
                                  );
                         
                                  if($amount < $row['pending_amount']){
                                      $am=$row['pending_amount']-$amount;
                                      $pa=$row['penalty']+$am;
                                      $pay=$amount;
                                      $pl=$row['penalty'];
                                  }else{
                                    $am=$amount-$row['pending_amount'];
                                    $pa=$row['penalty']-$am;
                                    $pl=$row['penalty']-$am;
                                    $pay=$row['pending_amount'];
                                  }
                    $auction=array("subscriber_id"=>$request['subscriber_id'],
                                   "auction_id"=>$row['auction_id'],
                                   "payment_date"=>$request['payment_date'],
                                   "paid_amount"=>$row['paid_amount']+$pay,
                                   "penalty_amount"=>$pl,
                                   "discount_amount"=>"0",
                                   "pending_amount"=>$pa,
                                   "credit_amount"=>"0",
                                   "status"=>"0",
                                 );
                    $auction_detail=CreditPaymentAuctionDetail::create($detail);
                    if(is_null($row['id']) || empty($row['id'])){
                      $auction["created_by"]=$request['created_by'];
                      $auction_insert=CreditPaymentAuction::create($auction);
                    }else{
                      $auction["updated_by"]=$request['created_by'];
                      $auction_update = CreditPaymentAuction::findOrFail($row['id']);
                      $auction_update->update($auction);

                    }
                    $subscriber = Subscriber::findOrFail($request['subscriber_id']);
                    $subscriber->update(["credit_amount"=>0]);
                 
                }else{
                    if($amount >= $row['total_amount'] && $amount!=0){

                        $detail=array("histroy_id"=>$histroy_id,
                                      "auction_id"=>$row['auction_id'],
                                      "payment_date"=>$request['payment_date'],
                                      "paid_amount"=>$row['total_amount'],
                                      "pending_amount"=>$row['pending_amount'],
                                      "penalty_amount"=>$row['penalty'],
                                      "discount_amount"=>$row['discount'],
                                      "credit_amount"=>$amount-$row['total_amount'],
                                      "created_by"=>$request['created_by']
                                      );
                             
                                        $am=$amount-$row['pending_amount'];
                                        $pay=$row['pending_amount'];
                                        $credit_amount=$amount-$row['total_amount'];
                                    
                        $auction=array("subscriber_id"=>$request['subscriber_id'],
                                       "auction_id"=>$row['auction_id'],
                                       "payment_date"=>$request['payment_date'],
                                       "paid_amount"=>$row['paid_amount']+$pay,
                                       "penalty_amount"=>0,
                                       "discount_amount"=>$row['discount'],
                                       "pending_amount"=>0,
                                       "credit_amount"=>$credit_amount,
                                       "status"=>"1",
                                     );
                        $auction_detail=CreditPaymentAuctionDetail::create($detail);
                        if(is_null($row['id']) || empty($row['id'])){
                          $auction["created_by"]=$request['created_by'];
                          $auction_insert=CreditPaymentAuction::create($auction);
                        }else{
                          $auction["updated_by"]=$request['created_by'];
                          $auction_update = CreditPaymentAuction::findOrFail($row['id']);
                          $auction_update->update($auction);
    
                        }
                        $subscriber = Subscriber::findOrFail($request['subscriber_id']);
                        $subscriber->update(["credit_amount"=>$credit_amount]);

                }
              }



             } // i more then zero else end

          }//each end

         
          return  $arr = array('message' => 'Added data successfully',"data"=>$histroy_id);
                              
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreditPaymentAuction  $creditPaymentAuction
     * @return \Illuminate\Http\Response
     */
    public function show(CreditPaymentAuction $creditPaymentAuction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreditPaymentAuction  $creditPaymentAuction
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditPaymentAuction $creditPaymentAuction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreditPaymentAuction  $creditPaymentAuction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditPaymentAuction $creditPaymentAuction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreditPaymentAuction  $creditPaymentAuction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditPaymentAuction $creditPaymentAuction)
    {
        //
    }

    public function payementDetails(Request $request){

        $data = GroupAssign::leftJoin('groups', 'group_assigns.group_id', '=', 'groups.id')
        ->leftJoin('branches', 'branches.id', '=', 'groups.branch_id')
        ->leftJoin('subscribers', 'subscribers.id', '=', 'group_assigns.subscriber_id')
        ->leftJoin('auctions', 'auctions.group_id', '=', 'group_assigns.group_id')
        ->leftJoin('credit_payment_auctions', function ($join) {
            $join->on('credit_payment_auctions.auction_id', '=', 'auctions.id');
            $join->on('credit_payment_auctions.subscriber_id', '=', 'group_assigns.subscriber_id');
        
            
                 
        })
        ->where('group_assigns.subscriber_id',$request['subscriber_id'])
        ->where('group_assigns.group_id',$request['group_id'])
      
         ->select(
          'auctions.auction_number',
          'auctions.due_amount',
          'auctions.auction_date',
          'auctions.id as auction_id',
          'credit_payment_auctions.payment_date',
          'credit_payment_auctions.id',
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
         $date=date("Y-m-d",strtotime($request['payment_date']));
         $cus_credit_amount="";
         foreach($data as $key=>$row){
            if(is_null($row['status']) || empty($row['status']) ||$row['status']==0){
           $result['auction_number']=$row['auction_number'];
           $result['due_amount']=$row['due_amount'];
           $result['paid_amount']=$row['paid_amount'];
           $result['id']=$row['id'];
           $result['penalty_amount']=$row['penalty_amount'];
           $result['auction_id']=$row['auction_id'];
           $cus_credit_amount=$row['cus_credit_amount'];
           $result['credit_amount']=$row['cus_credit_amount'];
           
           $diff_days=$this->days_diff($row['auction_date'],$date);
           $result['days']=$diff_days;
           $discount=0;
           if($row['bonus_days'] >=$diff_days){
               $discount=($row['due_amount']*$row['bonus_precentage']/100);
               $result['discount']=$discount;
           }else{
              $result['discount']=$discount;  
           }
            $day_count=0; $amount=0;
           if(is_null($row['payment_date']) || empty($row['payment_date'])){
              $day_count=$this->days_diff($row['auction_date'],$date);
               $amount=$row['due_amount'];

           }else{
              $day_count=$this->days_diff($row['payment_date'],$date);
              $amount=$row['due_amount']-$row['paid_amount'];
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
              $result['penalty']=$penalty_amount+$row['penalty_amount'];

           }else{
              $penalty_amount=0;
              $result['penalty']=$penalty_amount+$row['penalty_amount'];
           }
           $result['pending_amount']=$amount;
           $result['total_amount']=$penalty_amount+$amount-$discount;
           $results[]=$result;
         }

         }
         return $results;
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

   public function getIndianCurrency(float $number){
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
  }
  public function bill_generate(Request $request){

   
    $data=CreditPaymentAuctionHistory::leftJoin('subscribers', 'subscribers.id', '=', 'credit_payment_auction_histories.subscriber_id')
         ->where('credit_payment_auction_histories.id',$request['id'])->select(
          'credit_payment_auction_histories.payment_date',
          'credit_payment_auction_histories.paid_amount',
          'credit_payment_auction_histories.payment_type',
          'subscribers.subscriber_name',
          'subscribers.unique_id as subscriber_id',
          'credit_payment_auction_histories.unique_id', 
          
         
         )->first();
         
    $pdf = App::make('dompdf.wrapper');
     $text=$this->getIndianCurrency($data->paid_amount);
    $user=auth()->user()->name;
    $pdf->loadView('pdf.credit_payment',compact('data','text','user'))->setPaper('a4', 'landscape');
    return $pdf->stream('bill.pdf',array("Attachment" => false));

  }
    
}
