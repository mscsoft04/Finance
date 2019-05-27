@extends('layouts.main')

@section('title', 'Branch')

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
                  <input type="text" id="branchname" name="branch_name" value="{{ $branch->branch_name }}" class="form-control" placeholder="Branch Name" >
                  <label for="branchname"><span>Branch Name</span></label>
                </div>
                @error('branch_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="branchid" name="branch_code" value="{{ $branch->branch_code }}" class="form-control" placeholder="Branch ID" >
                  <label for="branchid"><span>Branch ID</span></label>
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
                  <input type="text" id="dateofopening" name="doo" value="{{ $branch->doo }}" class="form-control" placeholder="Date of Opening" >
                  
                </div>
                @error('doo')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="age" class="form-control" value="{{ $branch->age }}" name="age" placeholder="Age" >
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
                  <input type="text" id="bonusday" name="bonus_days" value="{{ $branch->bonus_days}}" class="form-control" placeholder="Bonus Days" >
                  <label for="bonusday"><span>Bonus Days</span></label>
                </div>
                @error('bonus_days')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
				  <input type="text" id="bonuspercentage" name="bonus_precentage"  value="{{ $branch->bonus_precentage }}"class="form-control" placeholder="Bonus Percentage" >
                  <label for="bonuspercentage"><span>Bonus Percentage</span></label>
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
                  <input type="text" id="pspenalty" class="form-control" name="prize_subscriber_penalty" value="{{$branch->prize_subscriber_penalty }}" placeholder="Prize Subscriber Penalty(%)" >
                  <label for="pspenalty"><span>Prize Subscriber Penalty(%)</span></label>
                </div>
                @error('prize_subscriber_penalty')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="npspenalty" name="non_prize_subscriber_penalty" class="form-control" value="{{ $branch->non_prize_subscriber_penalty }}" placeholder="Non-Prize Subscriber Penalty(%)" >
                  <label for="npspenalty"><span>Non-Prize Subscriber Penalty(%)</span></label>
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
                  <input type="text" id="penaltydays" name="penalty_days" value="{{ $branch->penalty_days }}" class="form-control" placeholder="Penalty Days" >
                  <label for="penaltydays"><span>Penalty Days</span></label>
                </div>
                @error('penalty_days')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="phoneno" name="phone_no" value="{{ $branch->phone_no }}"  class="form-control" placeholder="Phone No" >
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
                  <input type="text" id="mobileno" name="mobile_no" value="{{ $branch->mobile_no }}" class="form-control" placeholder="Mobile No" >
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
                 <input type="text" id="emailid" name="email" value="{{ $branch->email }}" class="form-control" placeholder="Email Id" >
                  <label for="emailid"><span>Email Id</span></label>
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
                  <textarea id="doorno" class="form-control" name="address"  >{{ $branch->address}}</textarea>
                  <label for="doorno"><span></span></label>
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
					 <select  id="statename" name="state" class="form-control selectpicker" >
				  <option value="">State Name</option>
          <option  value="Tamilnadu" {{ $branch->state == "Tamilnadu" ? "selected":"" }}>Tamilnadu</option></select>

                </div>
                @error('state')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <select  id="districtname" name="city" class="form-control selectpicker">
                  <option value="">City</option>
          <option  value="Cuddalore" {{ $branch->city == "Cuddalore" ? "selected":"" }}>Cuddalore</option></select>
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
                 <select  id="talukname" name="taluk" class="form-control selectpicker" >
				          <option value="">Taluk Name</option>
                  <option  value="Bhuvanagiri" {{ $branch->taluk  == "Bhuvanagiri" ? "selected":"" }}>Bhuvanagiri</option></select>
                </div>
                @error('taluk')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="pincode" class="form-control" name="pincode" value="{{ $branch->pincode }}" placeholder="Pin code" >
                  <label for="pincode"><span>Pin code</span></label>
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
                <input type="text" id="branchfd" name="fd_total_month" value="{{ $branch->fd_total_month }}"  class="form-control" placeholder="Branch FD Total Months " >
                  <label for="branchfd"><span>Branch FD Total Months </span></label>
	              </div>
                @error('fd_total_month')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="remark" name="remarks" value="{{ $branch->remarks }}" class="form-control" placeholder="Remark" >
                  <label for="remark"><span>Remark</span></label>
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
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

$(document).ready(function() {

  $('#dateofopening').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-m-d' 
        });
});
</script>
@endsection
