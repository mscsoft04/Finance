<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   <form method="post" id="creditPaymentData">
      <?php echo csrf_field(); ?>
  <div class="form-row">
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Payment Date <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Payment Date" name="payment_date" id="paymentdate">
           <div class="input-group-append">
              <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
           </div>
        </div>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Payment Type <span class="text-danger">*</span></label>
        <select class="form-control pay-type" name="payment_type">
           <option selected="selected" value="cash">Cash</option>
           <option value="cheque">Cheque</option>
        </select>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Bill Amount<span class="text-danger">*</span></label>
        <input type="text" name="paid_amount" class="form-control" placeholder="Bill Amount">
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Pending Amount<span class="text-danger">*</span></label>
        <input type="text" name="bank_name" class="form-control" value="<?php echo e($total["total_amount"]?? 0 - $cus_credit_amount ?? 0); ?>" placeholder="Pending Amount" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Credit Amount<span class="text-danger">*</span></label>
     <input type="text" name="credit_amount" class="form-control" value="<?php echo e($cus_credit_amount ?? 0); ?>" placeholder="Credit Amount" readonly>
     </div>
     
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Bank Name<span class="text-danger">*</span></label>
        <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="Bank Name" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Cheque Number<span class="text-danger">*</span></label>
        <input type="text" name="cheque_number" class="form-control" id="cheque_number" placeholder="Cheque Number" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Cheque Date <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Cheque Date" name="cheque_date" id="ChequeDate" disabled>
           <div class="input-group-append">
              <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
           </div>
        </div>
     </div>
     <input type="hidden" class="form-control" value="<?php echo e($subscriber_id); ?>" name="subscriber_id" >
     <input type="hidden" class="form-control" value="<?php echo e($group_id); ?>" name="group_id" >
  </div>

  <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
   <div class="form-row btntop">
      <div class="col-md-2">
         <a href="JavaScript:void(0)" type="button" class="btn btn-primary btn-block btn-yellow creditPayment-add">Save</a>
         
      </div>
      <div class="col-md-2">
         <a href="" data-dismiss="modal" class="btn btn-block btn-dark">Cancel</a>
      </div>
   </div>
</div>
</form>


 
 <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12">
    <div class="table-scroll-limit">
      <table class="table table-streched table-hover">
        <thead>
          <tr>
            <th>AuctionNo</th>
            <th>Days</th>
            <th>DueAmount</th>
            <th>PaidAmount</th>
            <th>DiscountAmount</th>
            <th>PenaltyAmount</th>
            <th>PendingAmount</th>
            <th>TotalAmount</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row['auction_number']); ?></td>
            <td><?php echo e($row['days']); ?></td>
            <td><?php echo e(number_format((float)$row['due_amount'], 2)); ?></td>
            <td><?php echo e(number_format((float)$row['paid_amount'], 2)); ?></td>
            <td><?php echo e(number_format((float)$row['discount'], 2)); ?></td>
            <td><?php echo e(number_format((float)$row['penalty'], 2)); ?></td>
            <td><?php echo e(number_format((float)$row['pending_amount'], 2)); ?></td>
            <td><?php echo e(number_format((float)$row['total_amount'], 2)); ?></td>
            
        
            
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
  
  <script type="text/javascript">

$(document).ready(function() {
 

  $('#paymentdate,#ChequeDate').datepicker({
    autoclose: true,
    todayHighlight: true,

  });
});
</script><?php /**PATH E:\New folder\resources\views/ledger/add.blade.php ENDPATH**/ ?>