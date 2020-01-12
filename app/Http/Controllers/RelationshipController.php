<?php

namespace App\Http\Controllers;

use App\Relationship;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class RelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('relationship.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('relationship.add');
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
        Relationship::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('relationship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function show(Relationship $relationship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function edit(Relationship $relationship)
    {
        //
        return view('relationship.edit',compact('relationship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relationship $relationship)
    {
        //
        $this->validate($request,   ['name'=>'required']);
        $relationship->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('relationship.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relationship $relationship)
    {
        //
    }
    public  function getdata()
    {
        $relationship = Relationship::all();
        return Datatables::of($relationship)->make(true);
    }
}
