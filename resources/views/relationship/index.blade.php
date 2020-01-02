@extends('layouts.main')

@section('title', 'Relationship')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('relationship') }}"><span>Relationship</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
            	<div class="fl_in_h"><h5>Relationship</h5></div>
                <div class="fr_in_h">
                    <button class="btn btn-link btn-sm btn-global btn-dark btn-fl-r" id="ExportReporttoExcel" >
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <span>Export</span></button>
                <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r"  href="{{ route('relationship.create') }}">
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
                    <th>Relationship</th>
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
            filename: 'relationship',
            title :'relationship',
            exportOptions: {
                    columns: [ 0, 1]
                }
        }
       ],
        "ajax": "{{ route('relationship.getdata') }}",
        
        "columns":[
            {"data":"name"},
            {  "data": "id", render: function ( data, type, row ) {
                if ( type === 'display' ) {
                  var url = '{{ route("relationship.edit", [":id"]) }}';
                  url = url.replace(':id', row.id); 
                  var view=' <a href="'+url+'" class="table-action-edit action-global" data-toggle="tooltip" data-placement="bottom" title="Edit"><span></span> <i class="far fa-edit"></i></a>';
                  return view;
               
                }
                return data;
            } }
        ]
     });
     $("#ExportReporttoExcel").on("click", function() {
              table.button( '.buttons-excel' ).trigger();
      });
    
});
</script>
@endsection
