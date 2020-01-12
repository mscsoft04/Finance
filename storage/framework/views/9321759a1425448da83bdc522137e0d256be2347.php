<nav class="navbar navbar-expand navbar-purpel bg-purpel static-top">

    <a class="navbar-brand mr-1" href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('public/image/logo.png')); ?>" class="logo"  alt="TEST"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <ul class="ms-core-listMenu-root ms-core-listmenu-desk ml-4 mt-0 mb-0">
    	<li> <a  href="<?php echo e(url('home')); ?>"> <i class="fas fa-tachometer-alt"></i> Dashboard </a></li>
      <li> <a  href="<?php echo e(url('branch')); ?>"> <i class="fas fa-code-branch"></i> Branch</a>

    </ul>

    <ul class="ms-core-listMenu-root ms-core-listmenu-mob ml-auto ml-md-0 mx-1">

        <li class="dropdown no-arrow ">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-caret-square-down fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="<?php echo e(url('home')); ?>"> <i class="fas fa-tachometer-alt"></i> Dashboard </a>
          <a class="dropdown-item" href="<?php echo e(url('branch')); ?>"> <i class="fas fa-code-branch"></i> Branch</a>

        </div>
      </li>

    </ul>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group search-nav">
        <!-- <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
 -->
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle user-circle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="user-circle-text">
            <?php echo e(Auth::user()->name[0]); ?>

          </i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
         
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           <?php echo e(__('Logout')); ?>

       </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
        </div>
      </li>
    </ul>

  </nav>
<?php /**PATH E:\finance\finance\resources\views/layouts/topnav.blade.php ENDPATH**/ ?>