<?php

namespace App\Http\Controllers;

use App\GuarantorSurety;
use App\GuarantorDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuarantorSuretyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,   [
            'auction_id'=>'required|exists:auctions,id', 
            'salutation_name'=>'required|max:5',
            'guarantor_name'=>'required|alpha|max:20',
            'Initial_name'=>'required|alpha|max:3', 
            'relation_type'=>'required|max:20',
            'name_of_father'=>'required|alpha|max:20',
            'dob'=>'required|date|before:today|after:1900-01-01',
            'age'=>'required|numeric|max:100',
            'gender'=>'required',
            'marital_status'=>'required',
            'doj'=>'required|date',
            'mail_id'=>'nullable|email',
            'mobile_no'=>'required|numeric|digits_between:10,12',
            'phone_no'=>'nullable|numeric|digits_between:8,12',
            'address'=>'required|max:400',
             'state'=>'required|exists:states,id',
            'district'=>'required|exists:cities,id',
            'taluk'=>'required|exists:taluks,id',
            'village'=>'required|exists:villages,id',
            'pincode'=>'required|numeric|digits_between:6,6',
            'sourceof_fund'=>'required',
            'occupation'=>'required|max:20',
            'relationship'=>'required|max:20',
            'relation_for'=>'nullable|max:20',
            "document_date"=>"required",
             "document_type.*"=>"required",
            "remarks.*"=>"required",
            "file"=> "required",
            "file.*"=> "required|file|min:1|max:10000|mimes:pdf,jpeg,jpg,png |max:4096",
    
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
    
        $data=array(); 
        if($request['document_date']){
            $request['document_date']=date ("Y-m-d",strtotime($request['document_date']));
        }
        $array = array('auction_id'=>$request['auction_id'], 
                        'salutation_name'=>$request['salutation_name'],
                        'guarantor_name'=>$request['guarantor_name'],
                        'Initial_name'=>$request['Initial_name'], 
                        'relation_type'=>$request['relation_type'],
                        'name_of_father'=>$request['name_of_father'],
                        'dob'=>$request['dob'],
                        'age'=>$request['age'],
                        'gender'=>$request['gender'],
                        'marital_status'=>$request['marital_status'],
                        'doj'=>$request['doj'],
                        'mail_id'=>$request['mail_id'],
                        'mobile_no'=>$request['mobile_no'],
                        'phone_no'=>$request['phone_no'],
                        'address'=>$request['address'],
                        'state'=>$request['state'],
                        'district'=>$request['district'],
                        'taluk'=>$request['taluk'],
                        'village'=>$request['village'],
                        'pincode'=>$request['pincode'],
                        'occupation'=>$request['occupation'],
                        'designation'=>$request['designation'],
                        'monthly_income'=>$request['monthly_income'],
                        'sourceof_fund'=>$request['sourceof_fund'],
                        'relationship'=>$request['relationship'],
                        'profile'=>$request['profile'],
                        'created_by'=>$request['created_by'],
                                
               );
              $guarantorSurety=GuarantorSurety::create($array);
        if($request->hasfile('file')){
            $count=count($request->file('file'));
            for ($x = 0; $x <= $count-1; $x++) {
                 $image=$request->file('file')[$x];
                $destinationPath = storage_path('document');
                $extension = $image->getClientOriginalExtension(); 
                $fileName = rand(11111, 99999) . '.' . $extension;
                $upload_success = $image->move($destinationPath, $fileName);
                $url= Storage::url('document/'.$fileName);
                $data[]=array('guarantor_id'=>$guarantorSurety->id, 
                              'document_id'=>$request['document_type'][$x],
                              'document_date'=>$request['document_date'],
                              'remarks'=>$request['remarks'][$x], 
                              'document'=>$url,
                              'created_by'=>auth()->user()->id
                            );
            }
        }
        GuarantorDocument::insert($data);
                
        return  $arr = array('message' => 'Added data successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuarantorSurety  $guarantorSurety
     * @return \Illuminate\Http\Response
     */
    public function show(GuarantorSurety $guarantorSurety)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GuarantorSurety  $guarantorSurety
     * @return \Illuminate\Http\Response
     */
    public function edit(GuarantorSurety $guarantorSurety)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuarantorSurety  $guarantorSurety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuarantorSurety $guarantorSurety)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuarantorSurety  $guarantorSurety
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuarantorSurety $guarantorSurety)
    {
        //
    }
}
