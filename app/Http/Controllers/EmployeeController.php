<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Datatables;
use App\DocumentType;
use App\State;
use App\City;
use App\Taluk;
use App\Village;
use App\Role;
use Toastr;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document=DocumentType::all();
        $states=State::all();
        $cities=City::all();
        $taluks=Taluk::all();
        $villages=Village::all();
        $roles= Role::all();
       
        return view('employee.add',compact('document','states','cities','taluks','villages','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['salutation_name'=>'required',
                                    'employee_name'=>'required', 
                                    'Initial_name'=>'required',
                                    'relation_type'=>'required',
                                    'name_of_father'=>'required',
                                    'dob'=>'required',
                                    'age'=>'required',
                                    'gender'=>'required',
                                    'marital_status'=>'required',
                                    'doj'=>'required',
                                    'qualification'=>'required',
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
                    Employee::create($request->all());
                    //print_r($request);
                    
                    Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
                    return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function getdata()
    {
     $employee = Employee::all();
     return Datatables::of($employee)->make(true);
    }
}