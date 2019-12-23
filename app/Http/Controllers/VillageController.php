<?php

namespace App\Http\Controllers;

use App\Village;
use App\Taluk;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('village.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $taluks = Taluk::all();
        return view('village.add',compact('taluks'));
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
        $this->validate($request,   ['name'=>'required',"taluk_id"=>'required']);
        Village::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('village.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        //
        $taluks = Taluk::all();
        return view('village.edit',compact('taluks','village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        //
        $this->validate($request,   ['name'=>'required',"taluk_id"=>'required']);
        $village->update($request->all());
        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('village.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        //
    }
    function getdata()
    {
        $village = Village::join('taluks', 'taluks.id', '=', 'villages.taluk_id')
        ->select(['villages.id','taluks.name as talukname','villages.name']);
        return Datatables::of($village)->make(true);
    }
}
