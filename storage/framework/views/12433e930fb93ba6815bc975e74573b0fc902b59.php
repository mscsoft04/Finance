<table class="table table-hover">
	<thead>
		<tr>
			<th>S.No</th>
			<th>Check</th>
			<th>Group Name</th>
			<th>Ticket No</th>
			<th>CollectionType</th>
			<th>Inst Amount</th>
			<th>C Inst</th>
			<th>Due Amount</th>
			<th>AUC</th>
			<th>Pay</th>
			<th>Reg</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
		<tr>
			<td><?php echo e($loop->iteration); ?></td>
			<td class="text-success"><label><input type="checkbox" data-id="<?php echo e($row); ?>" class="group-check" name="check"></label></td>
			<?php if( (count($row) == 1 ) && (is_null($row[0]->auction_number))): ?>
			<td><a href="javascript:void(0)" class="add-payment-diabled" data-id="<?php echo e($row[0]); ?>"><?php echo e($row[0]->group_name); ?></a></td>
			<?php else: ?>
			<td><a href="javascript:void(0)" class="add-payment-diabled" data-id="<?php echo e($row[0]); ?>"><?php echo e($row[0]->group_name); ?></a></td>
			<?php endif; ?>
			<td><a href="javascript:void(0)" class="" data-id="<?php echo e($row[0]); ?>"><?php echo e($row[0]->ticket_number); ?></a></td>
			<td><?php echo e($row[0]->collection_type); ?></td>
			<td><?php echo e($row[0]->chit_value); ?></td>
			<?php if( (count($row) == 1 ) && (is_null($row[0]->auction_number))): ?>
			<td>0</td>
			<?php else: ?>
			<td><?php echo e(count($row)); ?></td>
			<?php endif; ?>
			<td><?php echo e($row[0]->monthly_due); ?></td>
			
			<?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if( $val->actionSub_id  == $id): ?>
			   <td><?php echo e('YES'); ?> </td>
			   <td><?php echo e(($val->status==0)? "NO" : "YES"); ?></td>
			   <?php break; ?>
			<?php else: ?>
			<?php if($loop->last): ?>
			<td><?php echo e('No'); ?> </td>
			<td><?php echo e('No'); ?> </td>
              <?php endif; ?>
			
			 <?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<td><?php echo e($row[0]->group_Type); ?> </td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table><?php /**PATH E:\New folder\resources\views/ledger/show_group.blade.php ENDPATH**/ ?>