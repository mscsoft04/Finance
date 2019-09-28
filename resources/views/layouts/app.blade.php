<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
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
</head>
<body>
    <div id="app">
        

        
            @yield('content')
        
    </div>
	
	<script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>
</html>
