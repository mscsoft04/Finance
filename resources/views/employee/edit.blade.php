@extends('layouts.main')
@section('title', 'Employee')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="{{ url('employee') }}"><span>Employee</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
         <li class="breadcrumb-item active">Add</li>
      </ul>
   </div>
</div>
@endsection
@section('content')
@if($errors->any())
   <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
           <li >{{ $error }}</li>
       @endforeach
    </ul>
@endif
<div class="row">
   <div class="col-lg-12">
      <div class="widget-bg">
         <div class="card  ">
            <div class="card-body">
                <form method="post" action="{{ route('employee.update',["employee"=>$employee->id]) }}" >
                    @csrf
                    @method('PATCH')
                  
                  <div class="form-group">
                     <div class="form-row">
                         <!-- Form row start-->
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- col-xl-6 start-->
                             <div class="card card-box">
                                 <!-- card start -->
                                 <div class="card-header">
                                     General Details
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <!-- row start -->
                                         <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="salutationname"><span>Salutation</span></label>
                                                 <select name="salutation_name" class="form-control">
                                                   <option  value="Mr" {{ $employee->salutation_name == "Mr" ? "selected":"" }}>Mr</option>
                                                   <option  value="Mrs" {{ $employee->salutation_name == "Mrs" ? "selected":"" }}>Mrs</option>
                                                   <option  value="Dr" {{ $employee->salutation_name == "Dr" ? "selected":"" }}>Dr</option>
                                                   <option  value="Prof" {{ $employee->salutation_name == "Prof" ? "selected":"" }}>Prof</option>
                                                   <option  value="Rev" {{ $employee->salutation_name == "Rev" ? "selected":"" }}>Rev</option>
                                                   <option  value="Other" {{ $employee->salutation_name == "Other" ? "selected":"" }}>Other</option>
                                                 </select>
                                             </div>
                                      @error('salutation_name')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                         </div>
                                         <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="employeename"><span>Employee Name</span></label>
                                                 <input type="text"  name="employee_name"  class="form-control" value="{{ $employee->employee_name }}" placeholder="Employee Name">
                                             </div>
                                             @error('employee_name')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                         <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="Initialname"><span>Initial</span></label>
                                                 <input type="text"  name="Initial_name" value="{{ $employee->Initial_name }}" class="form-control" placeholder="Initial">
                                             </div>
                                             @error('Initial_name')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <!-- row end -->

                                     <!-- form row end -->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">
                                             <div class="form-label-group">
                                                 <label>Select</label>
                                                 <select class="form-control" name="relation_type">
                                                   <option value="S/o" {{ $employee->relation_type == "S/o" ? "selected":"" }}>S/o</option>
                                                   <option value="W/o" {{ $employee->relation_type == "W/o" ? "selected":"" }}>W/o</option>
                                                   <option value="D/o" {{ $employee->relation_type == "D/o" ? "selected":"" }}>D/o</option>
                                                   <option value="R/o" {{ $employee->relation_type == "R/o" ? "selected":"" }}>R/o</option>

                                                 </select>
                                             </div>
                                             @error('relation_type')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                         <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                             <div class="form-label-group">
                                                 <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                                 <input type="text"  name="name_of_father" value="{{ $employee->name_of_father }}" class="form-control" placeholder="Father/SpouseName">
                                             </div>
                                             @error('name_of_father')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <!--Form row end -->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="dateofobirth"><span>Dob</span></label>
                                                 <input type="text" name="dob" value="{{ $employee->dob }}" class="form-control nominee-dob date">
                                             </div>
                                             @error('dob')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                             <div class="form-label-group">
                                                 <label for="age"><span>Age</span></label>
                                                 <input type="text"  class="form-control nominee-age" value="{{ $employee->age }}" name="age" placeholder="Age">
                                             </div>
                                             @error('age')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                             <div class="form-label-group gendertab">
                                                 <input type="radio" id="Male"  name="gender" value="male" {{ $employee->gender == "male" ? "checked":"checked" }}>&nbsp;&nbsp;Male&nbsp;&nbsp;                        
                                                 <input type="radio" id="Female" name="gender" value="female" {{ $employee->gender == "female" ? "checked":"" }}>&nbsp;&nbsp;Female&nbsp;&nbsp; 
                                                 <input type="radio" id="Transgender" name="gender"  value="transgender" {{ $employee->gender == "transgender" ? "checked":"" }}>&nbsp;&nbsp;Transgender
                                              
                                             </div>
                                             @error('gender')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <!-- Form end-->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="maritalstatus"><span>Marital Status</span></label>
                                                 <select id="maritalstatus" name="marital_status" class="form-control selectpicker">
                                                   <option  value="Single" {{ $employee->marital_status == "Single" ? "selected":"" }}>Single</option>
                                                   <option  value="Married" {{ $employee->marital_status == "Married" ? "selected":"" }}>Married</option>
                                                   <option  value="Widowed" {{ $employee->marital_status == "Widowed" ? "selected":"" }}>Widowed</option>
                                                   <option  value="Divorced" {{ $employee->marital_status == "Divorced" ? "selected":"" }}>Divorced</option>
                                                 </select>
                                             </div>
                                             @error('marital_status')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                  
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="referedby"><span>Qualification</span></label>
                                                 <input type="text" name="qualification"  value="{{ $employee->qualification }}" class="form-control" placeholder="Qualification">
                                             </div>
                                             @error('qualification')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                     </div>
                                     <!-- Form row end-->
                                     <div class="form-row">                                
                                         <!--Form row start -->

                                               <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                          <div class="form-label-group">
                                             <label for="employeecode"><span>Employee Code</span></label>
                                             <input type="text" name="employee_code"  value="{{ $employee->employee_code }}"  class="form-control" placeholder="Employee Code">
                                         </div>
                                         @error('employee_code')
                                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                      </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="roleid"><span>Role</span></label>
                                                 <select id="roleid" name="role_id" class="form-control ">
                                                 <option value="">Select Role</option>
                                                 @foreach ($roles as $role)
                                                  <option  value="{{$role->id}}" {{ $employee->role == $role->id ? "selected":"" }}>{{ $role->name }}</option>
                                                  @endforeach
                                                 </select>
                                             </div>
                                             @error('role_id')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         
                                    
                                     </div>
                                     <!--Form row end -->
                                        <div class="form-row">                                
                                         <!--Form row start -->
                                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                          <div class="form-label-group">
                                             <label for="referedby"><span>Designation / Department</span></label>
                                             <input type="text" name="designation"  value="{{ $employee->designation }}" class="form-control" placeholder="Designation / Department">
                                         </div>
                                         @error('designation')
                                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                      </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="dateofjoining"><span>DOJ</span></label>
                                                 <input type="text"  class="form-control date" name="doj" value="{{ $employee->doj }}">
                                             </div>
                                             @error('doj')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>                                      
                                     </div>
                                     <!--Form row end -->                                     
                               
                                      <div class="form-row">                                   

                                       <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                           <div class="form-label-group">
                                               <label for="occupation"><span>Document Type</span></label>
                                               <select class="form-control" name="document_id">
                                                <option value="">Document Type</option>
                                                @foreach ($document as $doc)
                                            <option value="{{ $doc->id }}" {{ $employee->document_id == $doc->id ? "selected":"" }}>{{ $doc->name }}</option>
                                                @endforeach
                                            </select>   </div>
                                           @error('document_id')
                                           <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                           </span>
                                          @enderror
                                       </div>
                                       <!--Form row start -->
                                       <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                           <div class="form-label-group">
                                               <label for="referedby"><span>Document Number</span></label>
                                               <input type="text" name="document_number"  value="{{ $employee->document_number }}" class="form-control" placeholder="Document Number">
                                           </div>
                                           @error('document_number')
                                           <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                           </span>
                                          @enderror
                                       </div>
                                       
                                   </div>
                                   <!--Form row end -->

                                         <div class="form-row">                                
                                         <!--Form row start -->
                                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                          <div class="form-label-group">
                                             <label for="salary"><span>Salary </span></label>
                                             <input type="text" name="salary"  value="{{ $employee->salary }}" class="form-control" placeholder="Salary">
                                         </div>
                                         @error('empcode')
                                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                      </div>                                      
                                     </div>
                                      <!-- Form row end-->
                                   
                                 </div>
                                 
                             </div>
                             <!--Card end -->

                         </div>
                         <!-- col-xl-6 end-->
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!--col-xl-6 start -->

                             <div class="card card-box">
                                 <!-- card start -->
                                 <div class="card-header">
                                     Address Details
                                 </div>
                                 <div class="card-body">
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>State</span></label>
                                                 <select  name="state" class="form-control nominee_state">
                                                  <option value="">State Name</option>
                                                  @foreach ($states as $state)
                                                  <option  value="{{$state->id}}" {{ $employee->state == $state->id ? "selected":"" }}>{{ $state->name }}</option>
                                                  @endforeach

                                                 </select>
                                             </div>
                                             @error('state')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>District</span></label>
                                                 <select name="district" class="form-control nominee_district">
                                                  <option value="">District</option>
                                                  @foreach ($cities as $city)
                                                  <option  value="{{$city->id}}" {{ $employee->district == $city->id ? "selected":"" }}>{{ $city->name }}</option>
                                                  @endforeach

                                                 </select>
                                             </div>
                                             @error('district')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>Taluk</span></label>
                                                 <select id="ptalukname" name="taluk" class="form-control nominee_taluk">
                                                  <option value="">Taluk Name</option>
                                                  @foreach ($taluks as $taluk)
                                                  <option  value="{{$taluk->id}}" {{ $employee->taluk == $taluk->id ? "selected":"" }}>{{ $taluk->name }}</option>
                                                  @endforeach
                                                 </select>
                                             </div>
                                             @error('taluk')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="pvillagename"><span>Village</span></label>
                                                 <select  name="village" class="form-control nominee_village">
                                                  <option value="">Village</option> 
   
                                                  @foreach ($villages as $village)
                                                  <option  value="{{$village->id}}" {{ $employee->village == $village->id ? "selected":"" }} >{{ $village->name }}</option>
                                                  @endforeach
                                                 </select>
                                             </div>
                                             @error('village')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                        
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="p_address"><span>Address</span></label>
                                                 <textarea  class="form-control" name="address" rows="2" value="{{ $employee->address }}"></textarea>
                                             </div>
                                             @error('address')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="ppincode"><span>Pin code</span></label>
                                                 <input type="text"  class="form-control" name="pincode" value="{{ $employee->pincode }}" placeholder="Pin code">
                                             </div>
                                             @error('pincode')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="mobileno"><span>Mobile No</span></label>
                                                 <input type="text"  name="mobile_no" value="{{ $employee->mobile_no }}" class="form-control" placeholder="Mobile No">
                                             </div>
                                             @error('mobile_no')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="phoneno"><span>Phone No</span></label>
                                                 <input type="text"  name="phone_no" value="{{ $employee->phone_no }}" class="form-control" placeholder="Phone No">
                                             </div>
                                             @error('phone_no')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="mailid"><span>Mail ID</span></label>
                                                 <input type="text"  name="mail_id" class="form-control" value="{{ $employee->mail_id }}" placeholder="Mail ID">
                                             </div>
                                             @error('mail_id')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                         </div>
                                     </div>
                                     <!-- Form row end-->
                                 </div>
                                 <!-- card end -->

                             </div>
                             <!--col-xl-6 end -->
                         </div>
                         <!-- Form row end-->
                     </div>
                     <div class="card card-box">
                        <div class="card-header">
                            Profile Image
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="form-row">
                               <!--Form start -->
                               <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                   <div class="profile-image">
                                       <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                   </div>
                                   <div class="profile-image-save" style="display: none">
                                       <img src="{{ asset('public/image/girl.svg') }}" class="profile" alt="profile photo">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                   <input type="hidden"  class="form-control profile" name="image" value="{{ $employee->image }}">
                                   <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()">Preview</button>
                                   <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                   <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                   <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                               </div>
                           </div>
                       </div>
                    </div>
                    {{-- <div class="card card-box">
                     <div class="card-header">
                       Documents Details
                       </div>
                           <div class="card-body">
                              <div class="form-row">
                                 <!-- Form row start -->
                                
                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-label-group">
                                       <label>Document Submitted Date</label>
                                      <div class="input-group mb-3">
                                     <input type="text" class="form-control date" placeholder="Date" name="document_date" >
                                     <div class="input-group-append">
                                       <button class="btn btn-success" type="button"><i class="far fa-calendar-alt"></i></button>
                                     </div>
                                   </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                  <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4" >
                                      <label for="retirementdate"><span></span></label>
                                      <input type="button" class="btn btn-success btn-block add-new-nominee-doc" value="Add new" style="margin-top:10px">
                                      </div>
                                 </div>
                                
                              </div>
                             <div id="doc-nominee-new">
                              <div class="row doc-close">
                                  <div class="col-12 col-sm-12 col-md-4  col-lg-4  col-xl-4 ">
                                      <div class="form-label-group">
                                          <label><span>Document Type</span></label>
                                          <select class="form-control" name="document_type[]">
                                              <option value="">Document Type</option>
                                              @foreach ($document as $doc)
                                          <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                      <div class="form-label-group">
                                          <label><span>Remarks</span></label>
                                          <input type="text" class="form-control"  name="remarks[]">
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                      <div class="form-label-group">
                                          <label><span>Document</span></label>
                                          <div class="custom-file">
                                              <input type="file" name="file[]" class="custom-file-input" multiple="multiple" accept="image/*,.doc,.docx,.pdf" >
                                              <label class="custom-file-label" >Choose file</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 35px;">
                                      <button class="btn btn-danger btn-sm deleteFile" type="button">Delete</button>
                                  </div>

                              </div>
                        </div>
                     </div>
                           
                             </div> --}}
                           
                     <!-- Form group end-->
                     
                     
            
                  <!-- Form group end-->
                  <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
                     <div class="form-row btntop">
                        <div class="col-md-2">
                           <input type="submit" class="btn btn-primary btn-block btn-blue">
                        </div>
                        <div class="col-md-2">
                           <a href="{{url()->previous()}}"  class="btn btn-block btn-dark">Cancel</a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
