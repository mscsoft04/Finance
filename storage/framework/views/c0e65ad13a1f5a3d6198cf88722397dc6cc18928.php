<?php $__env->startSection('title', 'Subscriber'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="<?php echo e(url('subscriber')); ?>"><span>Subscriber</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
               <form method="post" action="<?php echo e(route('subscriber.store')); ?>" >
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
                                 <div class="form-label-group">
                                    <label for="branchname"><span>Branch Name</span></label>
                                    <select  id="branchname" name="branch_id"  class="form-control selectpicker" >
                                       <option value="">Select Branch</option>
                                       <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option  value="<?php echo e($branch->id); ?>" <?php echo e(old("branch_id") == $branch->id ? "selected":""); ?>><?php echo e($branch->branch_name .'('.$branch->unique_id.')'); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                                 <?php if ($errors->has('branch_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('branch_id'); ?>
                                 <span class="invalid-feedback" role="alert">
                                 <strong><?php echo e($message); ?></strong>
                                 </span>
                                 <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                 <div class="row">
                                    <!-- row start -->
                                    <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                       <div class="form-label-group">
                                          <label for="salutationname"><span>Salutation</span></label>
                                          <select  id="salutationname" name="salutation_name"  class="form-control selectpicker" >
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
                                          <label for="subscribername"><span>Subscriber Name</span></label>
                                          <input type="text" id="subscribername" name="subscriber_name" value="<?php echo e(old('subscriber_name')); ?>" class="form-control" placeholder="Subscriber Name" >
                                       </div>
                                       <?php if ($errors->has('subscriber_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subscriber_name'); ?>
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
                                          <input type="text" id="Initialname" name="Initial_name" value="<?php echo e(old('Initial_name')); ?>" class="form-control" placeholder="Initial" >
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
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group gardian">
                                          <input type="radio"  name="relation_type" value="father" <?php echo e(old("relation_type") == 'father' ? "checked":"checked"); ?> > &nbsp;&nbsp;Father Name &nbsp;&nbsp;
                                          <input type="radio"  name="relation_type" value="spouse" <?php echo e(old("relation_type") == 'spouse' ? "checked":""); ?>>&nbsp;&nbsp;Spouse's Name &nbsp;&nbsp;
                                          <input type="radio"  name="relation_type" value="other" <?php echo e(old("relation_type") == 'spouse' ? "checked":""); ?>>&nbsp;&nbsp;other
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
                                 </div>
                                 <!-- form row end -->
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-3 col-sm-3 col-md-4 col-lg-2 col-xl-2">
                                       <div class="form-label-group">
                                          <label>Select</label>
                                          <select class="form-control" name="name_of_father">
                                             <option value="S/o" <?php echo e(old("name_of_father") == "S/o" ? "selected":""); ?>>S/o</option>
                                             <option value="W/o" <?php echo e(old("name_of_father") == "W/o" ? "selected":""); ?>>W/o</option>
                                             <option value="D/o" <?php echo e(old("name_of_father") == "D/o" ? "selected":""); ?>>D/o</option>
                                             <option value="R/o" <?php echo e(old("name_of_father") == "R/o" ? "selected":""); ?>>R/o</option>
                                             
                                          </select>
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
                                    <div class="col-3 col-sm-3 col-md-8 col-lg-10 col-xl-10">
                                       <div class="form-label-group">
                                          <label for="txtfatherorspouse"><span>Father/SpouseName</span></label>
                                          <input type="text" id="txtfatherorspouse" name="realtion_name" value="<?php echo e(old('realtion_name')); ?>" class="form-control" placeholder="Father/SpouseName" >
                                       </div>
                                       <?php if ($errors->has('realtion_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('realtion_name'); ?>
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
                                          <input type="text" id="dateofobirth" name="dob" value="<?php echo e(old('dob')); ?>" class="form-control dob date">
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
                                          <input type="text" id="age" class="form-control" value="<?php echo e(old('age')); ?>" name="age" placeholder="Age" >
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
                                          <select  id="maritalstatus" name="marital_status"  class="form-control selectpicker" >
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
                                          <input type="text" id="dateofjoining" class="form-control date" name="doj" value="<?php echo e(old('doj')); ?>"  >
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
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="referedby"><span>Collection Area</span></label>
                                          <select  id="collectionarea" name="collection_area" class="form-control selectpicker" >
                                             <option value="">Collection Area</option>
                                             <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($area->id); ?>" <?php echo e(old("collection_area") == $area->id ? "selected":""); ?>><?php echo e($area->area_name .'('.$area->unique_id.')'); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                          </select>
                                       </div>
                                       <?php if ($errors->has('collection_area')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('collection_area'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="occupation"><span>Occupation</span></label>
                                          <input type="text" id="occupation" class="form-control" name="occupation" value="<?php echo e(old('occupation')); ?>" placeholder="Occupation" >
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
                                 </div>
                                 <!--Form row end --> 
                              </div>
                           </div>
                           <!--Card end -->
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 ID Proof
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="aadharno"><span>Aadhar No</span></label>
                                          <input type="text" id="aadharno" name="aadhar_no" value="<?php echo e(old('aadhar_no')); ?>" class="form-control" placeholder="Aadhar No" >
                                       </div>
                                       <?php if ($errors->has('aadhar_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('aadhar_no'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12  col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="panno"><span>PAN No</span></label>
                                          <input type="text" id="panno" name="pan_no" value="<?php echo e(old('pan_no')); ?>" class="form-control" placeholder="PAN No" >
                                       </div>
                                       <?php if ($errors->has('pan_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pan_no'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rationcardno"><span>Ration Card No</span></label>
                                          <input type="text" id="rationcardno" name="rationcard_no" value="<?php echo e(old('rationcard_no')); ?>" class="form-control" placeholder="Ration Card No" >
                                       </div>
                                       <?php if ($errors->has('rationcard_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rationcard_no'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="drivinglicence"><span>Driving Licence</span></label>
                                          <input type="text" id="drivinglicence" name="driving_licence" value="<?php echo e(old('driving_licence')); ?>" class="form-control" placeholder="Driving Licence" >
                                       </div>
                                       <?php if ($errors->has('driving_licence')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('driving_licence'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="voterid"><span>Voter ID</span></label>
                                          <input type="text" id="voterid" name="voter_id" value="<?php echo e(old('voter_id')); ?>" class="form-control" placeholder="Ration Card No" >
                                       </div>
                                       <?php if ($errors->has('voter_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('voter_id'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>GSTIN</span></label>
                                          <input type="text" id="gstin" name="gst_no" value="<?php echo e(old('gst_no')); ?>" class="form-control" placeholder="GSTIN" >
                                       </div>
                                       <?php if ($errors->has('gst_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gst_no'); ?>
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
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Other Details
                              </div>
                              <div class="card-body pad-38">
                                 <div class="form-row">
                                    <!-- Form row start-->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group gardian">
                                          <input type="radio" id="agentType" name="agent_Type" value="subscriber" <?php echo e(old("agent_Type") == "subscriber" ? "checked":""); ?>">&nbsp;&nbsp;Subscriber &nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType1"  name="agent_Type" value="employee" <?php echo e(old("agent_Type") == "employee" ? "checked":""); ?>">&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType2"  name="agent_Type" value="agent" <?php echo e(old("agent_Type") == "agent" ? "checked":""); ?>>&nbsp;&nbsp;Business Agent&nbsp;&nbsp;&nbsp;
                                          <input type="radio" id="agentType3"  name="agent_Type" value="self_joining" <?php echo e(old("agent_Type") == "self_joining" ? "checked":""); ?>>&nbsp;&nbsp;Self-Joining&nbsp;&nbsp;&nbsp;<br/>
                                          <input type="radio" id="agentType4"  name="agent_Type" value="others" <?php echo e(old("agent_Type") == "others" ? "checked":""); ?>>&nbsp;&nbsp;Others
                                       </div>
                                       <?php if ($errors->has('agent_Type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agent_Type'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="referedby"><span>Name</span></label>
                                          <input type="text" id="referedby" name="refered_by" value="<?php echo e(old('refered_by')); ?>" class="form-control" placeholder="Name" >
                                       </div>
                                       <?php if ($errors->has('refered_by')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('refered_by'); ?>
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
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="pfno"><span>Relationship</span></label>
                                          <select  id="relationship" name="relationship" class="form-control selectpicker" >
                                             <option value="">Relationship</option>
                                          
                                       <?php $__currentLoopData = $relationships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relationship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option  value="<?php echo e($relationship->id); ?>" <?php echo e(old("relationship") == $relationship->id ? "selected":""); ?>><?php echo e($relationship->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                          </select>
                                       </div>
                                       <?php if ($errors->has('relationship')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('relationship'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="relationfor"><span>Relation for</span></label>
                                          <input type="text" id="relationfor" class="form-control" name="relation_for" value="<?php echo e(old('relation_for')); ?>" placeholder="Relation for" >
                                       </div>
                                       <?php if ($errors->has('relation_for')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('relation_for'); ?>
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
                                    <!--Form row start -->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                       <div class="form-label-group">
                                          <label for="additionalnotes"><span>Additional Notes</span></label>
                                          <input type="text" id="additionalnotes" class="form-control" name="additional_notes" value="<?php echo e(old('additional_notes')); ?>" placeholder="Additional Notes">
                                       </div>
                                       <?php if ($errors->has('additional_notes')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('additional_notes'); ?>
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
                        </div>
                        <!-- col-xl-6 end--> 
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <!--col-xl-6 start -->
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Profile Details
                              </div>
                              <div class="card-body">
                                 <br/>
                                 <div class="form-row">
                                    <!--Form start -->
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                       <div class="profile-image">
                                          <img src="<?php echo e(asset('public/image/girl.svg')); ?>" class="profile"  alt="profile photo">
                                       </div>
                                       <div class="profile-image-save"  style="display: none">
                                          <img src="<?php echo e(asset('public/image/girl.svg')); ?>" class="profile"  alt="profile photo">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                       <input type="hidden" id="profile" class="form-control" name="image" value="<?php echo e(old('image')); ?>">
   
                                      <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()" >Preview</button>
                                       <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                       <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                       <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                                    </div>
                                 </div>
                                 <!-- Form row end-->
                              </div>
                           </div>
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
                                          <select  id="pstatename" name="p_state" class="form-control state" >
                                             <option value="">State Name</option>
                                             <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($state->id); ?>" <?php echo e(old("p_state") == $state->id ? "selected":""); ?>><?php echo e($state->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                          </select>
                                       </div>
                                       <?php if ($errors->has('p_state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_state'); ?>
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
                                          <select  id="pdistrictname" name="p_district" class="form-control city">
                                             <option value="">District</option>
                                             <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($city->id); ?>" <?php echo e(old("p_district") == $city->id ? "selected":""); ?>><?php echo e($city->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                          </select>
                                       </div>
                                       <?php if ($errors->has('p_district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_district'); ?>
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
                                          <select  id="ptalukname" name="p_taluk" class="form-control taluk" >
                                             <option value="">Taluk Name</option>
                                             <?php $__currentLoopData = $taluks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($taluk->id); ?>" <?php echo e(old("p_taluk") == $taluk->id ? "selected":""); ?>><?php echo e($taluk->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                          </select>
                                       </div>
                                       <?php if ($errors->has('p_taluk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_taluk'); ?>
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
                                          <select  id="pvillagename" name="p_village" class="form-control village">
                                             <option value="">Village</option> 
                                             
                                             <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $village): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($village->id); ?>" <?php echo e(old("p_village") == $village->id ? "selected":""); ?>><?php echo e($village->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                          </select>
                                       </div>
                                       <?php if ($errors->has('p_village')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_village'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="p_address"><span>Address</span></label>
                                          <textarea id="p_address" class="form-control" name="p_address"  ><?php echo e(old('p_address')); ?></textarea>
                                       </div>
                                       <?php if ($errors->has('p_address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_address'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="ppincode"><span>Pin code</span></label>
                                          <input type="text" id="ppincode" class="form-control" name="p_pincode" value="<?php echo e(old('p_pincode')); ?>" placeholder="Pin code" >
                                       </div>
                                       <?php if ($errors->has('p_pincode')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_pincode'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="mobileno"><span>Mobile No</span></label>
                                          <input type="text" id="mobileno" name="mobile_no" value="<?php echo e(old('mobile_no')); ?>" class="form-control" placeholder="Mobile No" >
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
                                    <div class="col-12 col-sm-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="phoneno"><span>Phone No</span></label>
                                          <input type="text" id="phoneno" name="phone_no" value="<?php echo e(old('phone_no')); ?>"  class="form-control" placeholder="Phone No" >
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
                                          <input type="text" id="mailid" name="mail_id" class="form-control" value="<?php echo e(old('mail_id')); ?>" placeholder="Mail ID" >
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
                           </div>
                           <!-- card end -->
                           <div class="form-row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                 <div class="form-label-group">
                                    <input type="checkbox" id="sameaddress" name="sameaddress" ><em> if Communicate Address (Same as above).</em>
                                 </div>
                              </div>
                           </div>
                           <div class="card card-box">
                              <!-- card start -->
                              <div class="card-header">
                                 Communicate Address
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>State</span></label>
                                          <select  id="rstatename" name="c_state" class="form-control c-state" >
                                             <option value="">State Name</option>
                                             <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($state->id); ?>" <?php echo e(old("c_state") == $state->id ? "selected":""); ?>><?php echo e($state->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                       </div>
                                       <?php if ($errors->has('c_state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('c_state'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>District</span></label>
                                          <select  id="rdistrictname" name="c_district" class="form-control c-ctiy">
                                             <option value="">District</option>
                                             <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($city->id); ?>" <?php echo e(old("c_district") == $city->id ? "selected":""); ?>><?php echo e($city->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                          </select>
                                       </div>
                                       <?php if ($errors->has('c_district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('c_district'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Taluk</span></label>
                                          <select  id="rtalukname" name="c_taluk" class="form-control c-taluk" >
                                             <option value="">Taluk Name</option>
                                             <?php $__currentLoopData = $taluks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($taluk->id); ?>" <?php echo e(old("c_taluk") == $taluk->id ? "selected":""); ?>><?php echo e($taluk->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                          </select>
                                       </div>
                                       <?php if ($errors->has('c_taluk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('c_taluk'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="gstin"><span>Village</span></label>
                                          <select  id="cvillage" name="c_village" class="form-control c-village">
                                             <option value="">Village</option>
                                             <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $village): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($village->id); ?>" <?php echo e(old("c_village") == $village->id ? "selected":""); ?>><?php echo e($village->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                                          </select>
                                       </div>
                                       <?php if ($errors->has('p_district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('p_district'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Address</span></label>
                                          <textarea id="rdoorno" class="form-control" name="c_address"  ><?php echo e(old('c_address')); ?></textarea>
                                       </div>
                                       <?php if ($errors->has('c_address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('c_address'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="rdoorno"><span>Pincode</span></label>
                                          <input type="text" id="rpincode" class="form-control" name="c_pincode" value="<?php echo e(old('c_pincode')); ?>" placeholder="Pin code" >
                                          <!-- <label for="rpincode"><span>Pin code</span></label> -->
                                       </div>
                                       <?php if ($errors->has('c_pincode')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('c_pincode'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                 </div>
                                 <!-- Form row end -->
                              </div>
                              <!-- card end -->
                           </div>
                           <div class="card card-box">
                              <div class="card-header">
                                 Income Details
                              </div>
                              <div class="card-body">
                                 <div class="form-row">
                                    <!-- Form row start -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="occupation"><span>Source of funds</span></label>
                                          <select  id="sourceoffund" name="sourceof_fund" class="form-control selectpicker" >
                                             <option value="">Source of funds</option>
                                             <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option  value="<?php echo e($source->id); ?>" <?php echo e(old("sourceof_fund") == $source->id ? "selected":""); ?>><?php echo e($source->name); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                          </select>
                                       </div>
                                       <?php if ($errors->has('sourceof_fund')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sourceof_fund'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="monthlyincome"><span>Monthly Income</span></label>
                                          <input type="text" id="monthlyincome" class="form-control" name="monthly_income" value="<?php echo e(old('monthly_income')); ?>" placeholder="Monthly Income" >
                                       </div>
                                       <?php if ($errors->has('monthly_income')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('monthly_income'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="retirementdate"><span>Retirement Date</span></label>
                                          <input type="text" id="retirementdate" name="retirement_date" value="<?php echo e(old('retirement_date')); ?>" class="form-control date" placeholder="Retirement Date" >
                                       </div>
                                       <?php if ($errors->has('retirement_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('retirement_date'); ?>
                                       <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                       </span>
                                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                       <div class="form-label-group">
                                          <label for="pfno"><span>PF No</span></label>
                                          <input type="text" id="pfno" class="form-control" value="<?php echo e(old('pf_no')); ?>" name="pf_no" placeholder="PF No" >
                                       </div>
                                       <?php if ($errors->has('pfno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pfno'); ?>
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
                        </div>
                        <!--col-xl-6 end -->
                     </div>
                     <!-- Form row end-->
                  </div>
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
     
     $('#sameaddress').click(function() {
      
         if ($(this).is(':checked')) {
           var state=$("#pstatename").val();
           var city=$("#pdistrictname").val();
           var taluk=$("#ptalukname").val();
           var village=$("#pvillagename").val();
           var address=$("#p_address").val();
           var Pincode=$("#ppincode").val();

           $("#rstatename").val(state);
           $("#rdistrictname").val(city);
           $("#rtalukname").val(taluk);
           $("#cvillage").val(village);
           $("#rdoorno").val(address);
           $("#rpincode").val(Pincode);
          
           
         }
     });
     $(".dob").datepicker().on('changeDate', function(e) {
        var age= calcAge($(this).val());
        $("#age").val(age);
       
    });
    

   function calcAge(dateString) {
   var birthday = +new Date(dateString);
   return~~ ((Date.now() - birthday) / (31557600000));
    }
   $(document).on("change",".state",function(){
     // alert($(this).val());
      let city=<?php echo json_encode($cities, 15, 512) ?>; 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result);
      $('#pdistrictname').html("");
      $("#ptalukname").html("");
      $("#pvillagename").html("");
      $('#pdistrictname').append($('<option>', { value : "" }).text("Select District"));
      $('#ptalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#pdistrictname').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".city",function(){
     // alert($(this).val());
      let taluk=<?php echo json_encode($taluks, 15, 512) ?>; 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $("#ptalukname").html("");
      $("#pvillagename").html("");
      
      $('#ptalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#ptalukname').append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".taluk",function(){
     // alert($(this).val());
      let village=<?php echo json_encode($villages, 15, 512) ?>; 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $("#pvillagename").html("");
      $('#pvillagename').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#pvillagename').append($('<option>', { value : value.id }).text(value.name));
      });

   });


//comunication addresss

   $(document).on("change",".c-state",function(){
     // alert($(this).val());
      let city=<?php echo json_encode($cities, 15, 512) ?>; 
      const result = city.filter(res => res.state_id==$(this).val());
      console.log(result); 
           

      $('#rdistrictname').html("");
      $("#rtalukname").html("");
      $("#cvillage").html("");
      $('#rdistrictname').append($('<option>', { value : "" }).text("Select District"));
      $('#rtalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#rdistrictname').append($('<option>', { value : value.id }).text(value.name));
      });

   });

   $(document).on("change",".c-ctiy",function(){
     // alert($(this).val());
      let taluk=<?php echo json_encode($taluks, 15, 512) ?>; 
      const result = taluk.filter(res => res.city_id==$(this).val());
      console.log(result);
      $("#rtalukname").html("");
      $("#cvillage").html("");
      
      $('#rtalukname').append($('<option>', { value : "" }).text("Select Taluk Name"));
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#rtalukname').append($('<option>', { value : value.id }).text(value.name));
      });

   });
   $(document).on("change",".c-taluk",function(){
     // alert($(this).val());
      let village=<?php echo json_encode($villages, 15, 512) ?>; 
      const result = village.filter(res => res.taluk_id==$(this).val());
      console.log(result);
      
      $("#cvillage").html("");
      $('#cvillage').append($('<option>', { value : "" }).text("Select Village"));
      $.each(result, function(key, value) {
          $('#cvillage').append($('<option>', { value : value.id }).text(value.name));
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\resources\views/subscriber/add.blade.php ENDPATH**/ ?>