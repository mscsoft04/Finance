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
                                                       <form method="post" action="http://localhost:8000/subscriber">
                                                           <input type="hidden" name="_token" value="E9tptIjW965PqwcCL8zzEythC62xjzPHmebmJyAA">
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
                                                                                           <select id="salutationname" name="salutation_name" class="form-control selectpicker">
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
                                                                                           <label for="subscribername"><span>Subscriber Name</span></label>
                                                                                           <input type="text" id="subscribername" name="subscriber_name" value="" class="form-control" placeholder="Subscriber Name">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="Initialname"><span>Initial</span></label>
                                                                                           <input type="text" id="Initialname" name="Initial_name" value="" class="form-control" placeholder="Initial">
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
                                                                                           <select class="form-control" name="name_of_father">
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
                                                                                           <input type="text" id="txtfatherorspouse" name="realtion_name" value="" class="form-control" placeholder="Father/SpouseName">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!--Form row end -->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start-->
                                                                                   <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                                       <div class="form-label-group">
                                                                                           <label for="dateofobirth"><span>Dob</span></label>
                                                                                           <input type="text" id="dateofobirth" name="dob" value="" class="form-control dob date">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                                                                       <div class="form-label-group">
                                                                                           <label for="age"><span>Age</span></label>
                                                                                           <input type="text" id="age" class="form-control" value="" name="age" placeholder="Age">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                                                                       <div class="form-label-group gendertab">
                                                                                           <input type="radio" id="Male" name="gender" value="male" checked="">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                                                                           <input type="radio" id="Female" name="gender" value="female">&nbsp;&nbsp;Female&nbsp;&nbsp;
                                                                                           <input type="radio" id="Transgender" name="gender" value="transgender">&nbsp;&nbsp;Transgender
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
                                                                                           <input type="text" id="dateofjoining" class="form-control date" name="doj" value="">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">

                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Occupation</span></label>
                                                                                           <input type="text" id="occupation" class="form-control" name="occupation" value="" placeholder="Occupation">
                                                                                       </div>
                                                                                   </div>
                                                                                   <!--Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Designation / Department</span></label>
                                                                                           <input type="text" name="designation-dpt" id="designation-dpt" class="form-control" placeholder="Designation / Department">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="referedby"><span>Relation Type</span></label>
                                                                                           <select id="collectionarea" name="collection_area" class="form-control selectpicker">
                                                                                               <option value="">Relation Type</option>
                                                                                               <option value="1">Area(COLA0001)</option>

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
                                                                                           <select id="pstatename" name="p_state" class="form-control state">
                                                                                               <option value="">State Name</option>
                                                                                               <option value="1">Tamil Nadu</option>
                                                                                               <option value="2">pondichery</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>District</span></label>
                                                                                           <select id="pdistrictname" name="p_district" class="form-control city">
                                                                                               <option value="">District</option>
                                                                                               <option value="1">Ariyalur</option>
                                                                                               <option value="2">Chennai</option>
                                                                                               <option value="3">Coimbatore</option>
                                                                                               <option value="4">Cuddalore</option>
                                                                                               <option value="5">Dharmapuri</option>
                                                                                               <option value="6">Dindigul</option>
                                                                                               <option value="7">Erode</option>
                                                                                               <option value="8">Kanchipuram</option>
                                                                                               <option value="9">Kanyakumari</option>
                                                                                               <option value="10">Karur</option>
                                                                                               <option value="11">Krishnagiri</option>
                                                                                               <option value="12">Madurai</option>
                                                                                               <option value="13">Namakkal</option>
                                                                                               <option value="14">Karur</option>
                                                                                               <option value="15">Nagapattinam</option>
                                                                                               <option value="16">Nilgiris</option>
                                                                                               <option value="17">Perambalur</option>
                                                                                               <option value="18">Pudukkottai</option>
                                                                                               <option value="19">Ramanathapuram</option>
                                                                                               <option value="20">Salem</option>
                                                                                               <option value="21">Sivaganga</option>
                                                                                               <option value="22">Thanjavur</option>
                                                                                               <option value="23">Theni</option>
                                                                                               <option value="24">Thoothukudi (Tuticorin)</option>
                                                                                               <option value="25">Tiruchirappalli</option>
                                                                                               <option value="26">Tirunelveli</option>
                                                                                               <option value="27">Tiruppur</option>
                                                                                               <option value="28">Tiruvallur</option>
                                                                                               <option value="29">Tiruvannamalai</option>
                                                                                               <option value="30">Tiruvarur</option>
                                                                                               <option value="31">Vellore</option>
                                                                                               <option value="32">Viluppuram</option>
                                                                                               <option value="33">Virudhunagar</option>
                                                                                               <option value="34">pondichery</option>
                                                                                               <option value="35">karaikal</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="gstin"><span>Taluk</span></label>
                                                                                           <select id="ptalukname" name="p_taluk" class="form-control taluk">
                                                                                               <option value="">Taluk Name</option>
                                                                                               <option value="1">Chidambaram </option>
                                                                                               <option value="2">Virudhachalam</option>
                                                                                               <option value="3">Chidambaram </option>
                                                                                               <option value="4">Cuddalore</option>
                                                                                               <option value="5">Panruti </option>
                                                                                               <option value="6">Cuddalore</option>
                                                                                               <option value="7">Panruti </option>
                                                                                               <option value="8">Kurinjipadi</option>
                                                                                               <option value="9">Panruti </option>
                                                                                               <option value="10">Kattumannarkoil</option>
                                                                                               <option value="11">Panruti </option>
                                                                                               <option value="12">Tittakudi</option>
                                                                                               <option value="13">Nungambakkam</option>
                                                                                               <option value="14">Tambaram</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="pvillagename"><span>Village</span></label>
                                                                                           <select id="pvillagename" name="p_village" class="form-control village">
                                                                                               <option value="">Village</option>
                                                                                               <option value="1">Erukankattupadugai</option>
                                                                                               <option value="2">Erumbur</option>
                                                                                               <option value="3">Esanai</option>
                                                                                               <option value="4">Pushba Nagar</option>
                                                                                               <option value="5">Choolaimedu</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="p_address"><span>Address</span></label>
                                                                                           <textarea id="p_address" class="form-control" name="p_address" rows="1"></textarea>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="ppincode"><span>Pin code</span></label>
                                                                                           <input type="text" id="ppincode" class="form-control" name="p_pincode" value="" placeholder="Pin code">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mobileno"><span>Mobile No</span></label>
                                                                                           <input type="text" id="mobileno" name="mobile_no" value="" class="form-control" placeholder="Mobile No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="phoneno"><span>Phone No</span></label>
                                                                                           <input type="text" id="phoneno" name="phone_no" value="" class="form-control" placeholder="Phone No">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                       <div class="form-label-group">
                                                                                           <label for="mailid"><span>Mail ID</span></label>
                                                                                           <input type="text" id="mailid" name="mail_id" class="form-control" value="" placeholder="Mail ID">
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <!-- Form row end-->
                                                                               <div class="form-row">
                                                                                   <!-- Form row start -->
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="occupation"><span>Source of funds</span></label>
                                                                                           <select id="sourceoffund" name="sourceof_fund" class="form-control selectpicker">
                                                                                               <option value="">Source of funds</option>
                                                                                               <option value="1">GoVT Salary</option>
                                                                                               <option value="2">Other</option>

                                                                                           </select>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                       <div class="form-label-group">
                                                                                           <label for="monthlyincome"><span>Monthly Income</span></label>
                                                                                           <input type="text" id="monthlyincome" class="form-control" name="monthly_income" value="" placeholder="Monthly Income">
                                                                                       </div>
                                                                                   </div>
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
                                                                             <div class="profile-image">
                                                                                 <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                                                             </div>
                                                                             <div class="profile-image-save" style="display: none">
                                                                                 <img src="{{ asset('public/image/girl.svg') }}" class="profile" alt="profile photo">
                                                                             </div>
                                                                         </div>
                                                                         <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                             <input type="hidden" id="profile" class="form-control" name="image" value="{{ old('image') }}">
                                                                             <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()">Preview</button>
                                                                             <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                                                             <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                                                             <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
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
                                                                               <input type="text" class="form-control" placeholder="Search" name="startdate" id="startdate">
                                                                               <div class="input-group-append">
                                                                                 <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
                                                                               </div>
                                                                             </div>
                                                                              </div>
                                                                           </div>
                                                                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                              <div class="form-label-group">
                                                                                 <label for="retirementdate"><span>No.of Documents</span></label>
                                                                                 <input type="text" id="no-of-doc" name="no-of-doc" value="" class="form-control date" placeholder="No.of Documents">
                                                                              </div>
                                                                           </div>
                                                                          
                                                                        </div>
                                                                       <div id="doc-new"> 
                                                                        <div class="row">
                                                                           <div class="col-12 col-sm-12 col-md-4  col-lg-4  col-xl-4 ">
                                                                              <div class="form-label-group">
                                                                                    <label><span>Document Type</span></label>
                                                                                    <select class="form-control" name="document-type">
                                                                                       <option value="">Document Type</option>
                                                                                       <option>Doc 1</option>
                                                                                       <option>Doc 2</option>
                                                                                       <option>Doc 3</option>
                                                                                    </select>
                                                                                 </div>
                                                                           </div>
                                                                           <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                              <div class="form-label-group">
                                                                               <label><span>Remarks</span></label>
                                                                                 <input type="text" class="form-control" id="remarks" name="remarks">
                                                                             </div>
                                                                           </div>
                                                                           <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                              <div class="form-label-group">
                                                                               <label><span>Document</span></label>
                                                                               <div class="custom-file">
                                                                                 <input type="file" class="custom-file-input" id="customFile-1">
                                                                                 <label class="custom-file-label" for="customFile-1">Choose file</label>
                                                                              </div>
                                                                             </div>
                                                                           </div>
                                                                           <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 35px;"> 
                                                                             <button class="btn btn-danger btn-sm deleteFile" type="button">Delete</button>
                                                                           </div>
                  
                                                                           
                                                                        </div>
                                                                     <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                           <div class="form-label-group">                                                                     
                                                                              <label><span>Document Type</span></label>
                                                                              <select class="form-control" name="document-type">  
                                                                               <option value="">Document Type</option>
                                                                               <option>Doc 1</option>                                                                        
                                                                               <option>Doc 2</option>                                                                       
                                                                               <option>Doc 3</option>                                                                     
                                                                              </select>                                                                  
                                                                           </div>
                                                                         </div>      
                                                                         <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                              <div class="form-label-group">
                                                                               <label><span>Remarks</span></label>
                                                                                 <input type="text" class="form-control" id="remarks" name="remarks">
                                                                             </div>
                                                                           </div>                                                      
                                                                         <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">                                                              
                                                                           <div class="form-label-group">                                                                
                                                                              <label><span>Document</span></label>                                                                
                                                                              <div class="custom-file">                                                                  
                                                                                 <input type="file" class="custom-file-input" id="customFile-2">                                                                  
                                                                                 <label class="custom-file-label" for="customFile-2">Choose file</label>                                                               
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
                                                                           <input type="submit" class="btn btn-primary btn-block btn-blue">
                                                                       </div>
                                                                       <div class="col-md-2">
                                                                           <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                       </form>

                                                       </div>
                                                   </div>

                                                   <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                      <form method="post" action="http://localhost:8000/subscriber">
                                                          <input type="hidden" name="_token" value="E9tptIjW965PqwcCL8zzEythC62xjzPHmebmJyAA">
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
                                                                                          <select id="salutationname" name="salutation_name" class="form-control selectpicker">
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
                                                                                          <label for="subscribername"><span>Subscriber Name</span></label>
                                                                                          <input type="text" id="subscribername" name="subscriber_name" value="" class="form-control" placeholder="Subscriber Name">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                                                                      <div class="form-label-group">
                                                                                          <label for="Initialname"><span>Initial</span></label>
                                                                                          <input type="text" id="Initialname" name="Initial_name" value="" class="form-control" placeholder="Initial">
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
                                                                                          <select class="form-control" name="name_of_father">
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
                                                                                          <input type="text" id="txtfatherorspouse" name="realtion_name" value="" class="form-control" placeholder="Father/SpouseName">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <!--Form row end -->
                                                                              <div class="form-row">
                                                                                  <!-- Form row start-->
                                                                                  <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                                      <div class="form-label-group">
                                                                                          <label for="dateofobirth"><span>Dob</span></label>
                                                                                          <input type="text" id="dateofobirth" name="dob" value="" class="form-control dob date">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                                                                      <div class="form-label-group">
                                                                                          <label for="age"><span>Age</span></label>
                                                                                          <input type="text" id="age" class="form-control" value="" name="age" placeholder="Age">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                                                                      <div class="form-label-group gendertab">
                                                                                          <input type="radio" id="Male" name="gender" value="male" checked="">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                                                                          <input type="radio" id="Female" name="gender" value="female">&nbsp;&nbsp;Female&nbsp;&nbsp;
                                                                                          <input type="radio" id="Transgender" name="gender" value="transgender">&nbsp;&nbsp;Transgender
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
                                                                                          <input type="text" id="dateofjoining" class="form-control date" name="doj" value="">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <!-- Form row end-->
                                                                              <div class="form-row">

                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="occupation"><span>Occupation</span></label>
                                                                                          <input type="text" id="occupation" class="form-control" name="occupation" value="" placeholder="Occupation">
                                                                                      </div>
                                                                                  </div>
                                                                                  <!--Form row start -->
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="referedby"><span>Designation / Department</span></label>
                                                                                          <input type="text" name="designation-dpt" id="designation-dpt" class="form-control" placeholder="Designation / Department">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                      <div class="form-label-group">
                                                                                          <label for="referedby"><span>Relation Type</span></label>
                                                                                          <select id="collectionarea" name="collection_area" class="form-control selectpicker">
                                                                                              <option value="">Relation Type</option>
                                                                                              <option value="1">Area(COLA0001)</option>

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
                                                                                          <select id="pstatename" name="p_state" class="form-control state">
                                                                                              <option value="">State Name</option>
                                                                                              <option value="1">Tamil Nadu</option>
                                                                                              <option value="2">pondichery</option>

                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="gstin"><span>District</span></label>
                                                                                          <select id="pdistrictname" name="p_district" class="form-control city">
                                                                                              <option value="">District</option>
                                                                                              <option value="1">Ariyalur</option>
                                                                                              <option value="2">Chennai</option>
                                                                                              <option value="3">Coimbatore</option>
                                                                                              <option value="4">Cuddalore</option>
                                                                                              <option value="5">Dharmapuri</option>
                                                                                              <option value="6">Dindigul</option>
                                                                                              <option value="7">Erode</option>
                                                                                              <option value="8">Kanchipuram</option>
                                                                                              <option value="9">Kanyakumari</option>
                                                                                              <option value="10">Karur</option>
                                                                                              <option value="11">Krishnagiri</option>
                                                                                              <option value="12">Madurai</option>
                                                                                              <option value="13">Namakkal</option>
                                                                                              <option value="14">Karur</option>
                                                                                              <option value="15">Nagapattinam</option>
                                                                                              <option value="16">Nilgiris</option>
                                                                                              <option value="17">Perambalur</option>
                                                                                              <option value="18">Pudukkottai</option>
                                                                                              <option value="19">Ramanathapuram</option>
                                                                                              <option value="20">Salem</option>
                                                                                              <option value="21">Sivaganga</option>
                                                                                              <option value="22">Thanjavur</option>
                                                                                              <option value="23">Theni</option>
                                                                                              <option value="24">Thoothukudi (Tuticorin)</option>
                                                                                              <option value="25">Tiruchirappalli</option>
                                                                                              <option value="26">Tirunelveli</option>
                                                                                              <option value="27">Tiruppur</option>
                                                                                              <option value="28">Tiruvallur</option>
                                                                                              <option value="29">Tiruvannamalai</option>
                                                                                              <option value="30">Tiruvarur</option>
                                                                                              <option value="31">Vellore</option>
                                                                                              <option value="32">Viluppuram</option>
                                                                                              <option value="33">Virudhunagar</option>
                                                                                              <option value="34">pondichery</option>
                                                                                              <option value="35">karaikal</option>

                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="gstin"><span>Taluk</span></label>
                                                                                          <select id="ptalukname" name="p_taluk" class="form-control taluk">
                                                                                              <option value="">Taluk Name</option>
                                                                                              <option value="1">Chidambaram </option>
                                                                                              <option value="2">Virudhachalam</option>
                                                                                              <option value="3">Chidambaram </option>
                                                                                              <option value="4">Cuddalore</option>
                                                                                              <option value="5">Panruti </option>
                                                                                              <option value="6">Cuddalore</option>
                                                                                              <option value="7">Panruti </option>
                                                                                              <option value="8">Kurinjipadi</option>
                                                                                              <option value="9">Panruti </option>
                                                                                              <option value="10">Kattumannarkoil</option>
                                                                                              <option value="11">Panruti </option>
                                                                                              <option value="12">Tittakudi</option>
                                                                                              <option value="13">Nungambakkam</option>
                                                                                              <option value="14">Tambaram</option>

                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="pvillagename"><span>Village</span></label>
                                                                                          <select id="pvillagename" name="p_village" class="form-control village">
                                                                                              <option value="">Village</option>
                                                                                              <option value="1">Erukankattupadugai</option>
                                                                                              <option value="2">Erumbur</option>
                                                                                              <option value="3">Esanai</option>
                                                                                              <option value="4">Pushba Nagar</option>
                                                                                              <option value="5">Choolaimedu</option>

                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="p_address"><span>Address</span></label>
                                                                                          <textarea id="p_address" class="form-control" name="p_address" rows="1"></textarea>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="ppincode"><span>Pin code</span></label>
                                                                                          <input type="text" id="ppincode" class="form-control" name="p_pincode" value="" placeholder="Pin code">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="mobileno"><span>Mobile No</span></label>
                                                                                          <input type="text" id="mobileno" name="mobile_no" value="" class="form-control" placeholder="Mobile No">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="phoneno"><span>Phone No</span></label>
                                                                                          <input type="text" id="phoneno" name="phone_no" value="" class="form-control" placeholder="Phone No">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                      <div class="form-label-group">
                                                                                          <label for="mailid"><span>Mail ID</span></label>
                                                                                          <input type="text" id="mailid" name="mail_id" class="form-control" value="" placeholder="Mail ID">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <!-- Form row end-->
                                                                              <div class="form-row">
                                                                                  <!-- Form row start -->
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="occupation"><span>Source of funds</span></label>
                                                                                          <select id="sourceoffund" name="sourceof_fund" class="form-control selectpicker">
                                                                                              <option value="">Source of funds</option>
                                                                                              <option value="1">GoVT Salary</option>
                                                                                              <option value="2">Other</option>

                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                                      <div class="form-label-group">
                                                                                          <label for="monthlyincome"><span>Monthly Income</span></label>
                                                                                          <input type="text" id="monthlyincome" class="form-control" name="monthly_income" value="" placeholder="Monthly Income">
                                                                                      </div>
                                                                                  </div>
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
                                                                            <div class="profile-image">
                                                                                <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                                                            </div>
                                                                            <div class="profile-image-save" style="display: none">
                                                                                <img src="{{ asset('public/image/girl.svg') }}" class="profile" alt="profile photo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                            <input type="hidden" id="profile" class="form-control" name="image" value="{{ old('image') }}">
                                                                            <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()">Preview</button>
                                                                            <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                                                            <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                                                            <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
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
                                                                              <input type="text" class="form-control" placeholder="Search" name="startdate" id="startdate">
                                                                              <div class="input-group-append">
                                                                                <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
                                                                              </div>
                                                                            </div>
                                                                             </div>
                                                                          </div>
                                                                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                             <div class="form-label-group">
                                                                                <label for="retirementdate"><span>No.of Documents</span></label>
                                                                                <input type="text" id="no-of-doc" name="no-of-doc" value="" class="form-control date" placeholder="No.of Documents">
                                                                             </div>
                                                                          </div>
                                                                         
                                                                       </div>
                                                                      <div id="doc-new"> 
                                                                       <div class="row">
                                                                          <div class="col-12 col-sm-12 col-md-4  col-lg-4  col-xl-4 ">
                                                                             <div class="form-label-group">
                                                                                   <label><span>Document Type</span></label>
                                                                                   <select class="form-control" name="document-type">
                                                                                      <option value="">Document Type</option>
                                                                                      <option>Doc 1</option>
                                                                                      <option>Doc 2</option>
                                                                                      <option>Doc 3</option>
                                                                                   </select>
                                                                                </div>
                                                                          </div>
                                                                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                             <div class="form-label-group">
                                                                              <label><span>Remarks</span></label>
                                                                                <input type="text" class="form-control" id="remarks" name="remarks">
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                             <div class="form-label-group">
                                                                              <label><span>Document</span></label>
                                                                              <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="customFile-1">
                                                                                <label class="custom-file-label" for="customFile-1">Choose file</label>
                                                                             </div>
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 35px;"> 
                                                                            <button class="btn btn-danger btn-sm deleteFile" type="button">Delete</button>
                                                                          </div>
                 
                                                                          
                                                                       </div>
                                                                    <div class="row">
                                                                       <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                          <div class="form-label-group">                                                                     
                                                                             <label><span>Document Type</span></label>
                                                                             <select class="form-control" name="document-type">  
                                                                              <option value="">Document Type</option>
                                                                              <option>Doc 1</option>                                                                        
                                                                              <option>Doc 2</option>                                                                       
                                                                              <option>Doc 3</option>                                                                     
                                                                             </select>                                                                  
                                                                          </div>
                                                                        </div>      
                                                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                                                             <div class="form-label-group">
                                                                              <label><span>Remarks</span></label>
                                                                                <input type="text" class="form-control" id="remarks" name="remarks">
                                                                            </div>
                                                                          </div>                                                      
                                                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">                                                              
                                                                          <div class="form-label-group">                                                                
                                                                             <label><span>Document</span></label>                                                                
                                                                             <div class="custom-file">                                                                  
                                                                                <input type="file" class="custom-file-input" id="customFile-2">                                                                  
                                                                                <label class="custom-file-label" for="customFile-2">Choose file</label>                                                               
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
                                                                          <input type="submit" class="btn btn-primary btn-block btn-blue">
                                                                      </div>
                                                                      <div class="col-md-2">
                                                                          <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                      </form>

                                                      </div>
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
                                                                           <label><span>Date</span></label>
                                                                           <input type="text" class="form-control" name="date" id="date" placeholder="Date">
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                       <div class="form-label-group">
                                                                           <label><span>Pay type</span></label>
                                                                           <input type="text" class="form-control" name="paytype" id="paytype" placeholder="Pay type">
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
</div>@endsection
@section('script')

<script type="text/javascript">

$(document).ready(function() {

var myvar =  $("#doc-new").html();
   // console.log(myvar);


$(document).on("click", ".add-new-doc", function() {
   $("#doc-new").append(myvar);
});

$(document).on("click", ".deleteFile", function() {
   $(this).closest('.row').remove();
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
                    window.location.href += "#tabs-1";
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


</script>
@endsection