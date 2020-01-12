<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>

    <!-- Fonts -->
   <link href="<?php echo e(asset('public/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo e(asset('public/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('public/css/bootstrap/bootstrap.css')); ?>" rel="stylesheet">
     
    <!-- Styles -->
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('public/css/admin.css')); ?>" rel="stylesheet">
	  <link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        

        
            <?php echo $__env->yieldContent('content'); ?>
        
    </div>
	
	<script src="<?php echo e(asset('public/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\finance\finance\resources\views/layouts/app.blade.php ENDPATH**/ ?>