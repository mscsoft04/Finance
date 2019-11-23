<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Datatables;
use App\Branch;
use App\CollectionArea;
use App\State;
use App\City;
use App\Taluk;
use App\Village;
use App\Relationship;
use App\SourceOfFunds;

use Toastr;


class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('subscriber.index');
    }
    /*
       Data tables data 
     */
    function getdata()
    {
     $subscriber = Subscriber::all();
     return Datatables::of($subscriber)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branches = Branch::all();
        $areas=CollectionArea::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        $relationships=Relationship::all();
        $sources=SourceOfFunds::all();
        //echo $id;
        return view('subscriber.add',compact('branches','areas','states','cities','taluks','villages','relationships','sources'));
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
        
        $this->validate($request,   ['branch_id'=>'required', 
                                    'subscriber_name'=>'required',
                                    'Initial_name'=>'required', 
                                    'relation_type'=>'required',
                                    'realtion_name'=>'required',
                                    'dob'=>'required',
                                    'age'=>'required',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required',
                                    'mail_id'=>'required',
                                    'mobile_no'=>'required',
                                    'phone_no'=>'required',
                                    'aadhar_no'=>'required',
                                    'pan_no'=>'required',
                                    'rationcard_no'=>'required',
                                    'driving_licence'=>'required',
                                    'voter_id'=>'required',
                                    'gst_no'=>'required',
                                    'p_address'=>'required',
                                    'p_state'=>'required',
                                    'p_district'=>'required',
                                    'p_taluk'=>'required',
                                    'p_pincode'=>'required',
                                    'c_address'=>'required',
                                    'c_state'=>'required',
                                    'c_district'=>'required',
                                    'c_taluk'=>'required',
                                    'c_pincode'=>'required',
                                    'agent_Type'=>'required',
                                    'refered_by'=>'required',
                                    'collection_area'=>'required',
                                    'occupation'=>'required',
                                    'retirement_date'=>'required',
                                    'pf_no'=>'required',
                                    'relationship'=>'required',
                                    'relation_for'=>'required',
                                    'additional_notes'=>'required'
                                ]);
                                if($request['dob']){
                                    $request['dob']=date ("Y-m-d",strtotime($request['dob']));
                                }
                                if($request['doj']){
                                    $request['doj']=date ("Y-m-d",strtotime($request['doj']));
                                }
                                if($request['retirement_date']){
                                    $request['retirement_date']=date ("Y-m-d",strtotime($request['retirement_date']));
                                }
                                $request['created_by']=auth()->user()->id;
                                Subscriber::create($request->all());
                                //print_r($request);
                                
                                Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
                                return redirect()->route('subscriber.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
        $branches = Branch::where("id",$subscriber->branch_id)->first();
        return view('subscriber.show', compact('subscriber','branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
        $branches = Branch::all();
        $branches = Branch::all();
        $areas=CollectionArea::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        $relationships=Relationship::all();
        $sources=SourceOfFunds::all();
        //echo $id;

        return view('subscriber.edit', compact('subscriber','branches','areas','states','cities','taluks','villages','relationships','sources'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
        $this->validate($request,   ['branch_id'=>'required', 
                                    'subscriber_name'=>'required',
                                    'Initial_name'=>'required', 
                                    'relation_type'=>'required',
                                    'realtion_name'=>'required',
                                    'dob'=>'required',
                                    'age'=>'required',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required',
                                    'mail_id'=>'required',
                                    'mobile_no'=>'required',
                                    'phone_no'=>'required',
                                    'aadhar_no'=>'required',
                                    'pan_no'=>'required',
                                    'rationcard_no'=>'required',
                                    'driving_licence'=>'required',
                                    'voter_id'=>'required',
                                    'gst_no'=>'required',
                                    'p_address'=>'required',
                                    'p_state'=>'required',
                                    'p_district'=>'required',
                                    'p_taluk'=>'required',
                                    'p_pincode'=>'required',
                                    'c_address'=>'required',
                                    'c_state'=>'required',
                                    'c_district'=>'required',
                                    'c_taluk'=>'required',
                                    'c_pincode'=>'required',
                                    'agent_Type'=>'required',
                                    'refered_by'=>'required',
                                    'collection_area'=>'required',
                                    'occupation'=>'required',
                                    'retirement_date'=>'required',
                                    'pf_no'=>'required',
                                    'relationship'=>'required',
                                    'relation_for'=>'required',
                                    'additional_notes'=>'required'
                                ]);
                                $request['updated_by']=auth()->user()->id;

                                if($request['dob']){
                                    $request['dob']=date ("Y-m-d",strtotime($request['dob']));
                                }
                                if($request['doj']){
                                    $request['doj']=date ("Y-m-d",strtotime($request['doj']));
                                }
                                if($request['retirement_date']){
                                    $request['retirement_date']=date ("Y-m-d",strtotime($request['retirement_date']));
                                }
                    
                                $subscriber->update($request->all());
                                Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
                                return redirect()->route('subscriber.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
