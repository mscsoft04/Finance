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
        
        $this->validate($request,   ['branch_id'=>'required|exists:branches,id', 
                                    'salutation_name'=>'required|max:5',
                                    'subscriber_name'=>'required|alpha|max:20',
                                    'Initial_name'=>'required|alpha|max:3', 
                                    'relation_type'=>'required|alpha|max:20',
                                    'realtion_name'=>'required|alpha|max:20',
                                    'dob'=>'required|date|before:today|after:1900-01-01',
                                    'age'=>'required|numeric|max:100',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required|date',
                                    'mail_id'=>'nullable|email',
                                    'mobile_no'=>'required|numeric|digits_between:10,12|unique:subscribers,mobile_no',
                                    'phone_no'=>'nullable|numeric|digits_between:8,12',
                                    'aadhar_no'=>'required_without_all:pan_no,rationcard_no,driving_licence,voter_id|nullable|unique:subscribers,aadhar_no|digits_between:12,12',
                                    'pan_no'=>'required_without_all:aadhar_no,rationcard_no,driving_licence,voter_id|nullable|unique:subscribers,pan_no|digits_between:4,12',
                                    'rationcard_no'=>'required_without_all:aadhar_no,pan_no,driving_licence,voter_id|nullable|unique:subscribers,rationcard_no|digits_between:1,20',
                                    'driving_licence'=>'required_without_all:aadhar_no,pan_no,rationcard_no,voter_id|nullable|unique:subscribers,driving_licence|digits_between:1,20',
                                    'voter_id'=>'required_without_all:aadhar_no,pan_no,rationcard_no,driving_licence|nullable|unique:subscribers,voter_id|digits_between:1,20',
                                    'gst_no'=>'nullable|max:20',
                                    'p_address'=>'required|max:400',
                                    'p_state'=>'required|exists:states,id',
                                    'p_district'=>'required|exists:cities,id',
                                    'p_taluk'=>'required|exists:taluks,id',
                                    'p_village'=>'required|exists:villages,id',
                                    'p_pincode'=>'required|numeric|digits_between:6,6',
                                    'c_address'=>'required|max:400',
                                    'c_state'=>'required|exists:states,id',
                                    'c_district'=>'required|exists:cities,id',
                                    'c_taluk'=>'required|exists:taluks,id',
                                    'c_village'=>'required|exists:villages,id',
                                    'c_pincode'=>'required|numeric|digits_between:6,6',
                                    'agent_Type'=>'required',
                                    'sourceof_fund'=>'required',
                                    'refered_by'=>'required',
                                    'collection_area'=>'required|exists:collection_areas,id',
                                    'occupation'=>'required|max:20',
                                    'retirement_date'=>'nullable|date',
                                    'pf_no'=>'nullable|max:20',
                                    'relationship'=>'required|max:20',
                                    'relation_for'=>'nullable|max:20',
                                    'additional_notes'=>'nullable|max:150'
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
        
        $this->validate($request,   ['branch_id'=>'required|exists:branches,id', 
                                    'salutation_name'=>'required|max:5',
                                    'subscriber_name'=>'required|alpha|max:20',
                                    'Initial_name'=>'required|alpha|max:3', 
                                    'relation_type'=>'required|alpha|max:20',
                                    'realtion_name'=>'required|alpha|max:20',
                                    'dob'=>'required|date|before:today|after:1900-01-01',
                                    'age'=>'required|numeric|max:100',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required|date',
                                    'mail_id'=>'nullable|email',
                                    'mobile_no'=>'required|numeric|digits_between:10,12|unique:subscribers,mobile_no,'.$subscriber->id,
                                    'phone_no'=>'nullable|numeric|digits_between:8,12',
                                    'aadhar_no'=>'required_without_all:pan_no,rationcard_no,driving_licence,voter_id|nullable|digits_between:12,12|unique:subscribers,aadhar_no,'.$subscriber->id,
                                    'pan_no'=>'required_without_all:aadhar_no,rationcard_no,driving_licence,voter_id|nullable|digits_between:4,12|unique:subscribers,pan_no,'.$subscriber->id,
                                    'rationcard_no'=>'required_without_all:aadhar_no,pan_no,driving_licence,voter_id|nullable|digits_between:1,20|unique:subscribers,rationcard_no,'.$subscriber->id,
                                    'driving_licence'=>'required_without_all:aadhar_no,pan_no,rationcard_no,voter_id|nullable|digits_between:1,20|unique:subscribers,driving_licence,'.$subscriber->id,
                                    'voter_id'=>'required_without_all:aadhar_no,pan_no,rationcard_no,driving_licence|nullable|digits_between:1,20|unique:subscribers,voter_id,'.$subscriber->id,
                                    'gst_no'=>'nullable|max:20',
                                    'p_address'=>'required|max:400',
                                    'p_state'=>'required|exists:states,id',
                                    'p_district'=>'required|exists:cities,id',
                                    'p_taluk'=>'required|exists:taluks,id',
                                    'p_village'=>'required|exists:villages,id',
                                    'p_pincode'=>'required|numeric|digits_between:6,6',
                                    'c_address'=>'required|max:400',
                                    'c_state'=>'required|exists:states,id',
                                    'c_district'=>'required|exists:cities,id',
                                    'c_taluk'=>'required|exists:taluks,id',
                                    'c_village'=>'required|exists:villages,id',
                                    'c_pincode'=>'required|numeric|digits_between:6,6',
                                    'agent_Type'=>'required',
                                    'sourceof_fund'=>'required',
                                    'refered_by'=>'required',
                                    'collection_area'=>'required|exists:collection_areas,id',
                                    'occupation'=>'required|max:20',
                                    'retirement_date'=>'nullable|date',
                                    'pf_no'=>'nullable|max:20',
                                    'relationship'=>'required|max:20',
                                    'relation_for'=>'nullable|max:20',
                                    'additional_notes'=>'nullable|max:150'
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
