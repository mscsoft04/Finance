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
        $auction_doc=AuctionDocument:: leftJoin('document_types', 'auction_documents.document_id', '=', 'document_types.id')
                    ->where('auction_documents.auction_id',$auction)
                    ->select('auction_documents.id',
                            'auction_documents.remarks',
                            'auction_documents.document_date',
                            'auction_documents.document',
                            'auction_documents.status',
                            'document_types.name',
                            )->get();
        return view('debit_payment.payment',compact('auction_doc','document','auction','states','cities','taluks','villages','relationships','sources'));
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
