@extends('layouts.main')

@section('title', 'Bank')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('bank') }}"><span>Bank</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('bank.store') }}" >
        @csrf
		    
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="doorno"><span>Branch</span></label>
                <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
				             <option value="">Select Branch</option>
                     @foreach ($branches as $branch)
                     <option  value="{{$branch->id}}" {{ old("branch_id") == $branch->id ? "selected":"" }}>{{$branch->branch_name}}</option>
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
		  
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
					<input type="radio" id="BankType" name="type" value="Company" {{ old("type") == "Company" ? "checked":"" }} >&nbsp;&nbsp;Company &nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType1"  name="type" value="Employee" {{ old("type") == "Employee" ? "checked":"" }}>&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType2"  name="type" value="Customer" {{ old("type") == "Customer" ? "checked":"" }} >&nbsp;&nbsp;Customer Agent&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType3"  name="type" value="Official" {{ old("type") == "Official" ? "checked":"" }} >&nbsp;&nbsp;Official&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType4"  name="type" value="Agent" {{ old("type") == "Agent" ? "checked":"" }}>&nbsp;&nbsp;Agent
                </div>
                @error('type')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="bankname-name"><span>Acount Holder</span></label>
                  <input type="text" id="bankname-name" class="form-control" name="account_holder" value="{{ old('account_holder') }}" placeholder="Account Holder Name" required>
                 
                </div>
                @error('account_holder')
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
                <label for="bankname"><span>Bank Name</span></label>
                  <input type="text" id="bankname" class="form-control" name="bank_name" value="{{ old('bank_name') }}" placeholder="Bank Name" required>
                  
                </div>
                @error('bank_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
			  <div class="col-md-6">
                <div class="form-label-group">
                <label for="accountnumber"><span>Account Number</span></label>
                  <input type="text" id="accountnumber" class="form-control" name="ac_number" value="{{ old('ac_number') }}" placeholder="Account Number" required>
                 
                </div>
                @error('ac_number')
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
                <label for="ifsccode"><span>IFSC Code</span></label>
                  <input type="text" id="ifsccode" class="form-control" name="ifsc"  value="{{ old('ifsc') }}" placeholder="IFSC Code" required>
                  
                </div>
                @error('ifsc')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="bankbaranchname"><span>Bank Branch Name</span></label>
                 <input type="text" id="bankbaranchname" class="form-control" name="branch" value="{{ old('branch') }}" placeholder="Bank Branch Name" required>
                 
                </div>
                @error('branch')
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
                <label for="openingbalance"><span>Opening Balance</span></label>
                <input type="text" id="openingbalance" class="form-control" name="opening_balance" value="{{ old('opening_balance') }}" placeholder="Opening Balance" required>
                 
	              </div>
                @error('opening_balance')
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
                  <textarea id="doorno" class="form-control" name="address"  >{{ old('address') }}</textarea>
                  
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
