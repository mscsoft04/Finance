<?php $__env->startSection('title', 'Master'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="<?php echo e(url('home')); ?>"><span>Dashboard</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
         <li class="breadcrumb-item">
             Master
         </li>
      </ul>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
                    
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('state')); ?>" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>State</h4>
                <h2></h2>
                <i class="far fa-map"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('city')); ?>" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>City</h4>
                <h2 class="w-75"></h2>
                <i class="fas fa-building"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('taluk')); ?>" class="after-loop-item card border-0 card-guides shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Taluk</h4>
                <h2 class="w-75"></h2>
            <i class="fas fa-home "></i>
            </div>
            </a>
        </div>
         <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('village')); ?>" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Village</h4>
                <h2></h2>
                <i class="fas fa-map-pin"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('documentType')); ?>" class="after-loop-item card border-0 card-guides">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Document Type</h4>
                <h2></h2>
                <i class="fas fa-file" aria-hidden="true"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('relationship')); ?>" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Relationship</h4>
                <h2></h2>
                <i class="fas fa-user" aria-hidden="true"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('sourceOfFunds')); ?>" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Source Of Funds</h4>
                <h2></h2>
                <i class="fas fa-rupee-sign"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('employee')); ?>" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Employee</h4>
                <h2></h2>
                <i class="fas fa-users"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="<?php echo e(url('agent')); ?>" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Agent</h4>
                <h2></h2>
                <i class="fas fa-users"></i>
                </div>
            </a>
        </div>
        
         
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\finance\finance\resources\views/master.blade.php ENDPATH**/ ?>