@extends('layouts.main')

@section('title', 'taluk')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('taluk') }}"><span>taluk</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
        <form method="post" action="{{ route('taluk.update', $taluk->id) }}" >
        @csrf
        @method('PATCH')
          		  
		 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <label for="collectionareaname"><span>City Name</span></label>
                <select  id="branchname" name="city_id"  class="form-control selectpicker" >
				             <option value="">Select City</option>
                     @foreach ($cities as $city)
                     <option  value="{{$city->id}}" {{ $taluk->city_id == $city->id ? "selected":"" }}>{{$city->name}}</option>
                     @endforeach
                     </select>
 
                </div>
                @error('city_id')
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
                <label for="collectionareaname"><span>Taluk Name</span></label>
                <input type="text" id="collectionareaname"name="name" value="{{ $taluk->name }}"  class="form-control" placeholder="Taluk Name" required>
                  
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
