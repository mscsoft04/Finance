<?php $__env->startSection('title', 'Agent'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="<?php echo e(url('agent')); ?>"><span>Agent</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
         <li class="breadcrumb-item active">Add</li>
      </ul>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <div class="widget-bg">
         <div class="card  ">
            <div class="card-body">
               <form method="post" action="<?php echo e(route('agent.store')); ?>" >
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                     <div class="form-row">
                         <!-- Form row start-->
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- col-xl-6 start-->
                             <div class="card card-box">
                                 <!-- card start -->
                                 <div class="card-header">
                                     General Details
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <!-- row start -->
                                         <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="salutationname"><span>Salutation</span></label>
                                                 <select name="salutation_name" class="form-control">
                                                   <option  value="Mr" <?php echo e(old("salutation_name") == "Mr" ? "selected":""); ?>>Mr</option>
                                                   <option  value="Mrs" <?php echo e(old("salutation_name") == "Mrs" ? "selected":""); ?>>Mrs</option>
                                                   <option  value="Dr" <?php echo e(old("salutation_name") == "Dr" ? "selected":""); ?>>Dr</option>
                                                   <option  value="Prof" <?php echo e(old("salutation_name") == "Prof" ? "selected":""); ?>>Prof</option>
                                                   <option  value="Rev" <?php echo e(old("salutation_name") == "Rev" ? "selected":""); ?>>Rev</option>
                                                   <option  value="Other" <?php echo e(old("salutation_name") == "Other" ? "selected":""); ?>>Other</option>
                                                 </select>
                                             </div>
                                      <?php if ($errors->has('salutation_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('salutation_name'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="subscribername"><span>Agent Name</span></label>
                                                 <input type="text"  name="agent_name"  class="form-control" value="<?php echo e(old('agent_name')); ?>" placeholder="Agent Name">
                                             </div>
                                             <?php if ($errors->has('agent_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agent_name'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="Initialname"><span>Initial</span></label>
                                                 <input type="text"  name="Initial_name" value="<?php echo e(old('Initial_name')); ?>" class="form-control" placeholder="Initial">
                                             </div>
                                             <?php if ($errors->has('Initial_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Initial_name'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                     </div>
                                     <!-- row end -->

                                     <!-- form row end -->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">
                                             <div class="form-label-group">
                                                 <label>Select</label>
                                                 <select class="form-control" name="relation_type">
                                                   <option value="S/o" <?php echo e(old("relation_type") == "S/o" ? "selected":""); ?>>S/o</option>
                                                   <option value="W/o" <?php echo e(old("relation_type") == "W/o" ? "selected":""); ?>>W/o</option>
                                                   <option value="D/o" <?php echo e(old("relation_type") == "D/o" ? "selected":""); ?>>D/o</option>
                                                   <option value="R/o" <?php echo e(old("relation_type") == "R/o" ? "selected":""); ?>>R/o</option>

                                                 </select>
                                             </div>
                                             <?php if ($errors->has('relation_type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('relation_type'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                             <div class="form-label-group">
                                                 <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                                 <input type="text"  name="name_of_father" value="<?php echo e(old('name_of_father')); ?>" class="form-control" placeholder="Father/SpouseName">
                                             </div>
                                             <?php if ($errors->has('name_of_father')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name_of_father'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                     </div>
                                     <!--Form row end -->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                             <div class="form-label-group">
                                                 <label for="dateofobirth"><span>Dob</span></label>
                                                 <input type="text" name="dob" value="<?php echo e(old('dob')); ?>" class="form-control nominee-dob date">
                                             </div>
                                             <?php if ($errors->has('dob')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dob'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                             <div class="form-label-group">
                                                 <label for="age"><span>Age</span></label>
                                                 <input type="text"  class="form-control nominee-age" value="<?php echo e(old('age')); ?>" name="age" placeholder="Age">
                                             </div>
                                             <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                             <div class="form-label-group gendertab">
                                                 <input type="radio" id="Male"  name="gender" value="male" <?php echo e(old("gender") == "male" ? "checked":"checked"); ?>>&nbsp;&nbsp;Male&nbsp;&nbsp;                        
                                                 <input type="radio" id="Female" name="gender" value="female" <?php echo e(old("gender") == "female" ? "checked":""); ?>>&nbsp;&nbsp;Female&nbsp;&nbsp; 
                                                 <input type="radio" id="Transgender" name="gender"  value="transgender" <?php echo e(old("gender") == "transgender" ? "checked":""); ?>>&nbsp;&nbsp;Transgender
                                              
                                             </div>
                                             <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                     </div>
                                     <!-- Form end-->
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="maritalstatus"><span>Marital Status</span></label>
                                                 <select id="maritalstatus" name="marital_status" class="form-control selectpicker">
                                                   <option  value="Single" <?php echo e(old("marital_status") == "Single" ? "selected":""); ?>>Single</option>
                                                   <option  value="Married" <?php echo e(old("marital_status") == "Married" ? "selected":""); ?>>Married</option>
                                                   <option  value="Widowed" <?php echo e(old("marital_status") == "Widowed" ? "selected":""); ?>>Widowed</option>
                                                   <option  value="Divorced" <?php echo e(old("marital_status") == "Divorced" ? "selected":""); ?>>Divorced</option>
                                                 </select>
                                             </div>
                                             <?php if ($errors->has('marital_status')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('marital_status'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="dateofjoining"><span>DOJ</span></label>
                                                 <input type="text"  class="form-control date" name="doj" value="<?php echo e(old('doj')); ?>">
                                             </div>
                                             <?php if ($errors->has('doj')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('doj'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                     </div>
                                     <!-- Form row end-->
                                     <div class="form-row">

                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="occupation"><span>Occupation</span></label>
                                                 <input type="text"  class="form-control" name="occupation" value="<?php echo e(old('occupation')); ?>" placeholder="Occupation">
                                             </div>
                                             <?php if ($errors->has('occupation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('occupation'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <!--Form row start -->
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="referedby"><span>Qualification</span></label>
                                                 <input type="text" name="qualification"  value="<?php echo e(old('qualification')); ?>" class="form-control" placeholder="Qualification">
                                             </div>
                                             <?php if ($errors->has('qualification')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('qualification'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         
                                     </div>
                                     <!--Form row end -->
                                     
                                      <!-- Form row end-->
                                      <div class="form-row">
                                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                          <div class="form-label-group">
                                             <label for="referedby"><span>Designation / Department</span></label>
                                             <input type="text" name="designation"  value="<?php echo e(old('designation')); ?>" class="form-control" placeholder="Designation / Department">
                                         </div>
                                         <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?>
                                         <span class="invalid-feedback" role="alert">
                                         <strong><?php echo e($message); ?></strong>
                                         </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                      </div>

                                       <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                           <div class="form-label-group">
                                               <label for="occupation"><span>Document Type</span></label>
                                               <select class="form-control" name="document_id">
                                                <option value="">Document Type</option>
                                                <?php $__currentLoopData = $document; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($doc->id); ?>" <?php echo e(old("document_id") == $doc->id ? "selected":""); ?>><?php echo e($doc->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>   </div>
                                           <?php if ($errors->has('document_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('document_id'); ?>
                                           <span class="invalid-feedback" role="alert">
                                           <strong><?php echo e($message); ?></strong>
                                           </span>
                                          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                       </div>
                                       <!--Form row start -->
                                       <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                           <div class="form-label-group">
                                               <label for="referedby"><span>Document Number</span></label>
                                               <input type="text" name="document_number"  value="<?php echo e(old('document_number')); ?>" class="form-control" placeholder="Document Number">
                                           </div>
                                           <?php if ($errors->has('document_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('document_number'); ?>
                                           <span class="invalid-feedback" role="alert">
                                           <strong><?php echo e($message); ?></strong>
                                           </span>
                                          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                       </div>
                                       
                                   </div>
                                   <!--Form row end -->
                                   
                                 </div>
                                 
                             </div>
                             <!--Card end -->

                         </div>
                         <!-- col-xl-6 end-->
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!--col-xl-6 start -->

                             <div class="card card-box">
                                 <!-- card start -->
                                 <div class="card-header">
                                     Address Details
                                 </div>
                                 <div class="card-body">
                                     <div class="form-row">
                                         <!-- Form row start-->
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>State</span></label>
                                                 <select  name="state" class="form-control nominee_state">
                                                  <option value="">State Name</option>
                                                  <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option  value="<?php echo e($state->id); ?>" <?php echo e(old("state") == $state->id ? "selected":""); ?>><?php echo e($state->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                 </select>
                                             </div>
                                             <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>District</span></label>
                                                 <select name="district" class="form-control nominee_district">
                                                  <option value="">District</option>
                                                  <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option  value="<?php echo e($city->id); ?>" <?php echo e(old("district") == $city->id ? "selected":""); ?>><?php echo e($city->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                 </select>
                                             </div>
                                             <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="gstin"><span>Taluk</span></label>
                                                 <select id="ptalukname" name="taluk" class="form-control nominee_taluk">
                                                  <option value="">Taluk Name</option>
                                                  <?php $__currentLoopData = $taluks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option  value="<?php echo e($taluk->id); ?>" <?php echo e(old("taluk") == $taluk->id ? "selected":""); ?>><?php echo e($taluk->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                             </div>
                                             <?php if ($errors->has('taluk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('taluk'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                             <div class="form-label-group">
                                                 <label for="pvillagename"><span>Village</span></label>
                                                 <select  name="village" class="form-control nominee_village">
                                                  <option value="">Village</option> 
   
                                                  <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $village): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option  value="<?php echo e($village->id); ?>" <?php echo e(old("village") == $village->id ? "selected":""); ?> ><?php echo e($village->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                             </div>
                                             <?php if ($errors->has('village')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('village'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                        
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="p_address"><span>Address</span></label>
                                                 <textarea  class="form-control" name="address" rows="2" value="<?php echo e(old('address')); ?>"></textarea>
                                             </div>
                                             <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="ppincode"><span>Pin code</span></label>
                                                 <input type="text"  class="form-control" name="pincode" value="<?php echo e(old('pincode')); ?>" placeholder="Pin code">
                                             </div>
                                             <?php if ($errors->has('pincode')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pincode'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="mobileno"><span>Mobile No</span></label>
                                                 <input type="text"  name="mobile_no" value="<?php echo e(old('mobile_no')); ?>" class="form-control" placeholder="Mobile No">
                                             </div>
                                             <?php if ($errors->has('mobile_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile_no'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="phoneno"><span>Phone No</span></label>
                                                 <input type="text"  name="phone_no" value="<?php echo e(old('phone_no')); ?>" class="form-control" placeholder="Phone No">
                                             </div>
                                             <?php if ($errors->has('phone_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone_no'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                             <div class="form-label-group">
                                                 <label for="mailid"><span>Mail ID</span></label>
                                                 <input type="text"  name="mail_id" class="form-control" value="<?php echo e(old('mail_id')); ?>" placeholder="Mail ID">
                                             </div>
                                             <?php if ($errors->has('mail_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mail_id'); ?>
                                             <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                             </span>
                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                         </div>
                                     </div>
                                     <!-- Form row end-->
                                 </div>
                                 <!-- card end -->

                             </div>
                             <!--col-xl-6 end -->
                         </div>
                         <!-- Form row end-->
                     </div>
                     <div class="card card-box">
                        <div class="card-header">
                            Profile Image
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="form-row">
                               <!--Form start -->
                               <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                   <div class="profile-image">
                                       <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="profile photo">
                                   </div>
                                   <div class="profile-image-save" style="display: none">
                                       <img src="<?php echo e(asset('public/image/girl.svg')); ?>" class="profile" alt="profile photo">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                   <input type="hidden"  class="form-control profile" name="image" value="<?php echo e(old('image')); ?>">
                                   <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()">Preview</button>
                                   <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                   <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                   <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                               </div>
                           </div>
                       </div>
                    </div>
                    
                           
                     <!-- Form group end-->
                     
                     
            
                  <!-- Form group end-->
                  <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
                     <div class="form-row btntop">
                        <div class="col-md-2">
                           <input type="submit" class="btn btn-primary btn-block btn-blue">
                        </div>
                        <div class="col-md-2">
                           <a href="<?php echo e(url()->previous()); ?>"  class="btn btn-block btn-dark">Cancel</a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('public/vendor/webcam/webcam.js')); ?>"></script>

<script type="text/javascript">
   $(document).ready(function() {
      

     $('.date').datepicker({
               todayHighlight: true, 
               format: 'yyyy-m-d',
               autoclose: true, 
           
     });
     
   
     

   
   

     $(".nominee-dob").datepicker().on('changeDate', function(e) {
        var age= calcAge($(this).val());
        $(".nominee-age").val(age);
       
    });
    

   function calcAge(dateString) {
   var birthday = +new Date(dateString);
   return~~ ((Date.now() - birthday) / (31557600000));
    }
   $(document).on("change",".nominee_state",function(){
     // alert($(this).val());
      let city=<?php echo json_encode($cities, 15, 512) ?>; 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('.nominee_district').html("");
      $(".nominee_taluk").html("");
      $(".nominee_village").html("");
      $('.nominee_district').append($('<option>', { value : "" }).text("Select District"));
      $(".nominee_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $('.nominee_district').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".nominee_district",function(){
     // alert($(this).val());
      let taluk=<?php echo json_encode($taluks, 15, 512) ?>; 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $(".nominee_taluk").html("");
      $(".nominee_village").html("");
      
      $(".nominee_taluk").append($('<option>', { value : "" }).text("Select Taluk Name"));
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".nominee_taluk").append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".nominee_taluk",function(){
     // alert($(this).val());
      let village=<?php echo json_encode($villages, 15, 512) ?>; 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $(".nominee_village").html("");
      $(".nominee_village").append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
        $(".nominee_village").append($('<option>', { value : value.id }).text(value.name));
      });
    });


  
  


   
   });

 Webcam.set({
         width: 320,
         height: 240,
         image_format: 'png',
         jpeg_quality: 90
      });
      Webcam.attach( ".profile-image" );
   function preview_snapshot() {
         // freeze camera so user can preview pic
         Webcam.freeze();
         
         $(".preview").hide();
         $(".save").show();
         $(".cancel").show();
      }
      
      function cancel_preview() {
         // cancel preview freeze and return to live camera feed
         Webcam.unfreeze();
         
         $(".preview").show();
         $(".save").hide();
         $(".cancel").hide();
      }
      
      function save_photo() {
         // actually snap photo (from preview freeze) and display it
         Webcam.snap( function(data_uri) {
            // display results in page
            $('.profile-image').hide();
          $('.profile-image-save').html( 
               '<h2>Here is your image:</h2>' + 
               '<img src="'+data_uri+'"/>');
          console.log(data_uri);
            $("#profile").val(data_uri);
            $('.profile-image-save, .delete').show();
               $(".preview").hide();
               $(".save").hide();
               $(".cancel").hide();
         } );

      }
         function delete_preview() {
         // cancel preview freeze and return to live camera feed
          Webcam.unfreeze();
          $('.profile-image-save').hide();
          $('.profile-image').show();
         $('.preview').show();
         $('.save').hide();
         $('.cancel').hide();
         $('.delete').hide();
      }
      

   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\finance\finance\resources\views/agent/add.blade.php ENDPATH**/ ?>