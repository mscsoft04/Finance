<?php $__env->startSection('title', 'Group'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="<?php echo e(url('group')); ?>"><span>Group</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	
        	<div class="row">
            	<div class="col-lg-12">
                	<div class="widget-bg"> 
                		<div class="card mb-3">
          <div class="card-header">
          	<div class="inner-header">
            	<div class="fl_in_h"><h5>Group</h5></div>
                <div class="fr_in_h">
                    <button class="btn btn-link btn-sm btn-global btn-dark btn-fl-r" id="ExportReporttoExcel" >
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <span>Export</span></button>
                <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="<?php echo e(route('group.create')); ?>">
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
                    <th>Group Id</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Auction Day</th>
                    <th>First Auction Date</th>
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
      
      

  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {

  var editIcon = function ( data, type, full, meta ) {
        if ( type === 'display' ) {
            return ' <a href="#" class="table-action-edit action-global"><span>Edit</span> <i class="fas fa-plus"></i></a>';
        }
        return data;
    };
   var table= $('.subscriber').DataTable({
        "processing": true,
        "serverSide": true,
        "buttons": [
        { 
            extend: 'excel',
            filename: 'Group',
            title :'Group',
            exportOptions: {
                    columns: [ 0, 1, 2,3,4,5]
                }
        }
      ],
        "ajax": "<?php echo e(route('group.getdata')); ?>",
        
        "columns":[
            {"data":"unique_id"},
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
                  var show_url="<?php echo e(route('group.auction.index', ['group' =>":id"])); ?>";
                     show_url = show_url.replace(':id', row.id);
                   var view =' <a href="'+show_url+'" class="auction-view" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="Auction">'+row.auction_day+'</a>';
                   return view;
                }
                return data;
            } },
            { "data": "first_auction_date" },
            { "data": "total_fd" },
            { "data": "pso_number" },
            { "data": "blaw_number" },
            { "data": "id", render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '<?php echo e(route("group.edit", [":id"])); ?>';
                  url = url.replace(':id', row.id); 
                  
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="fas fa-edit"></i></a>';
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global show-view" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="View"><span></span> <i class="fas fa-eye"></i></a>';
                  
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global assign" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="Assign"><span></span> <i class="fas fa-user-plus"></i></a>';
                   return view;
                }
                return data;
            } }
        ]
     });
     $("#ExportReporttoExcel").on("click", function() {
              table.button( '.buttons-excel' ).trigger();
      });
     $(document).on("click",".show-view",function(e) {
      e.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="<?php echo e(route('group.show', ['group' =>":id"])); ?>";
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
        var show_url="<?php echo e(route('groupAssign.show', ['groupAssign' =>":id"])); ?>";
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
          url:"<?php echo e(route('autocomplete.fetch')); ?>",
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
    var show_url="<?php echo e(route('groupAssign.store')); ?>";
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\resources\views/group/index.blade.php ENDPATH**/ ?>