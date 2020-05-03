<table class="table table-hover table-bordered">
	<thead>
	  <tr>
		<th>Acution Id</th>
		<th>Int</th>
		<th>Action Date</th>
		<th>Due Amount</th>
		<th>Last Payment Date</th>
		<th>Paid Amount</th>
		<th>Penalty Amount</th>
		<th>Pending Amount</th>
		<th>Discount Amount</th>
		<th>Status</th>
	  </tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
	<tr  data-toggle="collapse" data-id=<?php echo json_encode($row, 15, 512) ?> data-target="#demo-<?php echo e($row['unique_id']); ?>" class="accordion-toggle">
	    <td><?php echo e($row['unique_id']); ?></td>
		<td><?php echo e($row['auction_number']); ?></td>
		<td><?php echo e($row['auction_date']); ?></td>
		<td class="text-right"><?php echo e($row['due_amount']); ?></td>
		<td><?php echo e($row['payment_date']); ?></td>
		<td class="text-right"><?php echo e($row['paid_amount']); ?></td>
		<td class="text-right"><?php echo e($row['penalty']); ?></td>
		<td class="text-right"><?php echo e($row['pending_amount']); ?></td>
		<td class="text-right"><?php echo e($row['discount']); ?></td>
		<td><?php echo e(($row['status']==0)?"Pending":"Completed"); ?></td>
		
	  </tr>
	  <tr>
		<td colspan="10" class="hiddenRow">
			<div id="demo-<?php echo e($row['unique_id']); ?>" class="accordian-body collapse">
				
			</div>
		</td>
	  </tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</tbody>
  </table><?php /**PATH E:\New folder\resources\views/ledger/show_acution.blade.php ENDPATH**/ ?>