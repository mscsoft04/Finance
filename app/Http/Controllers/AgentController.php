<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Datatables;
use App\Agent;
use Illuminate\Http\Request;
use App\DocumentType;
use App\State;
use App\City;
use App\Taluk;
use App\Village;
use Toastr;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('agent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $document=DocumentType::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        return  view('agent.add',compact('document','states','cities','taluks','villages'));

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
        $this->validate($request, ['salutation_name'=>'required',
                                    'agent_name'=>'required', 
                                    'Initial_name'=>'required',
                                    'relation_type'=>'required',
                                    'name_of_father'=>'required',
                                    'dob'=>'required',
                                    'age'=>'required',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required',
                                    'qualification'=>'required',
                                    'occupation'=>'required',
                                    'designation'=>'required',
                                    'document_id'=>'required',
                                    'document_number'=>'required',
                                    'mail_id'=>'required',
                                    'mobile_no'=>'required',
                                    'phone_no'=>'required',
                                    'address'=>'required',
                                    'state'=>'required',
                                    'district'=>'required',
                                    'taluk'=>'required',
                                    'village'=>'required',
                                    'pincode'=>'required',
                                    
                       ]); 
                if($request['dob']){
                        $request['dob']=date ("Y-m-d",strtotime($request['dob']));
                }
                if($request['doj']){
                        $request['doj']=date ("Y-m-d",strtotime($request['doj']));
                }
                if($request->image){
                        $image = $request->image;  // your base64 encoded
                        $image = str_replace('data:image/png;base64,', '', $image);
                        $image = str_replace(' ', '+', $image);
                        $imageName = str_random(10) . '.png';
                    
                        Storage::disk('local')->put($imageName, base64_decode($image));  
                        $request['profile']=Storage::url($imageName);
                    }
                    $request['created_by']=auth()->user()->id;
                    Agent::create($request->all());
                    //print_r($request);
                    
                    Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
                    return redirect()->route('agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
        $document=DocumentType::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        return  view('agent.edit',compact('agent','document','states','cities','taluks','villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
        $this->validate($request, ['salutation_name'=>'required',
                                    'agent_name'=>'required', 
                                    'Initial_name'=>'required',
                                    'relation_type'=>'required',
                                    'name_of_father'=>'required',
                                    'dob'=>'required',
                                    'age'=>'required',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required',
                                    'qualification'=>'required',
                                    'occupation'=>'required',
                                    'designation'=>'required',
                                    'document_id'=>'required',
                                    'document_number'=>'required',
                                    'mail_id'=>'required',
                                    'mobile_no'=>'required',
                                    'phone_no'=>'required',
                                    'address'=>'required',
                                    'state'=>'required',
                                    'district'=>'required',
                                    'taluk'=>'required',
                                    'village'=>'required',
                                    'pincode'=>'required',
                                    
                       ]); 
                if($request['dob']){
                        $request['dob']=date ("Y-m-d",strtotime($request['dob']));
                }
                if($request['doj']){
                        $request['doj']=date ("Y-m-d",strtotime($request['doj']));
                }
                if($request->image){
                        $image = $request->image;  // your base64 encoded
                        $image = str_replace('data:image/png;base64,', '', $image);
                        $image = str_replace(' ', '+', $image);
                        $imageName = str_random(10) . '.png';
                    
                        Storage::disk('local')->put($imageName, base64_decode($image));  
                        $request['profile']=Storage::url($imageName);
                    }
                    $request['updated_by']=auth()->user()->id;
                    $agent->update($request->all());
                    Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-center"]);
                   
                    
                return redirect()->route('agent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
    public function getdata()
    {
     $agent = Agent::all();
     return Datatables::of($agent)->make(true);
    }
}
