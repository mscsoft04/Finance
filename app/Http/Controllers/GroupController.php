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
        $this->validate($request,['branch_id'=>'required|exists:branches,id', 
                                    'schemes_id'=>'required|exists:schemes,id',
                                    'type'=>'required|max:30', 
                                    'name'=>'required|max:30',
                                    'auction_day'=>'required',
                                    'auction_time'=>'required',
                                    'first_auction_date'=>'required|date',
                                    'second_auction_date'=>'required|date',
                                    'last_auction_date'=>'required|date',
                                    'pso_number'=>'nullable|max:20',
                                    'pso_date'=>'nullable|date',
                                    'blaw_number'=>'nullable|max:20',
                                    'blaw_date'=>'nullable|date',
                                    'blaw_amount'=>'nullable|max:20',
                                    'fd_branch'=>'nullable|max:20',
                                    'fd_number'=>'nullable|max:20',
                                    'fd_date'=>'nullable|date',
                                    'fd_amount'=>'nullable|max:20',
                                    'commission'=>'nullable|max:20',
                                    'total_fd'=>'nullable|max:20',
                                    'fd_rate_interrest'=>'nullable|max:20',
                                    'fd_maturity_interest'=>'nullable|max:20',
                                    'fd_maturity_date'=>'nullable|date',
                                    'maturity_amount'=>'nullable|max:20',
                                    'fd_bank'=>'nullable|max:20',
                                    'cheque_no'=>'nullable|max:20',
                                    'company_chit'=>'required|max:30',
                                    'group_Type'=>'required',
                        ]); 
                        if($request['first_auction_date']){
                            $request['first_auction_date']=date ("Y-m-d",strtotime($request['first_auction_date']));
                        }
                        if($request['second_auction_date']){
                            $request['second_auction_date']=date ("Y-m-d",strtotime($request['second_auction_date']));
                        }
                        if($request['last_auction_date']){
                            $request['last_auction_date']=date ("Y-m-d",strtotime($request['last_auction_date']));
                        }
                        if($request['pso_date']){
                            $request['pso_date']=date ("Y-m-d",strtotime($request['pso_date']));
                        }
                        if($request['blaw_date']){
                            $request['blaw_date']=date ("Y-m-d",strtotime($request['blaw_date']));
                        }
                        if($request['fd_date']){
                            $request['fd_date']=date ("Y-m-d",strtotime($request['fd_date']));
                        }
                        if($request['fd_maturity_date']){
                            $request['fd_maturity_date']=date ("Y-m-d",strtotime($request['fd_maturity_date']));
                        }
                        $request['created_by']=auth()->user()->id;
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
                            $this->validate($request,['branch_id'=>'required|exists:branches,id', 
                                                        'schemes_id'=>'required|exists:schemes,id',
                                                        'type'=>'required|max:30', 
                                                        'name'=>'required|max:30',
                                                        'auction_day'=>'required',
                                                        'auction_time'=>'required',
                                                        'first_auction_date'=>'required|date',
                                                        'second_auction_date'=>'required|date',
                                                        'last_auction_date'=>'required|date',
                                                        'pso_number'=>'nullable|max:20',
                                                        'pso_date'=>'nullable|date',
                                                        'blaw_number'=>'nullable|max:20',
                                                        'blaw_date'=>'nullable|date',
                                                        'blaw_amount'=>'nullable|max:20',
                                                        'fd_branch'=>'nullable|max:20',
                                                        'fd_number'=>'nullable|max:20',
                                                        'fd_date'=>'nullable|date',
                                                        'fd_amount'=>'nullable|max:20',
                                                        'commission'=>'nullable|max:20',
                                                        'total_fd'=>'nullable|max:20',
                                                        'fd_rate_interrest'=>'nullable|max:20',
                                                        'fd_maturity_interest'=>'nullable|max:20',
                                                        'fd_maturity_date'=>'nullable|date',
                                                        'maturity_amount'=>'nullable|max:20',
                                                        'fd_bank'=>'nullable|max:20',
                                                        'cheque_no'=>'nullable|max:20',
                                                        'company_chit'=>'required|max:30',
                                                        'group_Type'=>'required',
                                                    ]); 
                    if($request['first_auction_date']){
                    $request['first_auction_date']=date ("Y-m-d",strtotime($request['first_auction_date']));
                    }
                    if($request['second_auction_date']){
                    $request['second_auction_date']=date ("Y-m-d",strtotime($request['second_auction_date']));
                    }
                    if($request['last_auction_date']){
                    $request['last_auction_date']=date ("Y-m-d",strtotime($request['last_auction_date']));
                    }
                    if($request['pso_date']){
                    $request['pso_date']=date ("Y-m-d",strtotime($request['pso_date']));
                    }
                    if($request['blaw_date']){
                    $request['blaw_date']=date ("Y-m-d",strtotime($request['blaw_date']));
                    }
                    if($request['fd_date']){
                    $request['fd_date']=date ("Y-m-d",strtotime($request['fd_date']));
                    }
                    if($request['fd_maturity_date']){
                    $request['fd_maturity_date']=date ("Y-m-d",strtotime($request['fd_maturity_date']));
                    }
                    $request['updated_by']=auth()->user()->id;

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
