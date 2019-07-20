<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Datatables;
use App\Branch;
use Toastr;


class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bank.index');
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
        return view('bank.add',compact('branches'));
    }
    function getdata()
    {
     //$CollectionArea = CollectionArea::all();
     $banks=DB::table('banks')->join('branches', 'banks.branch_id', '=', 'branches.id')
            ->select(['branches.branch_name', 
                     'banks.type',
                    'banks.bank_name',
                    'banks.account_holder',
                    'banks.ac_number',
                    'banks.ifsc', 
                    'banks.branch',
                    'banks.opening_balance',
                    'banks.address',
                    'banks.id',
                    
                    ]);
     return Datatables::of($banks)->make(true);
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
                                    'type'=>'required',
                                    'bank_name'=>'required',
                                    'account_holder'=>'required',
                                    'ac_number'=>'required',
                                    'ifsc'=>'required',
                                    'branch'=>'required',
                                    'opening_balance'=>'required',
                                    'address'=>'required',
                                    
                                    ]); 
        $request['created_by']=auth()->user()->id;
        Bank::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('bank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        //
        $branches = Branch::all();
        //echo $id;

        return view('bank.edit', compact('bank','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        //
        $this->validate($request,['branch_id'=>'required', 
                                    'type'=>'required',
                                    'bank_name'=>'required',
                                    'account_holder'=>'required',
                                    'ac_number'=>'required',
                                    'ifsc'=>'required',
                                    'branch'=>'required',
                                    'opening_balance'=>'required',
                                    'address'=>'required',
                                    
                                    ]); 
        $request['updated_by']=auth()->user()->id;

         $bank->update($request->all());
        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-center"]);
        return redirect()->route('bank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }
}
