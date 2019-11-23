<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Finance') }}</title>

  <link href="{{ asset('public/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Fonts -->
   <link href="{{ asset('public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('public/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
  

  

</head>
<body id="page-top">
    @include('layouts.topnav')

    <div class="site-icon-wrapper">
  	<div class="container-fluid">
    	<div class="row"> 
        	<div class="col-lg-2 col-md-3 col-sm-4 col-10">
            	
            	<h2 class="site-icon-logo">Finance</h2>
            </div>
            @yield('breadcrumb')
            
            <div class="col-lg-1 col-md-1 display-none-mob">
            	<div class="top-bar-calander">
                	<span class="calander-day">{{date('d')}}</span>
                    <span class="calander-month">{{date('M')}}</span>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div id="wrapper">
  <!-- wrapper starts -->


    @include('layouts.nav')
    <div id="content-wrapper">

        <div class="container-fluid main-content-sec">
        

                @yield('content')

        </div>



    </div>

  <!-- wrapper Ends -->
  

  </div>
  
  <div class="modal fade bd-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="response-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="response">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
   
    
    
 
</div>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/vendor/bootstrap/js/popper.min.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('public/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
 <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
 <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('public/vendor/chart.js/Chart.min.js') }}"></script>

  <script src="{{ asset('public/js/sb-admin.js') }}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>




        {!! Toastr::message() !!}

  @yield('script')
  <script>  
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
   });

  </script> 
  
</body>
</html>
