@extends('layouts.main')

@section('title', 'subscriber')

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
                <button class="btn btn-link btn-sm btn-global btn-dark btn-fl-r" id="filterToggle" href="#">
      <i class="fas fa-filter"></i><span>Filter</span>
    </button>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered subscriber"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Subscriber Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Phone Number</th>
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
                  <div class="co
            </div>
        </div>
      
      <!-- /.container-fluid -->

      
  
  <!-- wrapper Ends -->

  

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
            { "data": "subscriber_name" },
            { "data": "mobile_no" },
            { "data": "mail_id" },
            { "data": "phone_no" },
            { "data": "c_address" },
            { render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '{{ route("subscriber.edit", [":id"]) }}';
                  url = url.replace(':id', row.id); 
                  return ' <a href="'+url+'" class="table-action-edit action-global"><span>Edit</span> <i class="fas fa-plus"></i></a>';

                }
                return data;
            } }
        ]
     });
});
</script>
@endsection
