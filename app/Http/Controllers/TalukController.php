<?php

namespace App\Http\Controllers;

use App\Taluk;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

use App\City;

class TalukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('taluk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::all();
        return view('taluk.add',compact('cities'));
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
        $this->validate($request,   ['name'=>'required',"city_id"=>'required']);
        Taluk::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('taluk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function show(Taluk $taluk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function edit(Taluk $taluk)
    {
        //
        $cities = City::all();
        return view('taluk.edit',compact('cities','taluk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taluk $taluk)
    {
        //
        $this->validate($request,   ['name'=>'required',"city_id"=>'required']);
        $taluk->update($request->all());
       Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('taluk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taluk $taluk)
    {
        //
    }
    function getdata()
    {
        $taluk = Taluk::join('cities', 'taluks.city_id', '=', 'cities.id')
        ->select(['taluks.id','cities.name as cityname','taluks.name']);
        return Datatables::of($taluk)->make(true);
    }
}
