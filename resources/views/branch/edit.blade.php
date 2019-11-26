@extends('layouts.main')

@section('title', 'Branch')

@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('branch') }}"><span>Branch</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
        <form method="post" action="{{ route('branch.update', $branch->id) }}" >
        @csrf
        @method('PATCH')

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="branchname"><span>Division</span></label>
                  <select  id="division" name="division"  class="form-control selectpicker" >
				             <option value="">Select Division</option>
                     <option  value="CUDDALORE" {{ $branch->division == "CUDDALORE" ? "selected":"" }}>CUDDALORE</option></select>
                </div>
                @error('division')
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
                <label for="branchname"><span>Branch Name</span></label>
                  <input type="text" id="branchname" name="branch_name" value="{{ $branch->branch_name }}" class="form-control" placeholder="Branch Name" >
                  
                </div>
                @error('branch_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
			  <div class="col-md-6">
                <div class="form-label-group">
                <label for="branchid"><span>Branch ID</span></label>
                  <input type="text" id="branchid" name="branch_code" value="{{ $branch->branch_code }}" class="form-control" placeholder="Branch ID" >
                  
                </div>
                @error('branch_code')
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
                <label for="dateofopening"><span>DOO</span></label>
                  <input type="text" id="dateofopening" name="doo" value="{{ $branch->doo }}" class="form-control date" placeholder="Date of Opening" >
                  
                </div>
                @error('doo')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="age"><span>Age</span></label>
                 <input type="text" id="age" class="form-control" value="{{ $branch->age }}" name="age" placeholder="Age" >
                 
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
                <label for="bonusday"><span>Bonus Days</span></label>
                  <input type="text" id="bonusday" name="bonus_days" value="{{ $branch->bonus_days}}" class="form-control" placeholder="Bonus Days" >
                  
                </div>
                @error('bonus_days')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="bonuspercentage"><span>Bonus Percentage</span></label>
				  <input type="text" id="bonuspercentage" name="bonus_precentage"  value="{{ $branch->bonus_precentage }}"class="form-control" placeholder="Bonus Percentage" >
                  
				</div>
                @error('bonus_precentage')
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
                <label for="pspenalty"><span>Prize Subscriber Penalty(%)</span></label>
                  <input type="text" id="pspenalty" class="form-control" name="prize_subscriber_penalty" value="{{$branch->prize_subscriber_penalty }}" placeholder="Prize Subscriber Penalty(%)" >
                  
                </div>
                @error('prize_subscriber_penalty')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="npspenalty"><span>Non-Prize Subscriber Penalty(%)</span></label>
                 <input type="text" id="npspenalty" name="non_prize_subscriber_penalty" class="form-control" value="{{ $branch->non_prize_subscriber_penalty }}" placeholder="Non-Prize Subscriber Penalty(%)" >
                  
                </div>
                @error('non_prize_subscriber_penalty')
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
                <label for="penaltydays"><span>Penalty Days</span></label>
                  <input type="text" id="penaltydays" name="penalty_days" value="{{ $branch->penalty_days }}" class="form-control" placeholder="Penalty Days" >
                 
                </div>
                @error('penalty_days')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="phoneno"><span>Phone No</span></label>
                 <input type="text" id="phoneno" name="phone_no" value="{{ $branch->phone_no }}"  class="form-control" placeholder="Phone No" >
                 
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
                <label for="mobileno"><span>Mobile No</span></label>
                  <input type="text" id="mobileno" name="mobile_no" value="{{ $branch->mobile_no }}" class="form-control" placeholder="Mobile No" >
                 
                </div>
                @error('mobile_no')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="emailid"><span>Email Id</span></label>
                 <input type="text" id="emailid" name="email" value="{{ $branch->email }}" class="form-control" placeholder="Email Id" >
                  
                </div>
                @error('email')
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
                <label for="doorno"><span>Address</span></label>
                  <textarea id="doorno" class="form-control" name="address"  >{{ $branch->address}}</textarea>
                 
                </div>
                @error('address')
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
                <label for="doorno"><span>State</span></label>
					 <select  id="statename" name="state" class="form-control state" >
				  <option value="">State Name</option>
         
          @foreach ($states as $state)
          <option  value="{{$state->id}}" {{ $branch->state == $state->id ? "selected":"" }}>{{ $state->name }}</option>
          @endforeach
        
        </select>

                </div>
                @error('state')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="doorno"><span>City</span></label>
                  <select  id="districtname" name="city" class="form-control city">
                  <option value="">City</option>
                  @foreach ($cities as $city)
                  <option  value="{{$city->id}}" {{ $branch->city == $city->id ? "selected":"" }}>{{ $city->name }}</option>
                  @endforeach
        </select>
                </div>
                @error('city')
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
                <label for="doorno"><span>Taluk</span></label>
                 <select  id="talukname" name="taluk" class="form-control taluk" >
                  <option value="">Taluk Name</option>
                  @foreach ($taluks as $taluk)
                  <option  value="{{$taluk->id}}" {{ $branch->taluk == $taluk->id ? "selected":"" }}>{{ $taluk->name }}</option>
                  @endforeach
                
                </select>
                </div>
                @error('taluk')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="pincode"><span>Pin code</span></label>
                 <input type="text" id="pincode" class="form-control" name="pincode" value="{{ $branch->pincode }}" placeholder="Pin code" >
                  
                </div>
                @error('pincode')
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
                <label for="branchfd"><span>Branch FD Total Months </span></label>
                <input type="text" id="branchfd" name="fd_total_month" value="{{ $branch->fd_total_month }}"  class="form-control" placeholder="Branch FD Total Months " >
                  
	              </div>
                @error('fd_total_month')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="remark"><span>Remark</span></label>
                <input type="text" id="remark" name="remarks" value="{{ $branch->remarks }}" class="form-control" placeholder="Remark" >
                 
	              </div>
                @error('remarks')
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
          <div class="col-md-2">
              
          <a href="{{url()->previous()}}" type="button" class="btn btn-block btn-cancel">Cancel</a>

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

<script type="text/javascript">

$(document).ready(function() {

  $('.date').datepicker({
    autoclose: true,
        todayHighlight: true,
        format: 'YYYY/m/d',


  });
  $(document).on("change",".state",function(){
     // alert($(this).val());
      let city=@json($cities); 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('#districtname').html("");
      $("#talukname").html("");
     // $("#pvillagename").html("");
      $('#districtname').append($('<option>', { value : "" }).text("Select District"));
      $('#talukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
     // $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#districtname').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".city",function(){
     // alert($(this).val());
      let taluk=@json($taluks); 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $("#talukname").html("");
     // $("#pvillagename").html("");
      
      $('#talukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
     // $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#talukname').append($('<option>', { value : value.id }).text(value.name));
      });

   });
  /*  $(document).on("change",".taluk",function(){
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
 */
});
</script>
@endsection
