<table class="table table-hover table-bordered">
	<thead>
	  <tr>
		
		<th>Payment Date</th>
		<th>Paid Amount</th>
		<th>Penalty Amount</th>
		<th>Pending Amount</th>
		<th>Discount Amount</th>
		<th>Credit Amount</th>
	  </tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
	<tr>
		<td><?php echo e($row->payment_date); ?></td>
		<td><?php echo e($row->paid_amount); ?></td>
		<td><?php echo e($row->penalty_amount); ?></td>
		<td><?php echo e($row->pending_amount); ?></td>
		<td><?php echo e($row->discount_amount); ?></td>
		<td><?php echo e($row->credit_amount); ?></td>
	</tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</tbody>
  </table><?php /**PATH E:\New folder\resources\views/ledger/auction_details.blade.php ENDPATH**/ ?>