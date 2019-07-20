@extends('layouts.main')

@section('title', 'scheme')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('scheme') }}"><span>Scheme</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('scheme.update', $scheme->id) }}" >
        @csrf
        @method('PATCH')
		    <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="chitvalue" class="form-control" name="chit_value"  value="{{ $scheme->chit_value }}" placeholder="Chit Value" required>
                  <label for="chitvalue"><span>Chit Value</span></label>
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
                <input type="text" id="noofmembers" class="form-control" name="no_of_member" value="{{ $scheme->no_of_member }}" placeholder="No. Of Member" required>
                  <label for="noofmembers"><span>No. Of Member</span></label>
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
                <input type="text" id="registrationfees" class="form-control" name="res_fees" value="{{ $scheme->res_fees }}" placeholder="Registration Fees" required>
                  <label for="registrationfees"><span>Registration Fees</span></label>
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
                <input type="text" id="enrollmentfees" class="form-control" name="enroll_fees" value="{{ $scheme->enroll_fees }}"  placeholder="Enrollment Fees" required>
                  <label for="enrollmentfees"><span>Enrollment Fees</span></label>
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
                <input type="text" id="letterfees" class="form-control" name="letter_fees" value="{{ $scheme->letter_fees  }}" placeholder="Letter Fees" required>
                  <label for="letterfees"><span>Letter Fees</span></label>
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
                <input type="text" id="shortform" class="form-control" name="sort_form" value="{{ $scheme->sort_form }}"  placeholder="Short Form" required>
                  <label for="shortform"><span>Short Form</span></label>
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
                <input type="text" id="monthlydue" class="form-control" name="monthly_due"  value="{{ $scheme->monthly_due  }}" placeholder="Monthly Due" required>
                  <label for="monthlydue"><span>Monthly Due</span></label>
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
