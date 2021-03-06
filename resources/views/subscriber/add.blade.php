@extends('layouts.main')
@section('title', 'Subscriber')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="{{ url('subscriber') }}"><span>Subscriber</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
         <li class="breadcrumb-item active">Add</li>
      </ul>
   </div>
</div>
@endsection
@section('content')
<div class="row">
   <div class="col-lg-12">
      <div class="widget-bg">
         <div class="card  ">
            <div class="card-body">
               <form method="post" action="{{ route('subscriber.store') }}" >
                  @csrf
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
                                 <div class="form-label-group">
                                    <label for="branchname"><span>Branch Name</span></label>
                                    <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
                                       <option value="">Select Branch</option>
                                       @foreach ($branches as $branch)
                                       <option  value="{{$branch->id}}" {{ old("branch_id") == $branch->id ? "selected":"" }}>{{$branch->branch_name .'('.$branch->unique_id.')'}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 @error('branch_id')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                                 <div class="row">
                                    <!-- row start -->
                                    <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                       <div class="form-label-group">
                                          <label for="salutationname"><span>Salutation</span></label>
                                          <select  id="salutationname" name="salutation_name"  class="form-control selectpicker" >
                                             <option  value="Mr" {{ old("salutation_name") == "Mr" ? "selected":"" }}>Mr</option>
                                             <option  value="Mrs" {{ old("salutation_name") == "Mrs" ? "selected":"" }}>Mrs</option>
                                             <option  value="Dr" {{ old("salutation_name") == "Dr" ? "selected":"" }}>Dr</option>
                                             <option  value="Prof" {{ old("salutation_name") == "Prof" ? "selected":"" }}>Prof</option>
                                             <option  value="Rev" {{ old("salutation_name") == "Rev" ? "selected":"" }}>Rev</option>
                                             <option  value="Other" {{ old("salutation_name") == "Other" ? "selected":"" }}>Other</option>
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
                                          <label for="subscribername"><span>Subscriber Name</span></label>
                                          <input type="text" id="subscribername" name="subscriber_name" value="{{ old('subscriber_name') }}" class="form-control" placeholder="Subscriber Name" >
                                       </div>
                                       @error('subscriber_name')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                       <div class="form-label-group">
                                          <label for="Initialname"><span>Initial</span></label>
                                          <input type="text" id="Initialname" name="Initial_name" value="{{ old('Initial_name') }}" class="form-control" placeholder="Initial" >
                                       </div>
                                       @error('Initial_name')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- row end -->
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group gardian">
                                          <input type="radio"  name="relation_type" value="father" {{ old("relation_type") == 'father' ? "checked":"checked" }} > &nbsp;&nbsp;Father Name &nbsp;&nbsp;
                                          <input type="radio"  name="relation_type" value="spouse" {{ old("relation_type") == 'spouse' ? "checked":"" }}>&nbsp;&nbsp;Spouse's Name &nbsp;&nbsp;
                                          <input type="radio"  name="relation_type" value="other" {{ old("relation_type") == 'spouse' ? "checked":"" }}>&nbsp;&nbsp;other
                                       </div>
                                       @error('relation_type')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- form row end -->
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">
                                       <div class="form-label-group">
                                          <label>Select</label>
                                          <select class="form-control" name="name_of_father">
                                             <option value="S/o" {{ old("name_of_father") == "S/o" ? "selected":"" }}>S/o</option>
                                             <option value="W/o" {{ old("name_of_father") == "W/o" ? "selected":"" }}>W/o</option>
                                             <option value="D/o" {{ old("name_of_father") == "D/o" ? "selected":"" }}>D/o</option>
                                             <option value="R/o" {{ old("name_of_father") == "R/o" ? "selected":"" }}>R/o</option>
                                             
                                          </select>
                                       </div>
                                       @error('name_of_father')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                       <div class="form-label-group">
                                          <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                          <input type="text" id="txtfatherorspouse" name="realtion_name" value="{{ old('realtion_name') }}" class="form-control" placeholder="Father/SpouseName" >
                                       </div>
                                       @error('realtion_name')
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
                                          <input type="text" id="dateofobirth" name="dob" value="{{ old('dob') }}" class="form-control dob date">
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
                                          <input type="text" id="age" class="form-control" value="{{ old('age') }}" name="age" placeholder="Age" >
                                       </div>
                                       @error('age')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                       <div class="form-label-group gendertab">
                                          <input type="radio" id="Male"  name="gender" value="male" {{ old("gender") == "male" ? "checked":"checked" }}>&nbsp;&nbsp;Male&nbsp;&nbsp;                        
                                          <input type="radio" id="Female" name="gender" value="female" {{ old("gender") == "female" ? "checked":"" }}>&nbsp;&nbsp;Female&nbsp;&nbsp; 
                                          <input type="radio" id="Transgender" name="gender"  value="transgender" {{ old("gender") == "transgender" ? "checked":"" }}>&nbsp;&nbsp;Transgender
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
                                          <select  id="maritalstatus" name="marital_status"  class="form-control selectpicker" >
                                             <option  value="Single" {{ old("marital_status") == "Single" ? "selected":"" }}>Single</option>
                                             <option  value="Married" {{ old("marital_status") == "Married" ? "selected":"" }}>Married</option>
                                             <option  value="Widowed" {{ old("marital_status") == "Widowed" ? "selected":"" }}>Widowed</option>
                                             <option  value="Divorced" {{ old("marital_status") == "Divorced" ? "selected":"" }}>Divorced</option>
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
                                          <label for="dateofjoining"><span>DOJ</span></label>
                                          <input type="text" id="dateofjoining" class="form-control date" name="doj" value="{{ old('doj') }}"  >
                                       </div>
                                       @error('doj')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- Form row end-->
                                 <div class="form-row">
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="referedby"><span>Collection Area</span></label>
                                          <select  id="collectionarea" name="collection_area" class="form-control selectpicker" >
                                             <option value="">Collection Area</option>
                                             @foreach ($areas as $area)
                                             <option  value="{{$area->id}}" {{ old("collection_area") == $area->id ? "selected":"" }}>{{$area->area_name .'('.$area->unique_id.')'}}</option>
                                             @endforeach
                                             
                                          </select>
                                       </div>
                                       @error('collection_area')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="occupation"><span>Occupation</span></label>
                                          <input type="text" id="occupation" class="form-control" name="occupation" value="{{ old('occupation') }}" placeholder="Occupation" >
                                       </div>
                                       @error('occupation')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!--Form row end --> 
                              </div>
                           </div>
                           <!--Card end -->
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 ID Proof
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="aadharno"><span>Aadhar No</span></label>
                                          <input type="text" id="aadharno" name="aadhar_no" value="{{ old('aadhar_no') }}" class="form-control" placeholder="Aadhar No" >
                                       </div>
                                       @error('aadhar_no')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12  col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="panno"><span>PAN No</span></label>
                                          <input type="text" id="panno" name="pan_no" value="{{ old('pan_no') }}" class="form-control" placeholder="PAN No" >
                                       </div>
                                       @error('pan_no')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rationcardno"><span>Ration Card No</span></label>
                                          <input type="text" id="rationcardno" name="rationcard_no" value="{{ old('rationcard_no') }}" class="form-control" placeholder="Ration Card No" >
                                       </div>
                                       @error('rationcard_no')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="drivinglicence"><span>Driving Licence</span></label>
                                          <input type="text" id="drivinglicence" name="driving_licence" value="{{ old('driving_licence') }}" class="form-control" placeholder="Driving Licence" >
                                       </div>
                                       @error('driving_licence')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="voterid"><span>Voter ID</span></label>
                                          <input type="text" id="voterid" name="voter_id" value="{{ old('voter_id') }}" class="form-control" placeholder="Ration Card No" >
                                       </div>
                                       @error('voter_id')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>GSTIN</span></label>
                                          <input type="text" id="gstin" name="gst_no" value="{{ old('gst_no') }}" class="form-control" placeholder="GSTIN" >
                                       </div>
                                       @error('gst_no')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!--Form row end -->
                              </div>
                           </div>
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Other Details
                              </div>
                              <div class="card-body pad-38">
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group gardian">
                                          <input type="radio" id="agentType" name="agent_Type" value="subscriber" {{ old("agent_Type") == "subscriber" ? "checked":"" }}">&nbsp;&nbsp;Subscriber &nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType1"  name="agent_Type" value="employee" {{ old("agent_Type") == "employee" ? "checked":"" }}">&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType2"  name="agent_Type" value="agent" {{ old("agent_Type") == "agent" ? "checked":"" }}>&nbsp;&nbsp;Business Agent&nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType3"  name="agent_Type" value="self_joining" {{ old("agent_Type") == "self_joining" ? "checked":"" }}>&nbsp;&nbsp;Self-Joining&nbsp;&nbsp;&nbsp;<br/>
                                          <input type="radio" id="agentType4"  name="agent_Type" value="others" {{ old("agent_Type") == "others" ? "checked":"" }}>&nbsp;&nbsp;Others
                                       </div>
                                       @error('agent_Type')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="referedby"><span>Name</span></label>
                                          <input type="text" id="referedby" name="refered_by" value="{{ old('refered_by') }}" class="form-control" placeholder="Name" >
                                       </div>
                                       @error('refered_by')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- Form row end-->
                                 <div class="form-row">
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="pfno"><span>Relationship</span></label>
                                          <select  id="relationship" name="relationship" class="form-control selectpicker" >
                                             <option value="">Relationship</option>
                                          
                                       @foreach ($relationships as $relationship)
                                       <option  value="{{$relationship->id}}" {{ old("relationship") == $relationship->id ? "selected":"" }}>{{$relationship->name }}</option>
                                       @endforeach
                                            
                                          </select>
                                       </div>
                                       @error('relationship')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="relationfor"><span>Relation for</span></label>
                                          <input type="text" id="relationfor" class="form-control" name="relation_for" value="{{ old('relation_for') }}" placeholder="Relation for" >
                                       </div>
                                       @error('relation_for')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!--Form row end -->
                                 <div class="form-row">
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="additionalnotes"><span>Additional Notes</span></label>
                                          <input type="text" id="additionalnotes" class="form-control" name="additional_notes" value="{{ old('additional_notes') }}" placeholder="Additional Notes">
                                       </div>
                                       @error('additional_notes')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!--Form row end -->
                              </div>
                           </div>
                        </div>
                        <!-- col-xl-6 end--> 
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <!--col-xl-6 start -->
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Profile Details
                              </div>
                              <div class="card-body">
                                 <br/>
                                 <div class="form-row">
                                    <!--Form start -->
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                       <div class="profile-image">
                                          <img src="{{ asset('public/image/girl.svg') }}" class="profile"  alt="profile photo">
                                       </div>
                                       <div class="profile-image-save"  style="display: none">
                                          <img src="{{ asset('public/image/girl.svg') }}" class="profile"  alt="profile photo">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                       <input type="hidden" id="profile" class="form-control" name="image" value="{{ old('image') }}">
   
                                      <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()" >Preview</button>
                                       <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                       <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                       <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                                    </div>
                                 </div>
                                 <!-- Form row end-->
                              </div>
                           </div>
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
                                          <select  id="pstatename" name="p_state" class="form-control state" >
                                             <option value="">State Name</option>
                                             @foreach ($states as $state)
                                             <option  value="{{$state->id}}" {{ old("p_state") == $state->id ? "selected":"" }}>{{ $state->name }}</option>
                                             @endforeach
                                    
                                          </select>
                                       </div>
                                       @error('p_state')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>District</span></label>
                                          <select  id="pdistrictname" name="p_district" class="form-control city">
                                             <option value="">District</option>
                                             @foreach ($cities as $city)
                                             <option  value="{{$city->id}}" {{ old("p_district") == $city->id ? "selected":"" }}>{{ $city->name }}</option>
                                             @endforeach
                                            
                                          </select>
                                       </div>
                                       @error('p_district')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>Taluk</span></label>
                                          <select  id="ptalukname" name="p_taluk" class="form-control taluk" >
                                             <option value="">Taluk Name</option>
                                             @foreach ($taluks as $taluk)
                                             <option  value="{{$taluk->id}}" {{ old("p_taluk") == $taluk->id ? "selected":"" }}>{{ $taluk->name }}</option>
                                             @endforeach
                                             
                                          </select>
                                       </div>
                                       @error('p_taluk')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="pvillagename"><span>Village</span></label>
                                          <select  id="pvillagename" name="p_village" class="form-control village">
                                             <option value="">Village</option> 
                                             
                                             @foreach ($villages as $village)
                                             <option  value="{{$village->id}}" {{ old("p_village") == $village->id ? "selected":"" }}>{{ $village->name }}</option>
                                             @endforeach

                                          </select>
                                       </div>
                                       @error('p_village')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="p_address"><span>Address</span></label>
                                          <textarea id="p_address" class="form-control" name="p_address"  >{{ old('p_address') }}</textarea>
                                       </div>
                                       @error('p_address')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="ppincode"><span>Pin code</span></label>
                                          <input type="text" id="ppincode" class="form-control" name="p_pincode" value="{{ old('p_pincode') }}" placeholder="Pin code" >
                                       </div>
                                       @error('p_pincode')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="mobileno"><span>Mobile No</span></label>
                                          <input type="text" id="mobileno" name="mobile_no" value="{{ old('mobile_no') }}" class="form-control" placeholder="Mobile No" >
                                       </div>
                                       @error('mobile_no')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="phoneno"><span>Phone No</span></label>
                                          <input type="text" id="phoneno" name="phone_no" value="{{ old('phone_no') }}"  class="form-control" placeholder="Phone No" >
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
                                          <input type="text" id="mailid" name="mail_id" class="form-control" value="{{ old('mail_id') }}" placeholder="Mail ID" >
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
                           </div>
                           <!-- card end -->
                           <div class="form-row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                 <div class="form-label-group">
                                    <input type="checkbox" id="sameaddress" name="sameaddress" ><em> if Communicate Address (Same as above).</em>
                                 </div>
                              </div>
                           </div>
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Communicate Address
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>State</span></label>
                                          <select  id="rstatename" name="c_state" class="form-control c-state" >
                                             <option value="">State Name</option>
                                             @foreach ($states as $state)
                                             <option  value="{{$state->id}}" {{ old("c_state") == $state->id ? "selected":"" }}>{{ $state->name }}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                       @error('c_state')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>District</span></label>
                                          <select  id="rdistrictname" name="c_district" class="form-control c-ctiy">
                                             <option value="">District</option>
                                             @foreach ($cities as $city)
                                             <option  value="{{$city->id}}" {{ old("c_district") == $city->id ? "selected":"" }}>{{ $city->name }}</option>
                                             @endforeach
                                             
                                          </select>
                                       </div>
                                       @error('c_district')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Taluk</span></label>
                                          <select  id="rtalukname" name="c_taluk" class="form-control c-taluk" >
                                             <option value="">Taluk Name</option>
                                             @foreach ($taluks as $taluk)
                                             <option  value="{{$taluk->id}}" {{ old("c_taluk") == $taluk->id ? "selected":"" }}>{{ $taluk->name }}</option>
                                             @endforeach
                                             
                                          </select>
                                       </div>
                                       @error('c_taluk')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>Village</span></label>
                                          <select  id="cvillage" name="c_village" class="form-control c-village">
                                             <option value="">Village</option>
                                             @foreach ($villages as $village)
                                             <option  value="{{$village->id}}" {{ old("c_village") == $village->id ? "selected":"" }}>{{ $village->name }}</option>
                                             @endforeach
               
                                          </select>
                                       </div>
                                       @error('p_district')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Address</span></label>
                                          <textarea id="rdoorno" class="form-control" name="c_address"  >{{ old('c_address') }}</textarea>
                                       </div>
                                       @error('c_address')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Pincode</span></label>
                                          <input type="text" id="rpincode" class="form-control" name="c_pincode" value="{{ old('c_pincode') }}" placeholder="Pin code" >
                                          <!-- <label for="rpincode"><span>Pin code</span></label> -->
                                       </div>
                                       @error('c_pincode')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- Form row end -->
                              </div>
                              <!-- card end -->
                           </div>
                           <div class="card card-box">
                              <div class="card-header">
                                 Income Details
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <!-- Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="occupation"><span>Source of funds</span></label>
                                          <select  id="sourceoffund" name="sourceof_fund" class="form-control selectpicker" >
                                             <option value="">Source of funds</option>
                                             @foreach ($sources as $source)
                                             <option  value="{{$source->id}}" {{ old("sourceof_fund") == $source->id ? "selected":"" }}>{{$source->name }}</option>
                                             @endforeach
                                             
                                          </select>
                                       </div>
                                       @error('sourceof_fund')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="monthlyincome"><span>Monthly Income</span></label>
                                          <input type="text" id="monthlyincome" class="form-control" name="monthly_income" value="{{ old('monthly_income') }}" placeholder="Monthly Income" >
                                       </div>
                                       @error('monthly_income')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="retirementdate"><span>Retirement Date</span></label>
                                          <input type="text" id="retirementdate" name="retirement_date" value="{{ old('retirement_date') }}" class="form-control date" placeholder="Retirement Date" >
                                       </div>
                                       @error('retirement_date')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="pfno"><span>PF No</span></label>
                                          <input type="text" id="pfno" class="form-control" value="{{ old('pf_no') }}" name="pf_no" placeholder="PF No" >
                                       </div>
                                       @error('pfno')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!--Form row end -->
                              </div>
                           </div>
                        </div>
                        <!--col-xl-6 end -->
                     </div>
                     <!-- Form row end-->
                  </div>
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
     
     $('#sameaddress').click(function() {
      
         if ($(this).is(':checked')) {
           var state=$("#pstatename").val();
           var city=$("#pdistrictname").val();
           var taluk=$("#ptalukname").val();
           var village=$("#pvillagename").val();
           var address=$("#p_address").val();
           var Pincode=$("#ppincode").val();

           $("#rstatename").val(state);
           $("#rdistrictname").val(city);
           $("#rtalukname").val(taluk);
           $("#cvillage").val(village);
           $("#rdoorno").val(address);
           $("#rpincode").val(Pincode);
          
           
         }
     });
     $(".dob").datepicker().on('changeDate', function(e) {
        var age= calcAge($(this).val());
        $("#age").val(age);
       
    });
    

   function calcAge(dateString) {
   var birthday = +new Date(dateString);
   return~~ ((Date.now() - birthday) / (31557600000));
    }
   $(document).on("change",".state",function(){
     // alert($(this).val());
      let city=@json($cities); 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('#pdistrictname').html("");
      $("#ptalukname").html("");
      $("#pvillagename").html("");
      $('#pdistrictname').append($('<option>', { value : "" }).text("Select District"));
      $('#ptalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#pdistrictname').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".city",function(){
     // alert($(this).val());
      let taluk=@json($taluks); 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $("#ptalukname").html("");
      $("#pvillagename").html("");
      
      $('#ptalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#ptalukname').append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".taluk",function(){
     // alert($(this).val());
      let village=@json($villages); 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $("#pvillagename").html("");
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#pvillagename').append($('<option>', { value : value.id }).text(value.name));
      });

   });


//comunication addresss

   $(document).on("change",".c-state",function(){
     // alert($(this).val());
      let city=@json($cities); 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result); 
           

      $('#rdistrictname').html("");
      $("#rtalukname").html("");
      $("#cvillage").html("");
      $('#rdistrictname').append($('<option>', { value : "" }).text("Select District"));
      $('#rtalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#rdistrictname').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".c-ctiy",function(){
     // alert($(this).val());
      let taluk=@json($taluks); 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $("#rtalukname").html("");
      $("#cvillage").html("");
      
      $('#rtalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#rtalukname').append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".c-taluk",function(){
     // alert($(this).val());
      let village=@json($villages); 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $("#cvillage").html("");
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#cvillage').append($('<option>', { value : value.id }).text(value.name));
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