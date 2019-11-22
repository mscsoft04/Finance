@extends('layouts.main')

@section('title', 'Scheme')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('scheme') }}"><span>Scheme</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
            	<div class="fl_in_h"><h5>Scheme</h5></div>
                <div class="fr_in_h">
                <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="{{ route('scheme.create') }}">
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
                    <th>Scheme ID</th>
                    <th>Chit Value</th>
                    <th>No Of Member</th>
                    <th>Registration Fees</th>
                    <th>Enrollment Fees</th>
                    <th>Letter Fees</th>
                    <th>Short Form</th>
                    <th>Monthly Due</th>
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
        "ajax": "{{ route('scheme.getdata') }}",
        
        "columns":[
            { "data":"unique_id"},
            { "data": "chit_value" },
            { "data": "no_of_member" },
            { "data": "res_fees" },
            { "data": "enroll_fees" },
            { "data": "letter_fees" },
            { "data": "sort_form" },
            { "data": "monthly_due" },
            { "data": "id",render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '{{ route("scheme.edit", [":id"]) }}';
                  var show_url="{{ route('scheme.show', ['scheme' =>":id"]) }}";
                  url = url.replace(':id', row.id); 
                  show_url = show_url.replace(':id', row.id);
                  
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="fas fa-edit"></i></a>';
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
        var show_url="{{ route('scheme.show', ['scheme' =>":id"]) }}";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Scheme');
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
