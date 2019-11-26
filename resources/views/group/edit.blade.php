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
          <div class="row">
            
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
     
      <form method="post" action="{{ route('group.update', $group->id) }}" >

        @csrf
        @method('PATCH')
        <div class="card card-box">
          <!-- card start -->
          <div class="card-header">
             Group Detail
          </div>
          <div class="card-body">
             <div class="form-row">
                <!--Form row start -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="branchname"><span>Branch</span></label>
                    <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
                         <option value="">Select Branch</option>
                         @foreach ($branches as $branch)
                         <option  value="{{$branch->id}}" {{  $group->branch_id == $branch->id ? "selected":"" }}>{{$branch->branch_name}}</option>
                         @endforeach
                         </select>
     
                    </div>
                    @error('branch_id')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="type"><span>Type</span></label>
                    <input type="text" id="type" class="form-control" name="type"  value="{{  $group->type }}" placeholder="Type" >
                    
                    </div>
                    @error('type')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="schemes"><span>Schemes</span></label>
                    <select  id="schemes" name="schemes_id"  class="form-control selectpicker" >
                         <option value="">Select Schemes</option>
                         @foreach ($schemes as $scheme)
                         <option  value="{{$scheme->id}}" {{  $group->schemes_id == $scheme->id ? "selected":"" }}>{{$scheme->sort_form}}</option>
                         @endforeach
                         </select>
     
                    </div>
                    @error('schemes_id')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="name"><span>Name</span></label>
                    <input type="text" id="name" class="form-control" name="name" value="{{  $group->name }}" placeholder="Name" >
                      
                    </div>
                    @error('name')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="auction_day"><span>Day of Auction</span></label>
                    <input type="text" id="auction_day" name="auction_day" value="{{  $group->auction_day }}" class="form-control" placeholder="Auction Day" >
                    
                    </div>
                    @error('auction_day')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                  <div class="form-label-group">
                    <label for="auction_time"><span>Auction Time</span></label>
                    <input type="text" id="auction_time" class="form-control" name="auction_time"  value="{{  $group->auction_time }}" placeholder="Auction Time" >
                    
                    </div>
                    @error('auction_time')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                  <div class="form-label-group">
                    <label for="first_auction_date"><span>First Auction Date</span></label>
                    <input type="text" id="first_auction_date" name="first_auction_date" value="{{  $group->first_auction_date }}" class="form-control date" placeholder="First Auction Date" >
                    
                    </div>
                    @error('first_auction_date')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                   <div class="form-label-group">
                      <label for="second-auction-date"><span>Second Auction Date</span></label>
                      <input type="text" id="second-auction-date" name="second_auction_date" value="{{  $group->second_auction_date }}" class="form-control date" placeholder="Second Auction Date">
                   </div>
                   @error('second_auction_date')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                   <div class="form-label-group">
                      <label for="last-auction-date"><span>Last Auction Date</span></label>
                      <input type="text" id="last-auction-date" name="last_auction_date" value="{{  $group->last_auction_date }}" class="form-control date" placeholder="Last Auction Date">
                   </div>
                   @error('last_auction_date')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
             </div>
             <!--Form row end -->
          </div>
       </div> <!-- Card end -->
        <div class="card card-box"> 
          <!-- card start -->
          <div class="card-header">
             Reister Office  Detail
          </div>
          <div class="card-body">
             <div class="form-row">
                <!--Form row start -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="pso_number"><span>PSO Number</span></label>
                    <input type="text" id="pso_number" class="form-control" name="pso_number"  value="{{  $group->pso_number }}" placeholder="PSO Number" >
                     
                    </div>
                    @error('pso_number')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="pso_date"><span>Pso Date </span></label>
                      <input type="text" id="pso_date" class="form-control date" name="pso_date" value="{{  $group->pso_date }}" placeholder="PSO Date" >
                        
                      </div>
                      @error('pso_date')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="blaw_number"><span>Blaw Number</span></label>
                      <input type="text" id="blaw_number" class="form-control" name="blaw_number"  value="{{  $group->blaw_number }}" placeholder="Blaw Number" >
                       
                      </div>
                      @error('blaw_number')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="blaw_date"><span>Blaw Date</span></label>
                      <input type="text" id="blaw_date" class="form-control date" name="blaw_date" value="{{  $group->blaw_date }}" placeholder="Blaw Date" >
                        
                      </div>
                      @error('blaw_date')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                   <div class="form-label-group">
                      <label for="by-law-amount"><span>By Law Amount</span></label>
                      <input type="text" class="form-control" name ="blaw_amount" value="{{  $group->blaw_amount }}" id ="by-law-amount" placeholder="By Law Amount">
                   </div>
                   @error('blaw_amount')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>

                </div>

              </div>
            </div> <!-- Card end-->
      </div> <!-- col-mg-6 end-->
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card card-box"> 
          <!-- card start -->
          <div class="card-header">
             Fixed Deposite Details
          </div>
          <div class="card-body">
             <div class="form-row">
                <!--Form row start -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-label-group">
                    <label for="fd_branch"><span>FD Branch</span></label>
                    <input type="text" id="fd_branch" class="form-control" name="fd_branch" value="{{  $group->fd_branch }}"  placeholder="FD Branch" >
                     
                    </div>
                    @error('fd_branch')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd_number"><span>FD Number</span></label>
                      <input type="text" id="fd_number" class="form-control" name="fd_number" value="{{  $group->fd_number }}"  placeholder="FD Number" >
                       
                      </div>
                      @error('fd_number')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd_date"><span>FD Date</span></label>
                      <input type="text" id="fd_date" name="fd_date" value="{{  $group->fd_date }}" class="form-control date" placeholder="FD Date" >
                      
                      </div>
                      @error('fd_date')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                   <div class="form-label-group">
                      <label for="FD Amount"><span>FD Amount</span></label>
                      <input type="text" class="form-control" name ="fd_amount"  value="{{  $group->fd_amount }}" id ="FD Amount" placeholder="FD Amount">
                   </div>
                   @error('fd_amount')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="Commision"><span>Commission</span></label>
                      <input type="text" class="form-control" name ="commission" value="{{  $group->commission }}" id ="Commision" placeholder="Commision">
                    </div>
                    @error('commission')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="total_fd"><span>Total Fd</span></label>
                      <input type="text" id="total_fd" name="total_fd" value="{{  $group->total_fd }}" class="form-control" placeholder="Total Fd" >
                      
                      </div>
                      @error('total_fd')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd_rate_interrest"><span>Fd Rate Interrest</span></label>
                      <input type="text" id="fd_rate_interrest" name="fd_rate_interrest" value="{{  $group->fd_rate_interrest }}" class="form-control" placeholder="Fd Rate Interrest" >
                      
                      </div>
                      @error('fd_rate_interrest')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd-maturity-interest"><span>FD Maturity Interest</span></label>
                      <input type="text" class="form-control" name ="fd_maturity_interest" value="{{  $group->fd_maturity_interest }}" id ="fd-maturity-interest" placeholder="FD Maturity Interest">
                    </div>
                    @error('fd_maturity_interest')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd-maturity-date"><span>FD Maturity Date</span></label>
                      <input type="text" class="form-control date" name ="fd_maturity_date" value="{{  $group->fd_maturity_date }}" id ="fd-maturity-date" placeholder="FD Maturity Date">
                    </div>
                    @error('fd_maturity_date')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="maturity_amount"><span>Maturity Amount</span></label>
                      <input type="text" id="maturity_amount" name="maturity_amount" value="{{  $group->maturity_amount }}" class="form-control" placeholder="Maturity Amount" >
                      
                      </div>
                      @error('maturity_amount')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="fd_bank"><span>FD Bank</span></label>
                      <input type="text" id="fd_bank" class="form-control" name="fd_bank" value="{{  $group->fd_bank }}"  placeholder="FD Bank" >
                        
                      </div>
                      @error('fd_bank')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="cheque_no"><span>Cheque No</span></label>
                      <input type="text" id="cheque_no" class="form-control" name="cheque_no"  value="{{  $group->cheque_no }}" placeholder="Cheque No" >
                       
                      </div>
                      @error('cheque_no')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
              </div>
            </div> <!-- Card end-->
            <div class="card card-box"> 
            <!-- card start -->
              <div class="card-header">
               Other  Details
              </div>
              <div class="card-body">
                <div class="form-row">
                  <!--Form row start -->
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group">
                      <label for="company_chit"><span>Company Chit</span></label>
                      <input type="text" id="company_chit" class="form-control" name="company_chit"  value="{{  $group->company_chit }}" placeholder="Company Chit" >
                       
                      </div>
                      @error('company_chit')
                       <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-label-group gardian">
                      <input type="radio" id="agentType" name="group_Type" {{  $group->group_Type == 'register' ? "checked":"checked" }} value="register">&nbsp;&nbsp;Register &nbsp;&nbsp;&nbsp;
                      <input type="radio" id="agentType1" name="group_Type" {{  $group->group_Type == 'un-register' ? "checked":"" }} value="un-register">&nbsp;&nbsp;Un Register&nbsp;&nbsp;&nbsp;
                   </div>
                   <br/>
                  </div>
                </div>

              </div>
            </div> <!-- Card end-->
        </div>
      </div> <!--Row End -->
      <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
         <div class="form-row btntop">
            <div class="col-md-2">
               <input type="submit" class="btn btn-primary btn-block btn-blue">
            </div>
            <div class="col-md-2">
               <a href="{{url()->previous()}}" class="btn btn-block btn-dark">Cancel</a>
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
    format: 'yyyy/m/d',

  });

});
</script>
@endsection
