@extends('layouts.main')

@section('title', 'scheme')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('scheme') }}"><span>Scheme</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('scheme.store') }}" >
        @csrf
		    <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="chitvalue"><span>Chit Value</span></label>
                <input type="text" id="chitvalue" class="form-control" name="chit_value"  value="{{ old('chit_value') }}" placeholder="Chit Value" required>
                 
	              </div>
                @error('chit_value')
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
                <label for="noofmembers"><span>No. Of Member</span></label>
                <input type="text" id="noofmembers" class="form-control" name="no_of_member" value="{{ old('no_of_member') }}" placeholder="No. Of Member" required>
                 
	              </div>
                @error('no_of_member')
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
                <label for="registrationfees"><span>Registration Fees</span></label>
                <input type="text" id="registrationfees" class="form-control" name="res_fees" value="{{ old('res_fees') }}" placeholder="Registration Fees" required>
                  
	              </div>
                @error('res_fees')
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
                <label for="enrollmentfees"><span>Enrollment Fees</span></label>
                <input type="text" id="enrollmentfees" class="form-control" name="enroll_fees" value="{{ old('enroll_fees') }}"  placeholder="Enrollment Fees" required>
                 
	              </div>
                @error('enroll_fees')
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
                <label for="letterfees"><span>Letter Fees</span></label>
                <input type="text" id="letterfees" class="form-control" name="letter_fees" value="{{ old('letter_fees') }}" placeholder="Letter Fees" required>
                 
	              </div>
                @error('letter_fees')
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
                <label for="shortform"><span>Short Form</span></label>
                <input type="text" id="shortform" class="form-control" name="sort_form" value="{{ old('sort_form') }}"  placeholder="Short Form" required>
                  
	              </div>
                @error('sort_form')
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
                <label for="monthlydue"><span>Monthly Due</span></label>
                <input type="text" id="monthlydue" class="form-control" name="monthly_due"  value="{{ old('monthly_due') }}" placeholder="Monthly Due" required>
                
	              </div>
                @error('monthly_due')
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
