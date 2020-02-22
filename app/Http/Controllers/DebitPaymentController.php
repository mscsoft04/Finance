<?php

namespace App\Http\Controllers;

use App\DebitPayment;
use Illuminate\Http\Request;
use App\DocumentType;
use App\State;
use App\City;
use App\Taluk;
use App\Village;
use App\Relationship;
use App\SourceOfFunds;
use App\AuctionDocument;
use App\Auction;
use App\NomineeDetails;
use App\GuarantorSurety;
use App\GuarantorDocument;
use Toastr;
use App;

class DebitPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($auction)
    {
        //
        $document=DocumentType::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        $relationships=Relationship::all();
        $sources=SourceOfFunds::all();
        $auctionData=Auction::where('id',$auction)->first();
        $debitData=DebitPayment::where('auction_id',$auction)->first();
        $nominees=NomineeDetails::leftJoin('states', 'nominee_details.state', '=', 'states.id')
                 ->leftJoin('taluks', 'nominee_details.taluk', '=', 'taluks.id')
                 ->leftJoin('cities', 'nominee_details.district', '=', 'cities.id')
                 ->leftJoin('villages', 'nominee_details.village', '=', 'villages.id')
                 ->leftJoin('relationships', 'nominee_details.relationship', '=', 'relationships.id')
                 ->leftJoin('source_of_funds', 'nominee_details.sourceof_fund', '=', 'source_of_funds.id')
                 ->leftJoin('nominee_documents', 'nominee_details.id', '=', 'nominee_documents.nominee_id')
                 ->leftJoin('document_types', 'nominee_documents.document_id', '=', 'document_types.id')
                 ->where('nominee_details.subscriber_id',$auctionData->subscriber_id)
                 ->select('nominee_details.*',
                            'states.name as state_name',
                            'taluks.name as taluk_name',
                            'cities.name as city_name',
                            'villages.name as village_name',
                            'relationships.name as relationShip_name',
                            'source_of_funds.name as funds',
                            'nominee_documents.remarks',
                            'nominee_documents.document_date',
                            'nominee_documents.document_number',
                            'nominee_documents.document',
                            'nominee_documents.status',
                            'nominee_documents.id as docId',
                            'document_types.name',
                 )->get();

                  $guarantor=GuarantorSurety::leftJoin('states', 'guarantor_sureties.state', '=', 'states.id')
                                ->leftJoin('taluks', 'guarantor_sureties.taluk', '=', 'taluks.id')
                                ->leftJoin('cities', 'guarantor_sureties.district', '=', 'cities.id')
                                ->leftJoin('villages', 'guarantor_sureties.village', '=', 'villages.id')
                                ->leftJoin('relationships', 'guarantor_sureties.relationship', '=', 'relationships.id')
                                ->leftJoin('source_of_funds', 'guarantor_sureties.sourceof_fund', '=', 'source_of_funds.id')
                                ->leftJoin('guarantor_documents', 'guarantor_sureties.id', '=', 'guarantor_documents.guarantor_id')
                                ->leftJoin('document_types', 'guarantor_documents.document_id', '=', 'document_types.id')
                                ->where('guarantor_sureties.auction_id',$auction)
                                ->select('guarantor_sureties.*',
                                            'states.name as state_name',
                                            'taluks.name as taluk_name',
                                            'cities.name as city_name',
                                            'villages.name as village_name',
                                            'relationships.name as relationShip_name',
                                            'source_of_funds.name as funds',
                                            'guarantor_documents.remarks',
                                            'guarantor_documents.document_number',
                                            'guarantor_documents.document_date',
                                            'guarantor_documents.document',
                                            'guarantor_documents.status',
                                            'guarantor_documents.id as docId',
                                            'document_types.name',
                                )->get();
                                 $guarantors=$this->group_by('id',$guarantor);


        $auction_doc=AuctionDocument:: leftJoin('document_types', 'auction_documents.document_id', '=', 'document_types.id')
                    ->where('auction_documents.auction_id',$auction)
                    ->select('auction_documents.id',
                            'auction_documents.remarks',
                            'auction_documents.document_number',
                            'auction_documents.document_date',
                            'auction_documents.document',
                            'auction_documents.status',
                            'document_types.name',
                            )->get();
        return  view('debit_payment.payment',compact('debitData','guarantors','nominees','auctionData','auction_doc','document','auction','states','cities','taluks','villages','relationships','sources'));
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
        if($request['payment_type']=='cash'){
            $validation=[ 'auction_id'=>'required',
                            'payment_date'=>'required',
                            'payment_type'=>'required',
                            'amount'=>'required',
                            'payable_amount'=>'required',
                            'due_amount'=>'required',
                            'gst_amount'=>'required',
                            'processing_amount'=>'required',
                            'other_amount'=>'required',
                            'remarks'=>'required',
                            'pay_amount'=>'required',
                        ];
  
        }else{
             $validation=[ 'auction_id'=>'required',
                            'payment_date'=>'required',
                            'payment_type'=>'required',
                            'bank_name'=>'required',
                            'cheque_number'=>'required',
                            'cheque_date'=>'required',
                            'amount'=>'required',
                            'payable_amount'=>'required',
                            'due_amount'=>'required',
                            'gst_amount'=>'required',
                            'processing_amount'=>'required',
                            'other_amount'=>'required',
                            'remarks'=>'required',
                            'pay_amount'=>'required',
                 ];

        }
        $this->validate($request,$validation); 
         if($request['payment_date']){
            $request['payment_date']=date ("Y-m-d",strtotime($request['payment_date']));
          }
          if($request['cheque_date']){
              $request['cheque_date']=date ("Y-m-d",strtotime($request['cheque_date']));
          }
        $request['created_by']=auth()->user()->id;
       $debitPayment= DebitPayment::create($request->all());
       if($debitPayment){
        $data=array("status"=>"4");
        $auction = Auction::findOrFail($request->auction_id);
        $auction->update($data);
       }

       return  $arr = array('message' => 'Added data successfully',"data"=>$debitPayment->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DebitPayment  $debitPayment
     * @return \Illuminate\Http\Response
     */
    public function show(DebitPayment $debitPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DebitPayment  $debitPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(DebitPayment $debitPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DebitPayment  $debitPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebitPayment $debitPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DebitPayment  $debitPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebitPayment $debitPayment)
    {
        //
    }
    public function group_by($key, $data) {
        $result = array();
    
        foreach($data as $val) {
            
                $result[$val[$key]][] = $val;
           
        }
        
        return $result;
    }
    public function bill_generate(Request $request){


        $data=DebitPayment::leftJoin('auctions', 'debit_payments.auction_id', '=', 'auctions.id')
              ->leftJoin('subscribers', 'subscribers.id', '=', 'auctions.subscriber_id')
              ->where('debit_payments.id',$request['id'])
              ->select(  
                'subscribers.subscriber_name',
                'subscribers.unique_id as subscriber_id',
                'debit_payments.unique_id as unique_id',
                'debit_payments.payment_date',
                'debit_payments.payment_type',
                'debit_payments.bank_name',
                'debit_payments.cheque_number',
                'debit_payments.amount',
                'debit_payments.payable_amount',
                'debit_payments.due_amount',
                'debit_payments.gst_amount',
                'debit_payments.processing_amount',
                'debit_payments.other_amount',
                'debit_payments.pay_amount',
                
                )->first();
        $pdf = App::make('dompdf.wrapper');
         $text=$this->getIndianCurrency($data->pay_amount);
        $user=auth()->user()->name;
        $pdf->loadView('pdf.debit_payment',compact('data','text','user'))->setPaper('a4', 'portrait');
        return $pdf->stream('bill.pdf',array("Attachment" => false));
    
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
}
