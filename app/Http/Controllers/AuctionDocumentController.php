<?php

namespace App\Http\Controllers;

use App\AuctionDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuctionDocumentController extends Controller
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
    public function store($auction,Request $request)
    {
         
        $this->validate($request, ["document_date.*"=>"required",
                                    "document_type.*"=>"required",
                                    "remarks.*"=>"required",
                                    "file"=> "required",
                                    "file.*"=> "required|file|min:1|max:10000|mimes:pdf,jpeg,jpg,png |max:4096",

                                    
                                    ],[
                                        'file.*.required' => 'Please upload an file only',
                                        'file.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed',
                                        'file.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
                                  ]);
        $data=array(); 
        if($request['document_date']){
            $request['document_date']=date ("Y-m-d",strtotime($request['document_date']));
        }
        if($request->hasfile('file')){
            $count=count($request->file('file'));
            for ($x = 0; $x <= $count-1; $x++) {
                 $image=$request->file('file')[$x];
                $destinationPath = storage_path('document');
                $extension = $image->getClientOriginalExtension(); 
                $fileName = rand(11111, 99999) . '.' . $extension;
                $upload_success = $image->move($destinationPath, $fileName);
                $url= Storage::url('document/'.$fileName);
                $data[]=array('auction_id'=>$auction, 
                              'document_id'=>$request['document_type'][$x],
                              'document_date'=>$request['document_date'],
                              'remarks'=>$request['remarks'][$x], 
                              'document'=>$url,
                              'created_by'=>auth()->user()->id
                            );
            }
            AuctionDocument::insert($data);
            
            return  $arr = array('message' => 'Added data successfully');
                                     
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function show(AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuctionDocument $auctionDocument)
    {
        //
    }
}
