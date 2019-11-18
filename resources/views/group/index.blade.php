@extends('layouts.main')

@section('title', 'Group')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('group') }}"><span>Group</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
            	<div class="fl_in_h"><h5>Group</h5></div>
                <div class="fr_in_h">
                <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="{{ route('group.create') }}">
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
                    <th>Type</th>
                    <th>Name</th>
                    <th>Auction Date</th>
                    <th>Start Date</th>
                    <th>First Due Date</th>
                    <th>Total Fd</th>
                    <th>Pso Number</th>
                    <th>Blaw Number</th>
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
        "ajax": "{{ route('group.getdata') }}",
        
        "columns":[
            { "data": "type" },
            { "data": "name", render: function ( data, type, row ) {
                if ( type === 'display' ) {
                
                   var view =' <a href="javascript:void(0)" class="assign" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="Assign">'+row.name+'</a>';
                   return view;
                }
                return data;
            } },
            { "data": "auction_date", render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var show_url="{{ route('group.auction.index', ['group' =>":id"]) }}";
                     show_url = show_url.replace(':id', row.id);
                   var view =' <a href="'+show_url+'" class="auction-view" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="Auction">'+row.auction_date+'</a>';
                   return view;
                }
                return data;
            } },
            { "data": "start_date" },
            { "data": "first_due_date" },
            { "data": "total_fd" },
            { "data": "pso_number" },
            { "data": "blaw_number" },
            { "data": "id", render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '{{ route("group.edit", [":id"]) }}';
                  url = url.replace(':id', row.id); 
                  
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="fas fa-plus"></i></a>';
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global show-view" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="View"><span></span> <i class="fas fa-eye"></i></a>';
                  
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global assign" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="Assign"><span></span> <i class="fas fa-user-plus"></i></a>';
                   return view;
                }
                return data;
            } }
        ]
     });
     $(document).on("click",".show-view",function(e) {
      e.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="{{ route('group.show', ['group' =>":id"]) }}";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Group');
                    $('#myModal').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
     $(document).on("click",".assign",function(es) {
      es.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="{{ route('groupAssign.show', ['groupAssign' =>":id"]) }}";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Group');
                    $('#myModal').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
     $(document).on("click",".assign-mode",function(ea) {
          ea.preventDefault();
          
        $(".assgin-view").show();    
        
    });
    $(document).on("click",".assign-cancel",function(ed) {
          ed.preventDefault();
        $(".assgin-view").hide();    
        
    });
      $(document).on('keyup', '.autocomplete', function () {
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#data').fadeIn();  
              $('#data').html(data);
          }
         });
        }
    });

    $(document).on('click', '.custom', function(){  
       
        $('#data').fadeOut(); 
		let data=JSON.parse($(this).attr('data-id')); 
		$('.autocomplete').val(data.subscriber_name);
    $('#subscriber_id').val(data.id);  
    
		
		
		console.log(data);
    }); 
 

  $(document).on('click', '.assign-data', function(eda){    
    eda.preventDefault();
    var assign = $('#assgin-data')[0];
    var assigndata = new FormData(assign);
    var show_url="{{ route('groupAssign.store') }}";
          $.ajax({
              type: "POST",
              enctype: 'multipart/form-data',
              url: show_url,
              data: assigndata,
              processData: false,
              contentType: false,
              cache: false,
              dataType: "json",
                success: function( data, textStatus, jQxhr ){
                  $('#myModal').modal('hide')
                  toastr.success(data.message, data.title);

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

  });
  $(document).on("click",".group-assgin-edit",function(esd) {
    esd.preventDefault();
      let data=JSON.parse($(this).attr('data-id')); 
       $(".assgin-view").show();
       $("#collectionareaname").val(data.subscriber_name);
       $("#Type").val(data.collection_type);
       $("#ticket_number").val(data.ticket_number);
       $("#agent_id").val(data.agent_id);
       $("#subscriber_id").val(data.subscriber_id);
       $("#group_id").val(data.group_id);
       $("#id").val(data.id);

      /// console.log(data.subscriber_name);

});
$(document).on("click",".group-assgin-delete",function(es) {
      es.preventDefault();
       var id=$(this).attr("data-id");
       var token = $('input[name="_token"]').val();
          $.ajax({
            url: "groupAssign/"+id,
              type: 'DELETE',
              data: {
                  "id": id,
                  "_token": token,
              },
                success: function( data, textStatus, jQxhr ){
                  $('#myModal').modal('hide')
                  toastr.success(data.message, data.title);

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
     $(document).on("click",".auction",function(es) {
      es.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Auction');
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
