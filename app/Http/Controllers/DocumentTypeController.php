<?php

namespace App\Http\Controllers;

use App\DocumentType;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('document_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('document_type.add');
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
        $request['created_by']=auth()->user()->id;
        DocumentType::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('documentType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentType $documentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentType $documentType)
    {
        //
        return view('document_type.edit',compact('documentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentType $documentType)
    {
        //
        $this->validate($request,   ['name'=>'required']);
        $request['updated_by']=auth()->user()->id;
        $documentType->update($request->all());

       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('documentType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentType $documentType)
    {
        //
    }
    public  function getdata()
    {
        $type = DocumentType::all();
        return Datatables::of($type)->make(true);
    }
}
