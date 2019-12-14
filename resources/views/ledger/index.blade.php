@extends('layouts.main')

@section('title', 'ledger')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('ledger') }}"><span>Ledger</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
<!--                         <li class="breadcrumb-item active">Edit</li>
 -->                    </ul>
                </div>
            </div>
@endsection

@section('content')
<div class="row">
<div class="col-lg-12">
                	<div class="widget-bg"> 
                		<div class="card  ">
		<div class="row">
			
			<div class="col-md-3 col-sm-12 col-lg-3">
				<div class="form-tab">
					<form>
						<div class="form-group">
							<label>First name</label>
							<input type="text" name="name" class="form-control autocomplete" placeholder="Name">
						<div id="data" class="auto-focus-table"></div>
						
						</div>
						<div class="form-group">
							<label>Last name</label>
							<input type="text" name="name" class="form-control lastname" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="name" class="form-control email" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="name" class="form-control phone" placeholder="Name">
						</div>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col=lg-9">
				<div class="table-scroll-limit group-table">
				
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="table-scroll-limit">
					<table class="table-normal table-streched table-hover">
						<thead>
							<tr>
								<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Position</th>
								<th>Email</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
								<th>Phone</th>
								<th>Country</th>
								<th>State</th>
								<th>City</th>
								<th>Location</th>
								<th>Vichle no</th>
								<th>Joined Date</th>
								<th>DOB</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-success">Success</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-danger">Pending</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>8</td>
							<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Charles Antony</td>
								<td>Senior Engineer</td>
								<td>charlesantony1234@gmail.com</td>
								<td>HCL</td>
								<td>30</td>
								<td>12/05/2019</td>
								<td>100000</td>
								<td>986545643</td>
								<td>India</td>
								<td>Tasmilnadu</td>
								<td>Chennai</td>
								<td>Nungambakkam</td>
								<td>TN 01 C 9876</td>
								<td>15/06/2019</td>
								<td>05/08/2000</td>
								<td><span class="badge badge-pill badge-primary">Active</span></td>
								<td>
								<span class="actions-item">
									<div class="dropdown">
									  <a data-toggle="dropdown">
										<div><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
										<ul class="">
										  <li><a href="#"><span>Edit</span></a></li>
										  <li><a href="#"><span>Delete</span></a></li>
										</ul>
									  </div>
									</div>
								  </span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	




@endsection
@section('script')
<script>
$(document).ready(function(){

 $('.autocomplete').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#data').fadeIn();  
              $('#data').html(data);
          }
         });
        }
    });

    $(document).on('click', '.custom', function(){  
       
        $('#data').fadeOut(); 
		let data=JSON.parse($(this).attr('data-id')); 
		$('.autocomplete').val(data.subscriber_name);  
		$('.lastname').val(data.Initial_name);
		$('.phone').val(data.phone_no);
		$('.email').val(data.mail_id);
		actionData(data.id);
		
		console.log(data);
    }); 
	$(window).click(function(e) {
		$('#data').fadeOut(); 
   });
   function actionData(id){
	if(id != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('auctiondata.list') }}",
          method:"POST",
          data:{id:id, _token:_token},
          success:function(data){

              $('.group-table').html(data);
          }
         });
        } 

   }
   $(document).on("click",".add-payment",function(e) {
      e.preventDefault();
       var data=JSON.parse($(this).attr("data-id"));
	   var _token = $('input[name="_token"]').val();
        var show_url="{{ route('payment.add') }}";
          $.ajax({
                url: show_url,
                dataType: 'html',
				method:"POST",
                data:{group:data.groupId,subscriber_id:data.subscriber_id, _token:_token},
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                    $('#response-title').text('Payment Add');
                    $('#myModal').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

     });
$(document).on("click",".pay-type",function(pay) {
	  pay.preventDefault();
	  var type=$(this).val();
	 if(type=='cash'){
		$("#bank_name").attr('readonly', true);
	    $("#cheque_number").attr('readonly', true);
	     $("#ChequeDate").attr('disabled', true);
	 }else{
       $("#bank_name").attr('readonly', false);
	  $("#cheque_number").attr('readonly', false);
	  $("#ChequeDate").attr('disabled', false);
	 }
	  
	 
});
});
</script>
@endsection