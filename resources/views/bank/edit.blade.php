@extends('layouts.main')

@section('title', 'Bank')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('bank') }}"><span>Bank</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('bank.update', $bank->id) }}" >
        @csrf
        @method('PATCH')
		    
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
				             <option value="">Select Branch</option>
                     @foreach ($branches as $branch)
                     <option  value="{{$branch->id}}" {{ $bank->branch_id == $branch->id ? "selected":"" }}>{{$branch->branch_name}}<option>
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
					<input type="radio" id="BankType" name="type" value="Company" {{ $bank->type == "Company" ? "checked":"" }} >&nbsp;&nbsp;Company &nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType1"  name="type" value="Employee" {{ $bank->type == "Employee" ? "checked":"" }}>&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType2"  name="type" value="Customer" {{ $bank->type == "Customer" ? "checked":"" }} >&nbsp;&nbsp;Customer Agent&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType3"  name="type" value="Official" {{ $bank->type == "Official" ? "checked":"" }} >&nbsp;&nbsp;Official&nbsp;&nbsp;&nbsp;
					<input type="radio" id="BankType4"  name="type" value="Agent" {{ $bank->type == "Agent" ? "checked":"" }}>&nbsp;&nbsp;Agent
                </div>
                @error('type')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="bankname-name" class="form-control" name="account_holder" value="{{ $bank->account_holder }}" placeholder="Account Holder Name" required>
                  <label for="bankname-name"><span>Acount Holder</span></label>
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
                  <input type="text" id="bankname" class="form-control" name="bank_name" value="{{ $bank->bank_name }}" placeholder="Bank Name" required>
                  <label for="bankname"><span>Bank Name</span></label>
                </div>
                @error('bank_name')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
			  
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="accountnumber" class="form-control" name="ac_number" value="{{ $bank->ac_number }}" placeholder="Account Number" required>
                  <label for="accountnumber"><span>Account Number</span></label>
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
                  <input type="text" id="ifsccode" class="form-control" name="ifsc"  value="{{ $bank->ifsc }}" placeholder="IFSC Code" required>
                  <label for="ifsccode"><span>IFSC Code</span></label>
                </div>
                @error('ifsc')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="bankbaranchname" class="form-control" name="branch" value="{{ $bank->branch }}" placeholder="Bank Branch Name" required>
                  <label for="bankbaranchname"><span>Bank Branch Name</span></label>
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
                <input type="text" id="openingbalance" class="form-control" name="opening_balance" value="{{ $bank->opening_balance }}" placeholder="Opening Balance" required>
                  <label for="openingbalance"><span>Opening Balance</span></label>
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
                  <textarea id="doorno" class="form-control" name="address"  >{{ $bank->address }}</textarea>
                  <label for="doorno"><span>Address</span></label>
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
          </div>
          </div>
          		  
		
        </form>
       
      </div>
    </div>
                     </div>
                
                </div>
                
            </div>
       

@endsection
