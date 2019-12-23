<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('city.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $state = State::all();
        return view('city.add',compact('state'));
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
        $this->validate($request,   ['name'=>'required',"state_id"=>'required']);
        City::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('city.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
        $state = State::all();
        return view('city.add',compact('state','city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
        $state = State::all();
        return view('city.edit',compact('state','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
        $this->validate($request,   ['name'=>'required',"state_id"=>'required']);
        $city->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);;
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
    function getdata()
    {
        $city = City::join('states', 'states.id', '=', 'cities.state_id')
        ->select(['cities.name','states.name as statename','cities.id']);
        return Datatables::of($city)->make(true);
    }
}