<script src="{{ asset('public/vendor/webcam/webcam.js') }}"></script>

<script type="text/javascript">
   $(document).ready(function() {
      

     $('.date').datepicker({
               todayHighlight: true, 
               format: 'yyyy-m-d',
               autoclose: true, 
           
     });
     
   
     

   
   

     $(".nominee-dob").datepicker().on('changeDate', function(e) {
        var age= calcAge($(this).val());
        $(".nominee-age").val(age);
       
    });
    

   function calcAge(dateString) {
   var birthday = +new Date(dateString);
   return~~ ((Date.now() - birthday) / (31557600000));
    }
   $(document).on("change",".nominee_state",function(){
     // alert($(this).val());
      let city=@json($cities); 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('.nominee_district').html("");
      $(".nominee_taluk").html("");
      $(".nominee_village").html("");
      $('.nominee_district').append($('<option>', { value : "" }).text("Select District"));
      $(".nominee_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $('.nominee_district').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".nominee_district",function(){
     // alert($(this).val());
      let taluk=@json($taluks); 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $(".nominee_taluk").html("");
      $(".nominee_village").html("");
      
      $(".nominee_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".nominee_taluk").append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".nominee_taluk",function(){
     // alert($(this).val());
      let village=@json($villages); 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $(".nominee_village").html("");
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".nominee_village").append($('<option>', { value : value.id }).text(value.name));
      });
    });


  
  


   
   });

 Webcam.set({
         width: 320,
         height: 240,
         image_format: 'png',
         jpeg_quality: 90
      });
      Webcam.attach( ".profile-image" );
   function preview_snapshot() {
         // freeze camera so user can preview pic
         Webcam.freeze();
         
         $(".preview").hide();
         $(".save").show();
         $(".cancel").show();
      }
      
      function cancel_preview() {
         // cancel preview freeze and return to live camera feed
         Webcam.unfreeze();
         
         $(".preview").show();
         $(".save").hide();
         $(".cancel").hide();
      }
      
      function save_photo() {
         // actually snap photo (from preview freeze) and display it
         Webcam.snap( function(data_uri) {
            // display results in page
            $('.profile-image').hide();
          $('.profile-image-save').html( 
               '<h2>Here is your image:</h2>' + 
               '<img src="'+data_uri+'"/>');
          console.log(data_uri);
            $("#profile").val(data_uri);
            $('.profile-image-save, .delete').show();
               $(".preview").hide();
               $(".save").hide();
               $(".cancel").hide();
         } );

      }
         function delete_preview() {
         // cancel preview freeze and return to live camera feed
          Webcam.unfreeze();
          $('.profile-image-save').hide();
          $('.profile-image').show();
         $('.preview').show();
         $('.save').hide();
         $('.cancel').hide();
         $('.delete').hide();
      }
      

   
</script>
@endsection