<?php

namespace App\Http\Controllers;

use App\Ledger;
use Illuminate\Http\Request;
use App\Subscriber;

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
      $output = '<ul class="ui-autocomplete" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= "
       <li class='ui-menu-item' ><a href='JavaScript:void(0)' class='ui-corner-all custom' data-id='".$row."'>".$row->subscriber_name."</a></li>
       ";
      }
      $output .= '</ul>';
      return $output;
     }
    }
}
