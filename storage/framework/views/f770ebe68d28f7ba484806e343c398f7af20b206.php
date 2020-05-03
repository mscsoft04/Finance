<?php $__env->startSection('title', 'Bank'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="<?php echo e(url('bank')); ?>"><span>Bank</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
            	<div class="fl_in_h"><h5>Bank</h5></div>
                <div class="fr_in_h">
                    <button class="btn btn-link btn-sm btn-global btn-dark btn-fl-r" id="ExportReporttoExcel" >
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <span>Export</span></button>
                <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="<?php echo e(route('bank.create')); ?>">
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
                    <th>Branch</th>
                    <th>AC Type</th>
                    <th>Bank Name</th>
                    <th>Bank Branch</th>
                    <th>IFSC</th>
                    <th>AC Holder Name</th>
                    <th>AC Number</th>
                    <th>Openning Balance</th>
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
      
      <!-- /.container-fluid -->

      
  
  <!-- wrapper Ends -->

  

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
  var table=  $('.subscriber').DataTable({
        "processing": true,
        "serverSide": true,
        "buttons": [
        { 
            extend: 'excel',
            filename: 'Bank',
            title :'Bank',
            exportOptions: {
                    columns: [ 0, 1, 2,3,4,5]
                }
        }
      ],
        "ajax": "<?php echo e(route('bank.getdata')); ?>",
        
        "columns":[
            { "data": "branch_name" },
            { "data": "type" },
            { "data": "bank_name" },
            { "data": "branch" },
            { "data": "ifsc" },
            { "data": "account_holder" },
            { "data": "ac_number" },
            { "data": "opening_balance" },
            { "data": "address" },
            { "data": "id",render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '<?php echo e(route("bank.edit", [":id"])); ?>';
                  var show_url="<?php echo e(route('bank.show', ['bank' =>":id"])); ?>";
                  url = url.replace(':id', row.id); 
                  show_url = show_url.replace(':id', row.id);
                  
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="fas fa-plus"></i></a>';
                   view +=' <a href="javascript:void(0)" class="table-action-edit action-global show" data-id="'+row.id+'" data-toggle="tooltip" data-placement="bottom" title="View"><span></span> <i class="fas fa-eye"></i></a>';
                   return view;
                }
                return data;
            } }
        ]
     });

     $("#ExportReporttoExcel").on("click", function() {
              table.button( '.buttons-excel' ).trigger();
      });
     $(document).on("click",".show",function(e) {
      e.preventDefault();
       var id=$(this).attr("data-id");
        var show_url="<?php echo e(route('bank.show', ['bank' =>":id"])); ?>";
          show_url = show_url.replace(':id', id);
          $.ajax({
                url: show_url,
                dataType: 'html',
                type: 'get',
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Bank');
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\resources\views/bank/index.blade.php ENDPATH**/ ?>