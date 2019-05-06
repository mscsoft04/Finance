<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
   <link href="{{ asset('public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('public/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('public/css/bootstrap/bootstrap.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body id="page-top">
    @include('layouts.topnav')

  <div class="site-icon-wrapper">
  	<div class="container-fluid">
    	<div class="row">
        	<div class="col-lg-2 col-md-3 col-sm-4 col-10">

            	<h2 class="site-icon-logo">TEST</h2>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-2">

            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="#"><span>Dashboard </span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Overview</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 display-none-mob">
            	<div class="top-bar-calander">
                	<span class="calander-day">07</span>
                    <span class="calander-month">mar</span>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/js/sb-admin.js') }}"></script>

  <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('public/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('public/vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('public/vendor/datatables/dataTables.bootstrap4.js') }}"></script>



  <!-- Demo scripts for this page-->
 {{--  <script src="{{ asset('public/js/demo/datatables-demo.js') }}"></script> --}}
</body>
</html>
