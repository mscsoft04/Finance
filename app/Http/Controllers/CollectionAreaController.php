<?php

namespace App\Http\Controllers;

use App\CollectionArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Datatables;
use App\Branch;
use Toastr;

class CollectionAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('collection-areas.index');
    }
    
    function getdata()
    {
     //$CollectionArea = CollectionArea::all();
     $CollectionArea=DB::table('collection_areas as area')->join('branches', 'area.branch_id', '=', 'branches.id')
            ->select(['branches.branch_name', 'area.area_name', 'area.village_name', 'area.pin_code', 'area.id']);
     return Datatables::of($CollectionArea)->make(true);
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
        return view('collection-areas.add',compact('branches'));
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
                                    'area_name'=>'required',
                                    'village_name'=>'required',
                                    'pin_code'=>'required',
                                    ]);
                            $request['created_by']=auth()->user()->id;
                            CollectionArea::create($request->all());
                            Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
                            return redirect()->route('collection-area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CollectionArea  $collectionArea
     * @return \Illuminate\Http\Response
     */
    public function show(CollectionArea $collectionArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CollectionArea  $collectionArea
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionArea $collectionArea)
    {
        //

        $branches = Branch::all();
        //echo $id;

        return view('collection-areas.edit', compact('collectionArea','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CollectionArea  $collectionArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionArea $collectionArea)
    {
        //
        $this->validate($request,   ['branch_id'=>'required', 
                                    'area_name'=>'required',
                                    'village_name'=>'required',
                                    'pin_code'=>'required',
                                    ]);
        $request['updated_by']=auth()->user()->id;

        $collectionArea->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('collection-area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CollectionArea  $collectionArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollectionArea $collectionArea)
    {
        //
    }
}
