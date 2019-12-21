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
		@foreach ($results as $row)
		
	<tr  data-toggle="collapse" data-id=@json($row) data-target="#demo-{{ $row['unique_id'] }}" class="accordion-toggle">
	    <td>{{ $row['unique_id'] }}</td>
		<td>{{ $row['auction_number'] }}</td>
		<td>{{ $row['auction_date'] }}</td>
		<td class="text-right">{{ $row['due_amount'] }}</td>
		<td>{{ $row['payment_date'] }}</td>
		<td class="text-right">{{ $row['paid_amount'] }}</td>
		<td class="text-right">{{ $row['penalty'] }}</td>
		<td class="text-right">{{ $row['pending_amount'] }}</td>
		<td class="text-right">{{ $row['discount'] }}</td>
		<td>{{ ($row['status']==0)?"Pending":"Completed"}}</td>
		
	  </tr>
	  <tr>
		<td colspan="10" class="hiddenRow">
			<div id="demo-{{ $row['unique_id'] }}" class="accordian-body collapse">
				
			</div>
		</td>
	  </tr>
	  @endforeach 
	</tbody>
  </table>