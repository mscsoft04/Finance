<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Branch;
use Toastr;
class BranchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('branch.index');
    }
     /*
       Data tables data 
     */
    function getdata()
    {
     $branch = Branch::all();
     return Datatables::of($branch)->make(true);
    }

    public function create()
    {
        return view('branch.add');
    }
    public function store(Request $request)
    {
       $this->validate($request, [
        'branch_name'=>'required', 
        'branch_code'=>'required',
        'email'=>'required|email', 
        'phone_no'=>'required|digits:10',
        'mobile_no'=>'required|digits:10',
        'division'=>'required',
        'doo'=>'required|date',
        'age'=>'required|integer',
        'address'=>'required',
        'bonus_days'=>'required|integer',
        'bonus_precentage'=>'required',
        'non_prize_subscriber_penalty'=>'required',
        'prize_subscriber_penalty'=>'required',
        'penalty_days'=>'required|integer',
        'state'=>'required',
        'city'=>'required',
        'taluk'=>'required',
        'pincode'=>'required',
        'fd_total_month'=>'required',
        'remarks'=>'required',
        ]); 
        $request['created_by']=auth()->user()->id;
        $request['doo']=date ("Y-m-d",strtotime($request['doo']));
        Branch::create($request->all());
        //print_r($request);
        
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('branch.index');
    }


    public function edit($id)
    {
        $branch = Branch::find($id);
        //echo $id;

        return view('branch.edit', compact('branch'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, ['branch_name'=>'required', 
                                    'branch_code'=>'required',
                                    'email'=>'required|email', 
                                    'phone_no'=>'required|digits:10',
                                    'mobile_no'=>'required|digits:10',
                                    'division'=>'required',
                                    'doo'=>'required|date',
                                    'age'=>'required|integer',
                                    'address'=>'required',
                                    'bonus_days'=>'required|integer',
                                    'bonus_precentage'=>'required',
                                    'non_prize_subscriber_penalty'=>'required',
                                    'prize_subscriber_penalty'=>'required',
                                    'penalty_days'=>'required|integer',
                                    'state'=>'required',
                                    'city'=>'required',
                                    'taluk'=>'required',
                                    'pincode'=>'required',
                                    'fd_total_month'=>'required',
                                    'remarks'=>'required',
                                ]); 
            $request['updated_by']=auth()->user()->id;
            $request['doo']=date ("Y-m-d",strtotime($request['doo']));

            $branch = Branch::findOrFail($id);

            $branch->update($request->all());
           

            Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
            return redirect()->route('branch.index');



    }
    public function show(Branch $branch)
    {
       
        return view('branch.show', compact('branch'));
        
    }

}
