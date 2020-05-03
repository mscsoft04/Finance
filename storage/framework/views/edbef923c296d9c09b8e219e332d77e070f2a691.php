<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo e(request()->is('home*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('home')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-tachometer-alt"></i>

          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item <?php echo e(request()->is('branch*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('branch')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-code-branch"></i>
          <span>Branch</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('subscriber*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('subscriber')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span>Subscriber</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('collection-area*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('collection-area')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-hand-holding-usd"></i>
          <span>Collection-Area</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('scheme*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('scheme')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="far fa-clock"></i>
          <span>Scheme</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('bank*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('bank')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-money-check-alt"></i>
          <span>Bank</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('group*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('group')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-users"></i>
          <span>Group</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('ledger*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('ledger')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-clipboard-list"></i>
          <span>Ledger</span></a>
      </li>
      <li class="nav-item <?php echo e(request()->is('agent*') ? 'active' : ''); ?> <?php echo e(request()->is('sourceOfFunds*') ? 'active' : ''); ?><?php echo e(request()->is('relationship*') ? 'active' : ''); ?><?php echo e(request()->is('documentType*') ? 'active' : ''); ?><?php echo e(request()->is('state*') ? 'active' : ''); ?><?php echo e(request()->is('city*') ? 'active' : ''); ?>

        <?php echo e(request()->is('taluk*') ? 'active' : ''); ?><?php echo e(request()->is('village*') ? 'active' : ''); ?><?php echo e(request()->is('master*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('master')); ?>">
          <i class="fas fa-chevron-right float-right"></i>
          <i class="fas fa-cogs"></i>
          <span>Master</span></a>
      </li>
      
      
    </ul>
<?php /**PATH E:\New folder\resources\views/layouts/nav.blade.php ENDPATH**/ ?>