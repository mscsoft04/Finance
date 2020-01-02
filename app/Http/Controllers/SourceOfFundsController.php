<?php

namespace App\Http\Controllers;

use App\SourceOfFunds;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class SourceOfFundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('source_funds.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('source_funds.add');
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
        $this->validate($request,   ['name'=>'required']);
        SourceOfFunds::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('sourceOfFunds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SourceOfFunds  $sourceOfFunds
     * @return \Illuminate\Http\Response
     */
    public function show(SourceOfFunds $sourceOfFunds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SourceOfFunds  $sourceOfFunds
     * @return \Illuminate\Http\Response
     */
    public function edit(SourceOfFunds $sourceOfFund)
    {
        //
        return view('source_funds.edit',compact('sourceOfFund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SourceOfFunds  $sourceOfFunds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SourceOfFunds $sourceOfFund)
    {
        //
        $this->validate($request,   ['name'=>'required']);
        $sourceOfFund->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('sourceOfFunds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SourceOfFunds  $sourceOfFunds
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceOfFunds $sourceOfFunds)
    {
        //
    }
    public  function getdata()
    {
        $sourceOfFunds = SourceOfFunds::all();
        return Datatables::of($sourceOfFunds)->make(true);
    }
}
