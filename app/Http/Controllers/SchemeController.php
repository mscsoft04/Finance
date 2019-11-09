<?php

namespace App\Http\Controllers;

use App\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datatables;
use App\Branch;
use Toastr;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('scheme.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('scheme.add');
    }
    

   public  function getdata()
    {
     $scheme = Scheme::all();
     return Datatables::of($scheme)->make(true);
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
       $this->validate($request,['chit_value'=>'required', 
                                    'no_of_member'=>'required',
                                    'res_fees'=>'required',
                                    'enroll_fees'=>'required',
                                    'letter_fees'=>'required',
                                    'sort_form'=>'required',
                                    'monthly_due'=>'required',
                                    
                                    ]); 
        $request['created_by']=auth()->user()->id;
        Scheme::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('scheme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function show(Scheme $scheme)
    {
        //
        return view('scheme.show', compact('scheme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheme $scheme)
    {
        //
        return view('scheme.edit', compact('scheme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheme $scheme)
    {
        //
        $this->validate($request,['chit_value'=>'required', 
                                    'no_of_member'=>'required',
                                    'res_fees'=>'required',
                                    'enroll_fees'=>'required',
                                    'letter_fees'=>'required',
                                    'sort_form'=>'required',
                                    'monthly_due'=>'required',
                                    
                                    ]); 
        $request['updated_by']=auth()->user()->id;

        $scheme->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('scheme.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheme $scheme)
    {
        //
    }
}
