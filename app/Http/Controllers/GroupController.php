<?php

namespace App\Http\Controllers;

use App\Group;
use App\Scheme;
use App\Branch;
use Illuminate\Http\Request;
use Toastr;
use Datatables;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('group.index');
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
        $schemes =Scheme::all();
        //echo $id;
        return view('group.add',compact('branches','schemes'));
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
        $this->validate($request,['branch_id'=>'required', 
                                    'schemes_id'=>'required',
                                    'type'=>'required', 
                                    'name'=>'required',
                                    'auction_date'=>'required',
                                    'start_date'=>'required',
                                    'first_due_date'=>'required',
                                    'fd_number'=>'required',
                                    'company_fd'=>'required',
                                    'fd_date'=>'required',
                                    'fd_bank'=>'required',
                                    'pso_number'=>'required',
                                    'blaw_number'=>'required',
                                    'cheque_no'=>'required',
                                    'company_chit'=>'required',
                                    'auction_time'=>'required',
                                    'commission'=>'required',
                                    'total_fd'=>'required',
                                    'fd_rate_interrest'=>'required',
                                    'maturity_amount'=>'required',
                                    'fd_branch'=>'required',
                                    'pso_date'=>'required',
                                    'blaw_date'=>'required'
                                ]); 
        
        Group::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
        $branch = Branch::where("id",$group->branch_id)->first();
        return view('group.show', compact('group','branch'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
        $branches = Branch::all();
        $schemes =Scheme::all();
        return view('group.edit', compact('group','branches','schemes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
        $this->validate($request,['branch_id'=>'required', 
                                    'schemes_id'=>'required',
                                    'type'=>'required', 
                                    'name'=>'required',
                                    'auction_date'=>'required',
                                    'start_date'=>'required',
                                    'first_due_date'=>'required',
                                    'fd_number'=>'required',
                                    'company_fd'=>'required',
                                    'fd_date'=>'required',
                                    'fd_bank'=>'required',
                                    'pso_number'=>'required',
                                    'blaw_number'=>'required',
                                    'cheque_no'=>'required',
                                    'company_chit'=>'required',
                                    'auction_time'=>'required',
                                    'commission'=>'required',
                                    'total_fd'=>'required',
                                    'fd_rate_interrest'=>'required',
                                    'maturity_amount'=>'required',
                                    'fd_branch'=>'required',
                                    'pso_date'=>'required',
                                    'blaw_date'=>'required'
                                ]); 

        $group->update($request->all());
       

        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
    function getdata()
    {
     $group = Group::all();
     return Datatables::of($group)->make(true);
    }
}
