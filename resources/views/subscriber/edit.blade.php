@extends('layouts.main')

@section('title', 'Subscriber')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('subscriber') }}"><span>Subscriber</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
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
@section('title', 'Subscriber')
      <form method="post" action="{{ route('subscriber.update', $subscriber->id) }}" >
        @csrf
        @method('PATCH')

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
				             <option value="">Select Branch</option>
                     @foreach ($branches as $branch)
                     <option  value="{{$branch->id}}" {{ $subscriber->branch_id == $branch->id ? "selected":"" }}>{{$branch->branch_name}}<option>
                     @endforeach
                     </select>
 
                </div>
                @error('branch_id')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              </div>
          </div>
		  
		  <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <select  id="salutationname" name="salutation_name"  class="form-control selectpicker" >
				             <option value="">Salutation</option>
                     <option  value="Mr" {{ $subscriber->salutation_name == "Mr" ? "selected":"" }}>CUDDALORE</option></select>
                </div>
                @error('salutation_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              </div>
          </div>
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="subscribername" name="subscriber_name" value="{{  $subscriber->subscriber_name }}" class="form-control" placeholder="Subscriber Name" >
                  <label for="subscribername"><span>Subscriber Name</span></label>
                </div>
                @error('subscriber_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Initialname" name="Initial_name" value="{{  $subscriber->Initial_name}}" class="form-control" placeholder="Initial" >
                  <label for="Initialname"><span>Initial</span></label>
                </div>
                @error('Initial_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                
              </div>
             
            </div>
          </div>
		  
		  
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                   <input type="radio" id="rfatherorspouse" name="relation_type" value="father" {{ $subscriber->relation_type == 'father' ? "checked":"" }} > &nbsp;&nbsp;Father Name&nbsp;&nbsp;
                   <input type="radio" id="rfatherorspouse" name="relation_type" value="spouse" {{ $subscriber->relation_type == 'spouse' ? "checked":"" }}>&nbsp;&nbsp;Spouse's Name
                 </div>
				  @error('relation_type')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
				<input type="text" id="txtfatherorspouse" name="realtion_name" value="{{  $subscriber->realtion_name}}" class="form-control" placeholder="Father/SpouseName" >
				 <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                </div>
				 @error('realtion_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>


		  
		   	  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="dateofobirth" name="dob" value="{{  $subscriber->dob }}" class="form-control">
				   
                </div>
                @error('dob')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="age" class="form-control" value="{{  $subscriber->age }}" name="age" placeholder="Age" >
                  <label for="age"><span>Age</span></label>
                </div>
                @error('age')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="radio" id="Male"  name="gender" value="male" {{ $subscriber->gender == "male" ? "checked":"" }}>&nbsp;&nbsp;Male&nbsp;&nbsp;                        
					<input type="radio" id="Female" name="gender" value="female" {{ $subscriber->gender == "female" ? "checked":"" }}>&nbsp;&nbsp;Female&nbsp;&nbsp; 
					<input type="radio" id="Transgender" name="gender"  value="transgender" {{ $subscriber->gender == "transgender" ? "checked":"" }}>&nbsp;&nbsp;Transgender
                </div>
                @error('gender')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
				  <select  id="maritalstatus" name="marital_status"  class="form-control selectpicker" ><option value="">Marital Status</option>
                     <option  value="Single" {{ $subscriber->marital_status == "Single" ? "selected":"" }}>CUDDALORE</option></select>
				</div>
                @error('marital_status')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="dateofjoining" class="form-control" name="doj" value="{{  $subscriber->doj }}"  >
                  
                </div>
                @error('doj')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="mailid" name="mail_id" class="form-control" value="{{  $subscriber->mail_id}}" placeholder="Mail ID" >
                  <label for="mailid"><span>Mail ID</span></label>
                </div>
                @error('mail_id')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="mobileno" name="mobile_no" value="{{  $subscriber->mobile_no}}" class="form-control" placeholder="Mobile No" >
                  <label for="mobileno"><span>Mobile No</span></label>
                </div>
                @error('mobile_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="phoneno" name="phone_no" value="{{  $subscriber->phone_no}}"  class="form-control" placeholder="Phone No" >
                  <label for="phoneno"><span>Phone No</span></label>
                </div>
                @error('phone_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="aadharno" name="aadhar_no" value="{{  $subscriber->aadhar_no }}" class="form-control" placeholder="Aadhar No" >
                  <label for="aadharno"><span>Aadhar No</span></label>
                </div>
                @error('aadhar_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="panno" name="pan_no" value="{{  $subscriber->pan_no }}" class="form-control" placeholder="PAN No" >
                  <label for="panno"><span>PAN No</span></label>
                </div>
                @error('pan_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="rationcardno" name="rationcard_no" value="{{  $subscriber->rationcard_no }}" class="form-control" placeholder="Ration Card No" >
                  <label for="rationcardno"><span>Ration Card No</span></label>
                </div>
                @error('rationcard_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="drivinglicence" name="driving_licence" value="{{  $subscriber->driving_licence }}" class="form-control" placeholder="Driving Licence" >
                  <label for="drivinglicence"><span>Driving Licence</span></label>
                </div>
                @error('driving_licence')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		 
		 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="voterid" name="voter_id" value="{{  $subscriber->voter_id}}" class="form-control" placeholder="Ration Card No" >
                  <label for="voterid"><span>Voter ID</span></label>
                </div>
                @error('voter_id')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="gstin" name="gst_no" value="{{  $subscriber->gst_no}}" class="form-control" placeholder="GSTIN" >
                  <label for="gstin"><span>GSTIN</span></label>
                </div>
                @error('gst_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <textarea id="pdoorno" class="form-control" name="p_address"  >{{  $subscriber->p_address }}</textarea>
                  <label for="pdoorno"><span></span></label>
                </div>
                @error('p_address')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
            </div>
          </div>
		  
		  
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
					 <select  id="pstatename" name="p_state" class="form-control selectpicker" >
				  <option value="">State Name</option>
          <option  value="Tamilnadu" {{ $subscriber->p_state == "Tamilnadu" ? "selected":"" }}>Tamilnadu</option></select>

                </div>
                @error('p_state')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <select  id="pdistrictname" name="p_district" class="form-control selectpicker">
                  <option value="">District</option>
          <option  value="Cuddalore" {{ $subscriber->p_district == "Cuddalore" ? "selected":"" }}>Cuddalore</option></select>
                </div>
                @error('p_district')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <select  id="ptalukname" name="p_taluk" class="form-control selectpicker" >
				          <option value="">Taluk Name</option>
                  <option  value="Bhuvanagiri" {{ $subscriber->p_taluk == "Bhuvanagiri" ? "selected":"" }}>Bhuvanagiri</option></select>
                </div>
                @error('p_taluk')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="ppincode" class="form-control" name="p_pincode" value="{{  $subscriber->p_pincode }}" placeholder="Pin code" >
                  <label for="ppincode"><span>Pin code</span></label>
                </div>
                @error('p_pincode')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="checkbox" id="sameaddress" name="sameaddress" onclick="FillBilling(this.form)"><em> if Communicate Address (Same as above).</em>
	                </div>
              </div>
              </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <textarea id="rdoorno" class="form-control" name="c_address"  >{{  $subscriber->c_address }}</textarea>
                  <label for="rdoorno"><span></span></label>
                </div>
                @error('c_address')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
            </div>
          </div>
		  
		  
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
					 <select  id="rstatename" name="c_state" class="form-control selectpicker" >
				  <option value="">State Name</option>
          <option  value="Tamilnadu" {{ $subscriber->c_state == "Tamilnadu" ? "selected":"" }}>Tamilnadu</option></select>

                </div>
                @error('c_state')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <select  id="rdistrictname" name="c_district" class="form-control selectpicker">
                  <option value="">District</option>
          <option  value="Cuddalore" {{ $subscriber->c_district == "Cuddalore" ? "selected":"" }}>Cuddalore</option></select>
                </div>
                @error('c_district')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <select  id="rtalukname" name="c_taluk" class="form-control selectpicker" >
				          <option value="">Taluk Name</option>
                  <option  value="Bhuvanagiri" {{ $subscriber->c_taluk == "Bhuvanagiri" ? "selected":"" }}>Bhuvanagiri</option></select>
                </div>
                @error('c_taluk')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="rpincode" class="form-control" name="c_pincode" value="{{  $subscriber->c_pincode }}" placeholder="Pin code" >
                  <label for="rpincode"><span>Pin code</span></label>
                </div>
                @error('c_pincode')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		
		  
		<div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="radio" id="agentType" name="agent_Type" value="subscriber" {{ $subscriber->agent_Type == "subscriber" ? "checked":"" }}">&nbsp;&nbsp;Subscriber &nbsp;&nbsp;&nbsp;
					<input type="radio" id="agentType1"  name="agent_Type" value="employee" {{ $subscriber->agent_Type == "employee" ? "checked":"" }}">&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;
					<input type="radio" id="agentType2"  name="agent_Type" value="agent" {{ $subscriber->agent_Type == "agent" ? "checked":"" }}>&nbsp;&nbsp;Business Agent&nbsp;&nbsp;&nbsp;
					<input type="radio" id="agentType3"  name="agent_Type" value="self_joining" {{ $subscriber->agent_Type == "self_joining" ? "checked":"" }}>&nbsp;&nbsp;Self-Joining&nbsp;&nbsp;&nbsp;
					<input type="radio" id="agentType4"  name="agent_Type" value="others" {{ $subscriber->agent_Type == "others" ? "checked":"" }}>&nbsp;&nbsp;Others
	              </div>
                @error('agent_Type')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="referedby" name="refered_by" value="{{  $subscriber->refered_by}}" class="form-control" placeholder="Name" >
                  <label for="referedby"><span>Name</span></label>
	              </div>
                @error('refered_by')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              </div>
          </div>
          <div class="form-group">
		  <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <select  id="collectionarea" name="collection_area" class="form-control selectpicker" >
				          <option value="">Collection Area</option>
                  <option  value="ACF01" {{ $subscriber->collection_area == "ACF01" ? "selected":"" }}>ACF01</option></select>
                </div>
                @error('collection_area')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="occupation" class="form-control" name="occupation" value="{{  $subscriber->occupation}}" placeholder="Occupation" >
                  <label for="occupation"><span>Occupation</span></label>
                </div>
                @error('occupation')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  </div>
		  
      
      <div class="form-group">
      <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <select  id="sourceoffund" name="sourceof_fund" class="form-control selectpicker" >
				          <option value="">Source of funds</option>
                  <option  value="GOVERMENT SALARY" {{ $subscriber->sourceof_fund == "GOVERMENT SALARY" ? "selected":"" }}>GOVERMENT SALARY</option></select>
                </div>
                @error('sourceof_fund')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="monthlyincome" class="form-control" name="monthly_income" value="{{  $subscriber->monthly_income }}" placeholder="Monthly Income" >
                  <label for="monthlyincome"><span>Monthly Income</span></label>
                </div>
                @error('monthly_income')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="retirementdate" name="retirement_date" value="{{  $subscriber->retirement_date }}" class="form-control" placeholder="Retirement Date" >
				   <label for="retirementdate"><span>Retirement Date</span></label>
                </div>
                @error('retirement_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="pfno" class="form-control" value="{{  $subscriber->pf_no }}" name="pf_no" placeholder="PF No" >
                  <label for="pfno"><span>PF No</span></label>
                </div>
                @error('pfno')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
        
          <div class="form-group">
		  <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <select  id="relationship" name="relationship" class="form-control selectpicker" >
				          <option value="">Relationship</option>
                  <option  value="FRIEND" {{ $subscriber->relationship == "FRIEND" ? "selected":"" }}>FRIEND</option></select>
                </div>
                @error('relationship')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="relationfor" class="form-control" name="relation_for" value="{{  $subscriber->relation_for }}" placeholder="Relation for" >
                  <label for="relationfor"><span>Relation for</span></label>
                </div>
                @error('relation_for')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
        
      
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="additionalnotes" class="form-control" name="additional_notes" value="{{  $subscriber->additional_notes }}" placeholder="Additional Notes" required>
                  <label for="additionalnotes"><span>Additional Notes</span></label>
	              </div>
				  @error('additional_notes')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
              <input type="submit" class="btn btn-primary btn-block btn-yellow">
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

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



<script type="text/javascript">

$(document).ready(function() {

  $('#dateofobirth').datepicker({
            todayHighlight: true, 
            format: 'yyyy-m-d',
            autoclose: true, 
        
  });
  $('#dateofjoining').datepicker({
         autoclose: true, 
        todayHighlight: true,
        format: 'yyyy-m-d' 
  });
   
});
</script>
@endsection
