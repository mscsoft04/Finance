@extends('layouts.main')

@section('title', 'Group')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('group') }}"><span>Group</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('group.store') }}" >
        @csrf
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="branchname"><span>Branch</span></label>
                <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
				             <option value="">Select Branch</option>
                     @foreach ($branches as $branch)
                     <option  value="{{$branch->id}}" {{ old("branch_id") == $branch->id ? "selected":"" }}>{{$branch->branch_name}}<option>
                     @endforeach
                     </select>
 
                </div>
                @error('branch_id')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="schemes"><span>Schemes</span></label>
                <select  id="schemes" name="schemes_id"  class="form-control selectpicker" >
				             <option value="">Select Schemes</option>
                     @foreach ($schemes as $scheme)
                     <option  value="{{$scheme->id}}" {{ old("schemes_id") == $scheme->id ? "selected":"" }}>{{$scheme->chit_value}}<option>
                     @endforeach
                     </select>
 
                </div>
                @error('schemes_id')
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
                <label for="type"><span>Type</span></label>
                <input type="text" id="type" class="form-control" name="type"  value="{{ old('type') }}" placeholder="Type" required>
                
	              </div>
                @error('type')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="auction_time"><span>Auction Time</span></label>
                <input type="text" id="auction_time" class="form-control" name="auction_time"  value="{{ old('auction_time') }}" placeholder="Auction Time" required>
                
	              </div>
                @error('auction_time')
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
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required>
                  
	              </div>
                @error('name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="commission"><span>Commission</span></label>
                <input type="text" id="commission" class="form-control" name="commission" value="{{ old('commission') }}" placeholder="Commission" required>
                  
	              </div>
                @error('commission')
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
                <label for="auction_date"><span>Auction Date</span></label>
                <input type="text" id="auction_date" name="auction_date" value="{{ old('auction_date') }}" class="form-control date" placeholder="Auction Date" >
                
	              </div>
                @error('auction_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="total_fd"><span>Total Fd</span></label>
                <input type="text" id="total_fd" name="total_fd" value="{{ old('total_fd') }}" class="form-control" placeholder="Total Fd" >
                
	              </div>
                @error('total_fd')
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
                <label for="start_date"><span>Start Date</span></label>
                <input type="text" id="start_date" name="start_date" value="{{ old('start_date') }}" class="form-control date" placeholder="Start Date" >
                
	              </div>
                @error('start_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                <label for="fd_rate_interrest"><span>Fd Rate Interrest</span></label>
                <input type="text" id="fd_rate_interrest" name="fd_rate_interrest" value="{{ old('fd_rate_interrest') }}" class="form-control" placeholder="Fd Rate Interrest" >
                
	              </div>
                @error('fd_rate_interrest')
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
                <label for="first_due_date"><span>First Due Date</span></label>
                <input type="text" id="first_due_date" name="first_due_date" value="{{ old('first_due_date') }}" class="form-control date" placeholder="First Due Date" >
                
	              </div>
                @error('first_due_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="maturity_amount"><span>Maturity Amount</span></label>
                <input type="text" id="maturity_amount" name="maturity_amount" value="{{ old('maturity_amount') }}" class="form-control" placeholder="Maturity Amount" >
                
	              </div>
                @error('maturity_amount')
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
                <label for="fd_number"><span>FD Number</span></label>
                <input type="text" id="fd_number" class="form-control" name="fd_number" value="{{ old('fd_number') }}"  placeholder="FD Number" required>
                 
	              </div>
                @error('fd_number')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="fd_branch"><span>FD Branch</span></label>
                <input type="text" id="fd_branch" class="form-control" name="fd_branch" value="{{ old('fd_branch') }}"  placeholder="FD Branch" required>
                 
	              </div>
                @error('fd_branch')
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
                <label for="company_fd"><span>Company FD</span></label>
                <input type="text" id="company_fd" class="form-control" name="company_fd" value="{{ old('company_fd') }}" placeholder="Company FD" required>
                  
	              </div>
                @error('company_fd')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="pso_date"><span>Pso Date </span></label>
                <input type="text" id="pso_date" class="form-control date" name="pso_date" value="{{ old('pso_date') }}" placeholder="PSO Date" required>
                  
	              </div>
                @error('pso_date')
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
                <label for="fd_date"><span>FD Date</span></label>
                <input type="text" id="fd_date" name="fd_date" value="{{ old('fd_date') }}" class="form-control date" placeholder="FD Date" >
                
	              </div>
                @error('fd_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="blaw_date"><span>Blaw Date</span></label>
                <input type="text" id="blaw_date" class="form-control date" name="blaw_date" value="{{ old('blaw_date') }}" placeholder="Blaw Date" required>
                  
	              </div>
                @error('blaw_date')
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
                <label for="fd_bank"><span>FD Bank</span></label>
                <input type="text" id="fd_bank" class="form-control" name="fd_bank" value="{{ old('fd_bank') }}"  placeholder="FD Bank" required>
                  
	              </div>
                @error('fd_bank')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="pso_number"><span>PSO Number</span></label>
                <input type="text" id="pso_number" class="form-control" name="pso_number"  value="{{ old('pso_number') }}" placeholder="PSO Number" required>
                 
	              </div>
                @error('pso_number')
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
                <label for="blaw_number"><span>Blaw Number</span></label>
                <input type="text" id="blaw_number" class="form-control" name="blaw_number"  value="{{ old('blaw_number') }}" placeholder="Blaw Number" required>
                 
	              </div>
                @error('blaw_number')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="cheque_no"><span>Cheque No</span></label>
                <input type="text" id="cheque_no" class="form-control" name="cheque_no"  value="{{ old('cheque_no') }}" placeholder="Cheque No" required>
                 
	              </div>
                @error('cheque_no')
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
                <label for="company_chit"><span>Company Chit</span></label>
                <input type="text" id="company_chit" class="form-control" name="company_chit"  value="{{ old('company_chit') }}" placeholder="Company Chit" required>
                 
	              </div>
                @error('company_chit')
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

<script type="text/javascript">

$(document).ready(function() {
  $('.date').datepicker({
    autoclose: true,
        todayHighlight: true,

  });

});
</script>
@endsection
