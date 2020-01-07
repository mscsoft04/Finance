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



        $auction_doc=AuctionDocument:: leftJoin('document_types', 'auction_documents.document_id', '=', 'document_types.id')
                    ->where('auction_documents.auction_id',$auction)
                    ->select('auction_documents.id',
                            'auction_documents.remarks',
                            'auction_documents.document_date',
                            'auction_documents.document',
                            'auction_documents.status',
                            'document_types.name',
                            )->get();
        return  view('debit_payment.payment',compact('nominees','auctionData','auction_doc','document','auction','states','cities','taluks','villages','relationships','sources'));
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
}
