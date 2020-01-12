<?php $__env->startSection('title', 'agent'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="<?php echo e(url('agent')); ?>"><span>Agent</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
                        	<div class="fl_in_h"><h5>Agent</h5></div>
                            <div class="fr_in_h">
                                <button class="btn btn-link btn-sm btn-global btn-dark btn-fl-r" id="ExportReporttoExcel" >
                                    <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                    <span>Export</span></button>
                            <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="<?php echo e(route('agent.create')); ?>">
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
                    <th>Agent ID</th>
                    <th>Agent Name</th>
                    <th>Father Name</th>
                    <th>Mobile Number</th>
                    <th>Occupation</th>
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
            filename: 'Agent',
            title :'agent',
            exportOptions: {
                    columns: [ 0, 1, 2,3,4,5]
                }
        }
    ],
        "ajax": "<?php echo e(route('agent.getdata')); ?>",
        
        "columns":[
          { "data": "unique_id" },
            { "data": "agent_name" },
            { "data": "name_of_father" },
            { "data": "mobile_no" },
            { "data": "occupation" },
            { "data": "address" },
            { "data": "id",render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '<?php echo e(route("agent.edit", [":id"])); ?>';
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
        var show_url="<?php echo e(route('agent.show', ['agent' =>":id"])); ?>";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('agent');
                    $('#myModal').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
     $("#ExportReporttoExcel").on("click", function() {
              table.button( '.buttons-excel' ).trigger();
      });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\finance\finance\resources\views/agent/index.blade.php ENDPATH**/ ?>