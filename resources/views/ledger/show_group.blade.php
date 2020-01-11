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
		@foreach ($data as $row)
		
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td class="text-success"><label><input type="checkbox" data-id="{{$row}}" class="group-check" name="check"></label></td>
			@if ( (count($row) == 1 ) && (is_null($row[0]->auction_number)))
			<td><a href="javascript:void(0)" class="add-payment-diabled" data-id="{{$row[0] }}">{{ $row[0]->group_name }}</a></td>
			@else
			<td><a href="javascript:void(0)" class="add-payment-diabled" data-id="{{$row[0] }}">{{ $row[0]->group_name }}</a></td>
			@endif
			<td><a href="javascript:void(0)" class="" data-id="{{$row[0] }}">{{ $row[0]->ticket_number }}</a></td>
			<td>{{ $row[0]->collection_type }}</td>
			<td>{{ $row[0]->chit_value }}</td>
			@if ( (count($row) == 1 ) && (is_null($row[0]->auction_number)))
			<td>0</td>
			@else
			<td>{{ count($row) }}</td>
			@endif
			<td>{{ $row[0]->monthly_due }}</td>
			
			@foreach ($row as $val)
			@if ( $val->actionSub_id  == $id)
			   <td>{{ 'YES' }} </td>
			   <td>{{ ($val->status==0)? "NO" : "YES"}}</td>
			   @break
			@else
			@if($loop->last)
			<td>{{ 'No' }} </td>
			<td>{{ 'No' }} </td>
              @endif
			
			 @endif
			@endforeach
			<td>{{ $row[0]->group_Type }} </td>
		</tr>
		@endforeach
   </tbody>
</table>