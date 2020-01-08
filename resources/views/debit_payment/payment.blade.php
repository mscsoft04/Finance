@extends('layouts.main')
@section('title', 'Payment')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('ledger') }}"><span>Payment</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
<!--                         <li class="breadcrumb-item active">Edit</li>
 -->                    </ul>
                </div>
            </div>
@endsection

@section('content')
<div class="alert alert-danger print-error-msg" style="display:none">
    <ul></ul>
</div>
<div class="row">
   <div class="col-lg-12">
       <div class="widget-bg">
           <div class="card  ">
               <div class="card-body">
                   <div class="row">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                               <div class="card card-box">
                                   <!-- card start -->
                                   <div class="card-header">
                                       Acution Payment
                                   </div>
                                   <div class="card-body address-tab">
                                       <div class="form-row btntop">
                                           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tab-panel-tab">
                                               <ul class="nav nav-tabs" role="tablist">
                                                   <li class="nav-item">
                                                       <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Document</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Nominee</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Guarantor/Surety</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Payment</a>
                                                   </li>
                                               </ul>
                                               <!-- Tab panes -->
                                               <div class="tab-content">
                                                   <div class="tab-pane active" id="tabs-1" role="tabpanel">

                                                       <div class="card card-box">
                                                           <div class="card-header">
                                                               Documents Details
                                                           </div>
                                                           <form method="POST" id="documentData"  enctype="multipart/form-data" >
                                                            @csrf
                                                           <div class="card-body">
                                                               <div class="form-row">
                                                                   <!-- Form row start -->

                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       <div class="form-label-group">
                                                                           <label>Document Submitted Date</label>
                                                                           <div class="input-group mb-3">
                                                                               <input type="text" class="form-control date" placeholder="date" name="document_date" >
                                                                               <div class="input-group-append">
                                                                                   <button class="btn btn-success" type="button"><i class="far fa-calendar-alt"></i></button>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       {{-- <div class="form-label-group">
                                                                           <label for="retirementdate"><span>No.of Documents</span></label>
                                                                           <input type="number"  name="no_of_doc" value="1" pattern="[0-9]*" class="form-control doc-count" max="10"  placeholder="No.of Documents">
                                                                       </div> --}}
                                                                       <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4" >
                                                                        <label for="retirementdate"><span></span></label>
                                                                        <input type="button" class="btn btn-success btn-block add-new-doc" value="Add new" style="margin-top:10px">
                                                                        </div>
                                                                   </div>
                                                                   
                                                               </div>
                                                               <div id="doc-new">
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
                                                           <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                                <div class="form-row btntop">
                                                                    <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                        <input type="submit" class="btn btn-primary btn-block btn-blue document-save" value="Save">
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                        <a href="{{url()->previous()}}" class="btn btn-block btn-dark">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </form>
                                                      
                                                       <div class="row btntop">
                                                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        <table class="table">
                                                         <thead class="thead-light">
                                                           <tr>
                                                             <th scope="col">#</th>
                                                             <th scope="col">Document Type</th>
                                                             <th scope="col">Document</th>
                                                             <th scope="col">Remarks</th>
                                                             <th scope="col">Status</th>
                                                             <th scope="col">Action</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                            @foreach ($auction_doc as $auc)
                                                           <tr>
                                                           <th scope="row">{{ $loop->iteration }}</th>
                                                             <td>{{ $auc->name }}</td>
                                                           <td><a href="{{ url($auc->document) }}" target="_blank"><i class="fas fa-file" aria-hidden="true"></i></a></td>
                                                             <td>{{ $auc->remarks }}</td>
                                                             <td>
                                                                <span class="badge badge-info">Save</span> 

                                                            </td>
                                                             <td>
                                                                 
                                                            </td>
                                                           </tr>
                                                           @endforeach
                                                         </tbody>
                                                       </table>
                                                     </div>
                                                    </div>
                                                </div>
                                                   </div>
                                                   <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                    @if (count($nominees) === 0)
                                                    <form method="POST" id="nomineeData"  enctype="multipart/form-data" >
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
                                                                               <div class="row">
                                                                                   <!-- row start -->
                                                                                   <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="salutationname"><span>Salutation</span></label>
                                                                                           <select name="salutation_name" class="form-control">
                                                                                               <option value="Mr">Mr</option>
                                                                                               <option value="Mrs">Mrs</option>
                                                                                               <option value="Dr">Dr</option>
                                                                                               <option value="Prof">Prof</option>
                                                                                               <option value="Rev">Rev</option>
                                                                                               <option value="Other">Other</option>
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="subscribername"><span>Nominee Name</span></label>
                                                                                           <input type="text"  name="nominee_name" value="" class="form-control" placeholder="Nominee Name">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="Initialname"><span>Initial</span></label>
                                                                                           <input type="text"  name="Initial_name" value="" class="form-control" placeholder="Initial">
                                                                                       </div>
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
                                                                                               <option value="S/o">S/o</option>
                                                                                               <option value="W/o">W/o</option>
                                                                                               <option value="D/o">D/o</option>
                                                                                               <option value="R/o">R/o</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                                                                       <div class="form-label-group">
                                                                                           <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                                                                           <input type="text"  name="name_of_father" value="" class="form-control" placeholder="Father/SpouseName">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!--Form row end -->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start-->
                                                                                   <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="dateofobirth"><span>Dob</span></label>
                                                                                           <input type="text" name="dob" value="" class="form-control nominee-dob date">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                                                                       <div class="form-label-group">
                                                                                           <label for="age"><span>Age</span></label>
                                                                                           <input type="text"  class="form-control nominee-age" value="" name="age" placeholder="Age">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                                                                       <div class="form-label-group gendertab">
                                                                                           <input type="radio"  name="gender" value="male" checked="">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                                                                           <input type="radio"  name="gender" value="female">&nbsp;&nbsp;Female&nbsp;&nbsp;
                                                                                           <input type="radio"  name="gender" value="transgender">&nbsp;&nbsp;Transgender
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form end-->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start-->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="maritalstatus"><span>Marital Status</span></label>
                                                                                           <select id="maritalstatus" name="marital_status" class="form-control selectpicker">
                                                                                               <option value="Single">Single</option>
                                                                                               <option value="Married">Married</option>
                                                                                               <option value="Widowed">Widowed</option>
                                                                                               <option value="Divorced">Divorced</option>
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="dateofjoining"><span>DOJ</span></label>
                                                                                           <input type="text"  class="form-control date" name="doj" value="">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">

                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Occupation</span></label>
                                                                                           <input type="text"  class="form-control" name="occupation" value="" placeholder="Occupation">
                                                                                       </div>
                                                                                   </div>
                                                                                   <!--Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Designation / Department</span></label>
                                                                                           <input type="text" name="designation"  class="form-control" placeholder="Designation / Department">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Relation Type</span></label>
                                                                                           <select name="relationship" class="form-control">
                                                                                            @foreach ($relationships as $relationship)
                                                                                            <option  value="{{$relationship->id}}" {{ old("relationship") == $relationship->id ? "selected":"" }}>{{$relationship->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!--Form row end -->
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
                                                                                            <option  value="{{$state->id}}" >{{ $state->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>District</span></label>
                                                                                           <select name="district" class="form-control nominee_district">
                                                                                            <option value="">District</option>
                                                                                            @foreach ($cities as $city)
                                                                                            <option  value="{{$city->id}}" >{{ $city->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>Taluk</span></label>
                                                                                           <select id="ptalukname" name="taluk" class="form-control nominee_taluk">
                                                                                            <option value="">Taluk Name</option>
                                                                                            @foreach ($taluks as $taluk)
                                                                                            <option  value="{{$taluk->id}}" >{{ $taluk->name }}</option>
                                                                                            @endforeach
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="pvillagename"><span>Village</span></label>
                                                                                           <select  name="village" class="form-control nominee_village">
                                                                                            <option value="">Village</option> 
                                             
                                                                                            @foreach ($villages as $village)
                                                                                            <option  value="{{$village->id}}" >{{ $village->name }}</option>
                                                                                            @endforeach
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                  
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="p_address"><span>Address</span></label>
                                                                                           <textarea  class="form-control" name="address" rows="2"></textarea>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="ppincode"><span>Pin code</span></label>
                                                                                           <input type="text"  class="form-control" name="pincode" value="" placeholder="Pin code">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mobileno"><span>Mobile No</span></label>
                                                                                           <input type="text"  name="mobile_no" value="" class="form-control" placeholder="Mobile No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="phoneno"><span>Phone No</span></label>
                                                                                           <input type="text"  name="phone_no" value="" class="form-control" placeholder="Phone No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mailid"><span>Mail ID</span></label>
                                                                                           <input type="text"  name="mail_id" class="form-control" value="" placeholder="Mail ID">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Source of funds</span></label>
                                                                                           <select  name="sourceof_fund" class="form-control selectpicker">
                                                                                            <option value="">Source of funds</option>
                                                                                            @foreach ($sources as $source)
                                                                                            <option  value="{{$source->id}}">{{$source->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="monthlyincome"><span>Monthly Income</span></label>
                                                                                           <input type="text"  class="form-control" name="monthly_income" value="" placeholder="Monthly Income">
                                                                                       </div>
                                                                                   </div>
                                                                                   <input type="hidden" name="subscriber_id" value="{{ $auctionData->subscriber_id }}">
                                                                               </div>
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
                                                                             <div class="nominee-profile-image">
                                                                                 <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                                                             </div>
                                                                             <div class="nominee_profile-image-save" style="display: none">
                                                                                 <img src="{{ asset('public/image/girl.svg') }}" class="profile" alt="profile photo">
                                                                             </div>
                                                                         </div>
                                                                         <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                             <input type="hidden"  class="form-control nominee-profile" name="image" value="{{ old('image') }}">
                                                                             <button class="btn btn-warning preview" type="button" onClick="nominee_preview_snapshot()">Preview</button>
                                                                             <button class="btn btn-primary save" type="button" onClick="nominee_save_photo()" style="display: none">Save</button>
                                                                             <button class="btn btn-default cancel" type="button" onClick="nominee_cancel_preview()" style="display: none">Cancel</button>
                                                                             <button class="btn btn-danger delete" type="button" onClick="nominee_delete_preview()" style="display: none">Delete</button>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                              <div class="card card-box">
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
                                                                     
                                                                       </div>
                                                                     
                                                               <!-- Form group end-->
                                                               
                                                               <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
                                                                   <div class="form-row btntop">
                                                                       <div class="col-md-2">
                                                                           <input type="submit" class="btn btn-primary btn-block btn-blue nominee-save">
                                                                       </div>
                                                                       <div class="col-md-2">
                                                                           <a href="{{url()->previous()}}" class="btn btn-block btn-dark">Cancel</a>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                       </form>

                                                       </div>
                                                       @else
                                                       <table class=" table table-bordered">
                                                        <tbody>
                                                           <tr>
                                                              <th colspan="4"><img src="http://localhost:8000/public/image/girl.svg" style="width: 100px;"></th>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Name </th>
                                                           <td>{{ $nominees[0]->salutation_name.'.'.$nominees[0]->nominee_name.' '.$nominees[0]->Initial_name}}</td>
                                                              <th scope="row">Occupation</th>
                                                              <td>{{ $nominees[0]->occupation }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Father Name</th>
                                                              <td>{{ $nominees[0]->relation_type.' '.$nominees[0]->name_of_father }}</td>
                                                              <th scope="row">Realtion Name</th>
                                                              <td>{{ $nominees[0]->relationShip_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Date Of Birth</th>
                                                              <td>{{ $nominees[0]->dob }}</td>
                                                              <th scope="row">Age</th>
                                                              <td>{{ $nominees[0]->age }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Gender</th>
                                                              <td>{{ $nominees[0]->gender }}</td>
                                                              <th scope="row">Marital Status</th>
                                                              <td>{{ $nominees[0]->marital_status }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Date Of Joing</th>
                                                              <td>{{ $nominees[0]->doj }}</td>
                                                              <th scope="row">Email</th>
                                                              <td>{{ $nominees[0]->mail_id }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Mobile Number</th>
                                                              <td>{{ $nominees[0]->mobile_no }}</td>
                                                              <th scope="row">Phone Number</th>
                                                              <td>{{ $nominees[0]->phone_no }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row" rowspan="6">Permanent Address</th>
                                                              <th scope="row">ADDRESS</th>
                                                              <td colspan="2">{{ $nominees[0]->address }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">State</th>
                                                              <td colspan="2">{{ $nominees[0]->state_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">District</th>
                                                              <td colspan="2">{{ $nominees[0]->city_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Taluk</th>
                                                              <td colspan="2">{{ $nominees[0]->taluk_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Village</th>
                                                              <td colspan="2">{{ $nominees[0]->village_name }}</td>
                                                           </tr>
                                                           <tr>
                                                            <th scope="row">Pincode</th>
                                                            <td colspan="2">{{ $nominees[0]->pincode }}</td>
                                                         </tr>
                                                          
                                                           <tr>
                                                              <th scope="row">Designation</th>
                                                              <td>{{ $nominees[0]->designation }}</td>
                                                              <th scope="row">Monthly Income</th>
                                                              <td>{{ $nominees[0]->monthly_income }}</td>
                                                           </tr>
                                                           <tr>
                                                            <th scope="row">Source Of Funds</th>
                                                            <td colspan="2">{{ $nominees[0]->sourceof_fund }}</td>
                                                            
                                                         </tr>
                                                          
                                                        </tbody>
                                                     </table>
                                                     <table class="table">
                                                        <thead class="thead-light">
                                                           <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Document Type</th>
                                                              <th scope="col">Document</th>
                                                              <th scope="col">Remarks</th>
                                                              <th scope="col">Status</th>
                                                              <th scope="col">Action</th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($nominees as $nominee)
                                                            <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                              <td>{{ $nominee->name }}</td>
                                                            <td><a href="{{ url($nominee->document) }}" target="_blank"><i class="fas fa-file" aria-hidden="true"></i></a></td>
                                                              <td>{{ $nominee->remarks }}</td>
                                                              <td>
                                                                 <span class="badge badge-info">Save</span> 
 
                                                             </td>
                                                              <td>
                                                                  
                                                             </td>
                                                            </tr>
                                                            @endforeach
                                                          
                                                          
                                                        </tbody>
                                                     </table>
                                                     @endif
                                                   </div>

                                                   <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                    <div class="guarantor-add" style="display:none">
                                                    <form method="POST" id="guarantorData"  enctype="multipart/form-data" >
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
                                                                               <div class="row">
                                                                                   <!-- row start -->
                                                                                   <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="salutationname"><span>Salutation</span></label>
                                                                                           <select name="salutation_name" class="form-control">
                                                                                               <option value="Mr">Mr</option>
                                                                                               <option value="Mrs">Mrs</option>
                                                                                               <option value="Dr">Dr</option>
                                                                                               <option value="Prof">Prof</option>
                                                                                               <option value="Rev">Rev</option>
                                                                                               <option value="Other">Other</option>
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="subscribername"><span>Guarantor Name</span></label>
                                                                                           <input type="text"  name="guarantor_name" value="" class="form-control" placeholder="Guarantor Name">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="Initialname"><span>Initial</span></label>
                                                                                           <input type="text"  name="Initial_name" value="" class="form-control" placeholder="Initial">
                                                                                       </div>
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
                                                                                               <option value="S/o">S/o</option>
                                                                                               <option value="W/o">W/o</option>
                                                                                               <option value="D/o">D/o</option>
                                                                                               <option value="R/o">R/o</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                                                                       <div class="form-label-group">
                                                                                           <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                                                                           <input type="text"  name="name_of_father" value="" class="form-control" placeholder="Father/SpouseName">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!--Form row end -->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start-->
                                                                                   <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="dateofobirth"><span>Dob</span></label>
                                                                                           <input type="text" name="dob" value="" class="form-control nominee-dob date">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                                                                       <div class="form-label-group">
                                                                                           <label for="age"><span>Age</span></label>
                                                                                           <input type="text"  class="form-control nominee-age" value="" name="age" placeholder="Age">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                                                                       <div class="form-label-group gendertab">
                                                                                           <input type="radio"  name="gender" value="male" checked="">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                                                                           <input type="radio"  name="gender" value="female">&nbsp;&nbsp;Female&nbsp;&nbsp;
                                                                                           <input type="radio"  name="gender" value="transgender">&nbsp;&nbsp;Transgender
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form end-->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start-->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="maritalstatus"><span>Marital Status</span></label>
                                                                                           <select id="maritalstatus" name="marital_status" class="form-control selectpicker">
                                                                                               <option value="Single">Single</option>
                                                                                               <option value="Married">Married</option>
                                                                                               <option value="Widowed">Widowed</option>
                                                                                               <option value="Divorced">Divorced</option>
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="dateofjoining"><span>DOJ</span></label>
                                                                                           <input type="text"  class="form-control date" name="doj" value="">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">

                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Occupation</span></label>
                                                                                           <input type="text"  class="form-control" name="occupation" value="" placeholder="Occupation">
                                                                                       </div>
                                                                                   </div>
                                                                                   <!--Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Designation / Department</span></label>
                                                                                           <input type="text" name="designation"  class="form-control" placeholder="Designation / Department">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Relation Type</span></label>
                                                                                           <select name="relationship" class="form-control">
                                                                                            @foreach ($relationships as $relationship)
                                                                                            <option  value="{{$relationship->id}}" {{ old("relationship") == $relationship->id ? "selected":"" }}>{{$relationship->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!--Form row end -->
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
                                                                                           <select  name="state" class="form-control guarantor_state">
                                                                                            <option value="">State Name</option>
                                                                                            @foreach ($states as $state)
                                                                                            <option  value="{{$state->id}}" >{{ $state->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>District</span></label>
                                                                                           <select name="district" class="form-control guarantor_district">
                                                                                            <option value="">District</option>
                                                                                            @foreach ($cities as $city)
                                                                                            <option  value="{{$city->id}}" >{{ $city->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>Taluk</span></label>
                                                                                           <select id="ptalukname" name="taluk" class="form-control guarantor_taluk">
                                                                                            <option value="">Taluk Name</option>
                                                                                            @foreach ($taluks as $taluk)
                                                                                            <option  value="{{$taluk->id}}" >{{ $taluk->name }}</option>
                                                                                            @endforeach
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="pvillagename"><span>Village</span></label>
                                                                                           <select  name="village" class="form-control guarantor_village">
                                                                                            <option value="">Village</option> 
                                             
                                                                                            @foreach ($villages as $village)
                                                                                            <option  value="{{$village->id}}" >{{ $village->name }}</option>
                                                                                            @endforeach
                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                  
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="p_address"><span>Address</span></label>
                                                                                           <textarea  class="form-control" name="address" rows="2"></textarea>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="ppincode"><span>Pin code</span></label>
                                                                                           <input type="text"  class="form-control" name="pincode" value="" placeholder="Pin code">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mobileno"><span>Mobile No</span></label>
                                                                                           <input type="text"  name="mobile_no" value="" class="form-control" placeholder="Mobile No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="phoneno"><span>Phone No</span></label>
                                                                                           <input type="text"  name="phone_no" value="" class="form-control" placeholder="Phone No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mailid"><span>Mail ID</span></label>
                                                                                           <input type="text"  name="mail_id" class="form-control" value="" placeholder="Mail ID">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Source of funds</span></label>
                                                                                           <select  name="sourceof_fund" class="form-control selectpicker">
                                                                                            <option value="">Source of funds</option>
                                                                                            @foreach ($sources as $source)
                                                                                            <option  value="{{$source->id}}">{{$source->name }}</option>
                                                                                            @endforeach

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="monthlyincome"><span>Monthly Income</span></label>
                                                                                           <input type="text"  class="form-control" name="monthly_income" value="" placeholder="Monthly Income">
                                                                                       </div>
                                                                                   </div>
                                                                                   <input type="hidden" name="auction_id" value="{{ $auction }}">
                                                                               </div>
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
                                                                             <div class="guarantor-profile-image">
                                                                                 <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                                                             </div>
                                                                             <div class="guarantor_profile-image-save" style="display: none">
                                                                                 <img src="{{ asset('public/image/girl.svg') }}" class="profile" alt="profile photo">
                                                                             </div>
                                                                         </div>
                                                                         <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                             <input type="hidden"  class="form-control guarantor-profile" name="image" value="{{ old('image') }}">
                                                                             <button class="btn btn-warning preview" type="button" onClick="guarantor_preview_snapshot()">Preview</button>
                                                                             <button class="btn btn-primary save" type="button" onClick="guarantor_save_photo()" style="display: none">Save</button>
                                                                             <button class="btn btn-default cancel" type="button" onClick="guarantor_cancel_preview()" style="display: none">Cancel</button>
                                                                             <button class="btn btn-danger delete" type="button" onClick="guarantor_delete_preview()" style="display: none">Delete</button>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                              <div class="card card-box">
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
                                                                                <input type="button" class="btn btn-success btn-block add-new-guarantor-doc" value="Add new" style="margin-top:10px">
                                                                                </div>
                                                                           </div>
                                                                          
                                                                        </div>
                                                                       <div id="doc-guarantor-new">
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
                                                                     
                                                                       </div>
                                                                     
                                                               <!-- Form group end-->
                                                               
                                                               <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
                                                                   <div class="form-row btntop">
                                                                       <div class="col-md-2">
                                                                           <input type="submit" class="btn btn-primary btn-block btn-blue guarantor-Surety">
                                                                       </div>
                                                                       <div class="col-md-2">
                                                                           <a href="javascript:void(0)" class="btn btn-block btn-dark guarantor-cancel">Cancel</a>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                       </form>
                                                    </div>
                                                       </div>
                                                       <div class="col-md-2 col-2 col-sm-2 col-lg-2 col-xl-2" style="float: right;padding-bottom: 5px;" >
                                            
                                                        <input type="button" class="btn btn-success btn-block btn-fl-r addGuarantor" value="Add new" style="margin-top:10px">
                                                        </div>
                                                        @foreach ($guarantors as $guarantor)
                                                      <table class=" table table-bordered">
                                                        <tbody>
                                                           <tr>
                                                              <th colspan="4"><img src="http://localhost:8000/public/image/girl.svg" style="width: 100px;"></th>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Name </th>
                                                           <td>{{ $guarantor[0]->salutation_name.'.'.$guarantor[0]->nominee_name.' '.$guarantor[0]->Initial_name}}</td>
                                                              <th scope="row">Occupation</th>
                                                              <td>{{ $guarantor[0]->occupation }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Father Name</th>
                                                              <td>{{ $guarantor[0]->relation_type.' '.$guarantor[0]->name_of_father }}</td>
                                                              <th scope="row">Realtion Name</th>
                                                              <td>{{ $guarantor[0]->relationShip_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Date Of Birth</th>
                                                              <td>{{ $guarantor[0]->dob }}</td>
                                                              <th scope="row">Age</th>
                                                              <td>{{ $guarantor[0]->age }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Gender</th>
                                                              <td>{{ $guarantor[0]->gender }}</td>
                                                              <th scope="row">Marital Status</th>
                                                              <td>{{ $guarantor[0]->marital_status }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Date Of Joing</th>
                                                              <td>{{ $guarantor[0]->doj }}</td>
                                                              <th scope="row">Email</th>
                                                              <td>{{ $guarantor[0]->mail_id }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Mobile Number</th>
                                                              <td>{{ $guarantor[0]->mobile_no }}</td>
                                                              <th scope="row">Phone Number</th>
                                                              <td>{{ $guarantor[0]->phone_no }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row" rowspan="6">Permanent Address</th>
                                                              <th scope="row">ADDRESS</th>
                                                              <td colspan="2">{{ $guarantor[0]->address }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">State</th>
                                                              <td colspan="2">{{ $guarantor[0]->state_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">District</th>
                                                              <td colspan="2">{{ $guarantor[0]->city_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Taluk</th>
                                                              <td colspan="2">{{ $guarantor[0]->taluk_name }}</td>
                                                           </tr>
                                                           <tr>
                                                              <th scope="row">Village</th>
                                                              <td colspan="2">{{ $guarantor[0]->village_name }}</td>
                                                           </tr>
                                                           <tr>
                                                            <th scope="row">Pincode</th>
                                                            <td colspan="2">{{ $guarantor[0]->pincode }}</td>
                                                         </tr>
                                                          
                                                           <tr>
                                                              <th scope="row">Designation</th>
                                                              <td>{{ $guarantor[0]->designation }}</td>
                                                              <th scope="row">Monthly Income</th>
                                                              <td>{{ $guarantor[0]->monthly_income }}</td>
                                                           </tr>
                                                           <tr>
                                                            <th scope="row">Source Of Funds</th>
                                                            <td colspan="3">{{ $nominees[0]->funds }}</td>
                                                            
                                                         </tr>
                                                          
                                                        </tbody>
                                                     </table> 

                                                     <table class="table">
                                                        <thead class="thead-light">
                                                           <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Document Type</th>
                                                              <th scope="col">Document</th>
                                                              <th scope="col">Remarks</th>
                                                              <th scope="col">Status</th>
                                                              <th scope="col">Action</th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($guarantor as $row)
                                                            
                                                            @if ($row['docId'])
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                              <td>{{ $row['name'] }}</td>
                                                              @if ($row['document'])
                                                            <td><a href="{{ url($row['document']) }}" target="_blank"><i class="fas fa-file" aria-hidden="true"></i></a></td>
                                                            @endif
                                                            <td>{{ $row['remarks'] }}</td>
                                                              <td>
                                                                 <span class="badge badge-info">Save</span> 
 
                                                             </td>
                                                              <td>
                                                                  
                                                             </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                          
                                                          
                                                        </tbody>
                                                     </table>
                                                     @endforeach
                                                  </div>
                                                   <div class="tab-pane" id="tabs-3" role="tabpanel">
                                                       <div class="card card-box">
                                                           <!-- card start -->
                                                           <div class="card-header">
                                                               Payment Details
                                                           </div>
                                                           <div class="card-body">
                                                               <div class="row">
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label>Payment Date</label>
                                                                       <div class="input-group mb-3">
                                                                      <input type="text" class="form-control date" placeholder="Date" name="payment_date" >
                                                                      <div class="input-group-append">
                                                                        <button class="btn btn-success" type="button"><i class="far fa-calendar-alt"></i></button>
                                                                      </div>
                                                                    </div>
                                                                     </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       <div class="form-label-group">
                                                                           <label><span>Pay type</span></label>
                                                                           <select class="form-control pay-type" name="payment_type">
                                                                            <option selected="selected" value="cash">Cash</option>
                                                                            <option value="cheque">Cheque</option>
                                                                         </select>
                                                                        
                                                                        </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Bank Name<span class="text-danger">*</span></label>
                                                                    <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="Bank Name" readonly>
                                                                 </div>
                                                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Cheque Number<span class="text-danger">*</span></label>
                                                                    <input type="text" name="cheque_number" class="form-control" id="cheque_number" placeholder="Cheque Number" readonly>
                                                                 </div>
                                                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Cheque Date <span class="text-danger">*</span></label>
                                                                    <div class="input-group mb-3">
                                                                       <input type="text" class="form-control" placeholder="Cheque Date" name="cheque_date" id="ChequeDate" disabled>
                                                                       <div class="input-group-append">
                                                                          <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       <div class="form-label-group">
                                                                           <label><span>Amount</span></label>
                                                                           <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount">
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       <div class="form-label-group">
                                                                           <label><span>Payable Amount</span></label>
                                                                           <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label><span>Due Amount</span></label>
                                                                        <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label><span>GST Amount</span></label>
                                                                        <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label><span>Processing Amount</span></label>
                                                                        <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label><span>Other Amount</span></label>
                                                                        <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                        <label><span>Pay Amount</span></label>
                                                                        <input type="text" class="form-control" name="pay-amount" id="pay-amount" placeholder="Pay Amount">
                                                                    </div>
                                                                </div>
                                                                
                                                                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                       <div class="form-label-group">
                                                                           <label><span>Remarks</span></label>
                                                                           <textarea class="form-control" name="remarks" id="remarks" placeholder="Remarks" rows="5"></textarea>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                               <div class="form-row btntop">
                                                                   <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                       <input type="submit" class="btn btn-primary btn-block btn-blue" value="Save">
                                                                   </div>
                                                                   <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                       <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Card end -->
                               </div>
                               <!-- col-mg-6 end-->
                       </div>
                       <!--Row End -->
                   </div>
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

var myvar =  $("#doc-new").html();
   // console.log(myvar);
$(".guarantor-add").hide();

$(document).on("click", ".add-new-doc", function() {
   $("#doc-new").append(myvar);
});
$(document).on("click", ".add-new-nominee-doc", function() {
   $("#doc-nominee-new").append(myvar);
});
$(document).on("click", ".add-new-guarantor-doc", function() {
   $("#doc-guarantor-new").append(myvar);
});

$(document).on("click", ".deleteFile", function() {
   $(this).closest('.row').remove();
});

$(document).on("click", ".addGuarantor", function() {
    $(".guarantor-add").show();
   
});
$(document).on("click", ".guarantor-cancel", function() {
    $(".guarantor-add").hide();
   
});

$('.date').datepicker({
    autoclose: true,
    todayHighlight: true,
});
if(window.location.hash != "") {
      $('a[href="' + window.location.hash + '"]').click()
}
$(document).on('click', '.document-save', function(documentSave){    
    documentSave.preventDefault();
    var formData = $('#documentData')[0];
    var documentData = new FormData(formData);
    var show_url="{{ route('auctionDocument.auction.store',["auction"=>$auction]) }}";
          $.ajax({
              type: "POST",
              enctype: 'multipart/form-data',
              url: show_url,
              data: documentData,
              processData: false,
              contentType: false,
              cache: false,
              dataType: "json",
                success: function( data, textStatus, jQxhr ){

                    toastr.success(data.message, data.title);
                    removeLocationHash();
                    window.location.href += "#tabs-2";
                    location.reload();
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    printErrorMsg( jqXhr.responseJSON.errors );
                }
            });

  });
  $(document).on('click', '.nominee-save', function(nomineeSave){    
    nomineeSave.preventDefault();
    var formData = $('#nomineeData')[0];
    var nomineeData = new FormData(formData);
    var show_url="{{ route('nomineeDetails.store') }}";
          $.ajax({
              type: "POST",
              enctype: 'multipart/form-data',
              url: show_url,
              data: nomineeData,
              processData: false,
              contentType: false,
              cache: false,
              dataType: "json",
                success: function( data, textStatus, jQxhr ){

                    toastr.success(data.message, data.title);
                    removeLocationHash();
                    window.location.href += "#tabs-1";
                    location.reload();
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    printErrorMsg( jqXhr.responseJSON.errors );
                }
            });

  });
 
  $(document).on('click', '.guarantor-Surety', function(guarantorSave){    
    guarantorSave.preventDefault();
    var formData = $('#guarantorData')[0];
    var guarantorData = new FormData(formData);
    var show_url="{{ route('guarantorSurety.store') }}";
          $.ajax({
              type: "POST",
              enctype: 'multipart/form-data',
              url: show_url,
              data: guarantorData,
              processData: false,
              contentType: false,
              cache: false,
              dataType: "json",
                success: function( data, textStatus, jQxhr ){

                    toastr.success(data.message, data.title);
                    removeLocationHash();
                    window.location.href += "#tabs-4";
                    location.reload();
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    printErrorMsg( jqXhr.responseJSON.errors );
                }
            });

  });
  function removeLocationHash(){
    var noHashURL = window.location.href.replace(/#.*$/, '');
    window.history.replaceState('', document.title, noHashURL) 
}
  function printErrorMsg (msg) {  
        //console.log(msg);
         
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
}


});

Webcam.set({
         width: 320,
         height: 240,
         image_format: 'png',
         jpeg_quality: 90
      });
      Webcam.attach( ".guarantor-profile-image" );
   function guarantor_preview_snapshot() {
         // freeze camera so user can preview pic
         Webcam.freeze();
         
         $(".guarantor-preview").hide();
         $(".guarantor-save").show();
         $(".guarantor-cancel").show();
      }
      
      function guarantor_cancel_preview() {
         // cancel preview freeze and return to live camera feed
         Webcam.unfreeze();
         
         $(".guarantor-preview").show();
         $(".guarantor-save").hide();
         $(".guarantor-cancel").hide();
      }
      
      function guarantor_save_photo() {
         // actually snap photo (from preview freeze) and display it
         Webcam.snap( function(data_uri) {
            // display results in page
            $('.guarantor-profile-image').hide();
          $('.guarantor-profile-image-save').html( 
               '<h2>Here is your image:</h2>' + 
               '<img src="'+data_uri+'"/>');
          console.log(data_uri);
            $(".guarantor-profile").val(data_uri);
            $('.guarantor-profile-image-save, .delete').show();
               $(".guarantor-preview").hide();
               $(".guarantor-save").hide();
               $(".guarantor-cancel").hide();
         } );

      }
         function guarantor_delete_preview() {
         // cancel preview freeze and return to live camera feed
          Webcam.unfreeze();
          $('.guarantor-profile-image-save').hide();
          $('.guarantor-profile-image').show();
         $('.guarantor-preview').show();
         $('.guarantor-save').hide();
         $('.guarantor-cancel').hide();
         $('.guarantor-delete').hide();
      }
Webcam.set({
         width: 320,
         height: 240,
         image_format: 'png',
         jpeg_quality: 90
      });
      Webcam.attach( ".nominee-profile-image" );
   function nominee_preview_snapshot() {
         // freeze camera so user can preview pic
         Webcam.freeze();
         
         $(".nominee-preview").hide();
         $(".nominee-save").show();
         $(".nominee-cancel").show();
      }
      
      function nominee_cancel_preview() {
         // cancel preview freeze and return to live camera feed
         Webcam.unfreeze();
         
         $(".nominee-preview").show();
         $(".nominee-save").hide();
         $(".nominee-cancel").hide();
      }
      
      function nominee_save_photo() {
         // actually snap photo (from preview freeze) and display it
         Webcam.snap( function(data_uri) {
            // display results in page
            $('.nominee-profile-image').hide();
          $('.nominee-profile-image-save').html( 
               '<h2>Here is your image:</h2>' + 
               '<img src="'+data_uri+'"/>');
          console.log(data_uri);
            $(".nominee-profile").val(data_uri);
            $('.nominee-profile-image-save, .delete').show();
               $(".nominee-preview").hide();
               $(".nominee-save").hide();
               $(".nominee-cancel").hide();
         } );

      }
         function nominee_delete_preview() {
         // cancel preview freeze and return to live camera feed
          Webcam.unfreeze();
          $('.nominee-profile-image-save').hide();
          $('.nominee-profile-image').show();
         $('.nominee-preview').show();
         $('.nominee-save').hide();
         $('.nominee-cancel').hide();
         $('.nominee-delete').hide();
      }
      

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

      $(document).on("change",".guarantor_state",function(){
     // alert($(this).val());
      let city=@json($cities); 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('.guarantor_district').html("");
      $(".guarantor_taluk").html("");
      $(".guarantor_village").html("");
      $('.guarantor_district').append($('<option>', { value : "" }).text("Select District"));
      $(".guarantor_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".guarantor_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $('.guarantor_district').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".guarantor_district",function(){
     // alert($(this).val());
      let taluk=@json($taluks); 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $(".guarantor_taluk").html("");
      $(".guarantor_village").html("");
      
      $(".guarantor_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".guarantor_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".guarantor_taluk").append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".guarantor_taluk",function(){
     // alert($(this).val());
      let village=@json($villages); 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $(".guarantor_village").html("");
      $(".guarantor_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".guarantor_village").append($('<option>', { value : value.id }).text(value.name));
      });

   });

</script>
@endsection