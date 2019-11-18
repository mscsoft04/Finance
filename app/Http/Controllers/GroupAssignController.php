<?php

namespace App\Http\Controllers;

use App\GroupAssign;
use App\Group;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Toastr;
use Datatables;

class GroupAssignController extends Controller
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
        $this->validate($request,['agent_id'=>'required', 
                                    'customer'=>'required',
                                    'subscriber_id'=>'required', 
                                    'ticket_number'=>'required',
                                    'collection_type'=>'required',
                                    'group_id'=>'required',
                                ]); 
        if($request['id']){
            $request['updated_by']=auth()->user()->id;
            $assign = GroupAssign::findOrFail($request['id']);
            $assign->update($request->all());
            return  $arr = array('message' => 'Updated data successfully');

        }else {
            $request['created_by']=auth()->user()->id;
            GroupAssign::create($request->all());
            return  $arr = array('message' => 'Added data successfully');
        }
       

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $data = Group::leftJoin('schemes', 'schemes.id', '=', 'groups.schemes_id')
                ->leftJoin('group_assigns', 'group_assigns.group_id', '=', 'groups.id')
                ->leftJoin('subscribers', 'group_assigns.subscriber_id', '=', 'subscribers.id')
                ->where('groups.id',$id)
                ->select('subscribers.subscriber_name',
                         'subscribers.occupation',
                         'subscribers.age',
                         'groups.id as group_id',
                         'groups.name as name',
                         'schemes.no_of_member',
                         'group_assigns.collection_type',
                         'group_assigns.id',
                         'group_assigns.ticket_number',
                         'group_assigns.agent_id',
                         'group_assigns.subscriber_id'
                        
                        )->get();
            

        return view('group_assign.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupAssign $groupAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupAssign $groupAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupAssign $groupAssign)
    {
        //
       $delete= $groupAssign->delete();
       return  $arr = array('message' => 'Deleted data successfully');
    }
}
