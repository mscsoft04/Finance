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
		@foreach ($data as $row)
		
	<tr>
		<td>{{ $row->payment_date }}</td>
		<td>{{ $row->paid_amount }}</td>
		<td>{{ $row->penalty_amount }}</td>
		<td>{{ $row->pending_amount }}</td>
		<td>{{ $row->discount_amount }}</td>
		<td>{{ $row->credit_amount }}</td>
	</tr>
	  @endforeach 
	</tbody>
  </table>