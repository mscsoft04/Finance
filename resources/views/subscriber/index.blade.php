@extends('layouts.main')

@section('title', 'subscriber')

@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('subscriber') }}"><span>Subscriber</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
@endsection

@section('content')
	
        	<div class="row">
            	<div class="col-lg-12">
                	<div class="widget-bg"> 
                		<div class="card mb-3">
                      <div class="card-header">
                      	<div class="inner-header">
                        	<div class="fl_in_h"><h5>subscriber</h5></div>
                            <div class="fr_in_h">
                            <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="{{ route('subscriber.create') }}">
                  <i class="fas fa-plus"></i><span>Add</span>
                </a>
                           
                                
                   <span class="dropdown filterdropdown">
                   <button class="btn btn-link btn-sm btn-global btn-dark tn-fl-r" id="dropdownMenuButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-filter"></i><span>Filter</span>

                    </button>
                    <div class="dropdown-menu">
                      <form class="px-4 py-3">
                        <div class="form-group">
                          <label for="exampleDropdownFormEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleDropdownFormPassword1">Test</label>
                          <select  class="form-control ng-untouched ng-pristine ng-valid" tabindex="0"><option  value="">Select </option><!----><option  value="1">Selected</option><option  value="2">Rejected</option><option  value="3">Hold</option><option  value="4">Ready for interview</option><option  value="5">Yet to confirm</option><option  value="6">Interview in Progress</option><option  value="7">Offer Declined</option>
                          </select>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                     
                    </div>
                </span>
                </div>

            </div>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered subscriber"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th>Subscriber ID</th>
                    <th>Subscriber Name</th>
                    <th>Father Name</th>
                    <th>Mobile Number</th>
                    <th>Occupationr</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>
                     </div>
                
                </div>
                </div>           
      
     

  

@endsection

@section('script')
<script type="text/javascript">

$(document).ready(function() {

  var editIcon = function ( data, type, full, meta ) {
        if ( type === 'display' ) {
            return ' <a href="#" class="table-action-edit action-global"><span>Edit</span> <i class="fas fa-plus"></i></a>';
        }
        return data;
    };
     $('.subscriber').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('subscriber.getdata') }}",
        
        "columns":[
          { "data": "unique_id" },
            { "data": "subscriber_name" },
            { "data": "realtion_name" },
            { "data": "mobile_no" },
            { "data": "occupation" },
            { "data": "c_address" },
            { "data": "id",render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '{{ route("subscriber.edit", [":id"]) }}';
                  url = url.replace(':id', row.id); 
                  
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="far fa-edit"></i></a>';
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global show" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="View"><span></span> <i class="fas fa-eye"></i></a>';
                   return view;
                }
                return data;
            } }
        ]
     });
     $(document).on("click",".show",function(e) {
      e.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="{{ route('subscriber.show', ['subscriber' =>":id"]) }}";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Subscriber');
                    $('#myModal').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
});
</script>
@endsection
