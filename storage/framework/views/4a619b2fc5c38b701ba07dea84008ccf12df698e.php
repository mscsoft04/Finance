<?php $__env->startSection('content'); ?>

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-lg-5 login-sec">
				<h2 class="text-center">Login Now</h2>
				<form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
					  <div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input id="inputEmail" type="email"   class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Email address"  name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

						
                      </div>
                      <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
					  <div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" placeholder="Password" required autocomplete="current-password">

                      </div>
                      <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
<!-- 
					 <div class="form-group custom-control custom-checkbox">
                     <input class="form-check-input" type="checkbox" name="remember" id="customCheck" <?php echo e(old('remember') ? 'checked' : ''); ?>>

						<label class="custom-control-label" for="customCheck">Remember</label>
					 </div> -->
                     <div class="form-group custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="customCheck">Remember</label>
                             </div>
					<button type="submit" class="btn btn-login login-btn">Submit</button>
                </form>
                <?php if(Route::has('password.request')): ?>
                                    <a class="fpass" id="forgotPass" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
				
			</div>
			
			<div class="col-md-7 col-sm-12 col-lg-7 banner-sec">
			</div>
		</div>
	</div>
</section>

    <!-- <div class="row justify-content-center">
       <div class="card card-login mx-auto mt-5">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">



							 <div class="form-label-group">
                                <input id="inputEmail" type="email"   class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Email address"  name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
								<label for="inputEmail"><span>Email address</span></label>
                            </div>
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                        </div>


                        <div class="form-group">


                             <div class="form-label-group">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" placeholder="Password" required autocomplete="current-password">
								 <label for="password"><span> password</span></label>
                               </div>

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\finance\finance\resources\views/auth/login.blade.php ENDPATH**/ ?>