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
                            'nominee_documents.document',
                            'nominee_documents.status',
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
        return  view('debit_payment.payment',compact('guarantors','nominees','auctionData','auction_doc','document','auction','states','cities','taluks','villages','relationships','sources'));
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
        $this->validate($request,[ 'auction_id'=>'required',
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
                                 ]); 
         if($request['payment_date']){
            $request['payment_date']=date ("Y-m-d",strtotime($request['payment_date']));
          }
          if($request['cheque_date']){
              $request['cheque_date']=date ("Y-m-d",strtotime($request['cheque_date']));
          }
        $request['created_by']=auth()->user()->id;
        DebitPayment::create($request->all());
        return  $arr = array('message' => 'Updated data successfully');


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
}
