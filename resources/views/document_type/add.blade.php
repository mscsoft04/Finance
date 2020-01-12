@extends('layouts.main')

@section('title', 'Document Type')

@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('documentType') }}"><span>Document </span><i class="fas fa-arrow-left fa-fw"></i></a>
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
      <form method="post" action="{{ route('documentType.store') }}" >
        @csrf
		
          		  
		<div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="collectionareaname"><span>Document Type</span></label>
                <input type="text" id="collectionareaname"name="name" value="{{ old('name') }}"  class="form-control" placeholder="Document Type" required>
                  
	              </div>
                @error('name')
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
