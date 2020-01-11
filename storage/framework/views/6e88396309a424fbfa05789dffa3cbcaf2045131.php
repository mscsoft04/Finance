<?php $__env->startSection('title', 'ledger'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="<?php echo e(url('ledger')); ?>"><span>Ledger</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
<!--                         <li class="breadcrumb-item active">Edit</li>
 -->                    </ul>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	  <div class="row">
		<div class="col-lg-12">
      <table class="table-btn">
        <tbody>
          <tr>
            
            <td><button type="button" class="btn btn-success led-payment-add" >Payment Add</button></td>
            <td><button type="button" class="btn btn-primary led-bill-add">Bill Receipt</button></td>
            <td><button type="button" class="btn btn-warning led-auction-add">Auction Add</button></td>
            <td><button type="button" class="btn btn-secondary">Refund</button></td>
            <td><button type="button" class="btn btn-dark">Close</button></td>
          </tr>
        </tbody>
      </table>
		  <div class="widget-bg"> 
			<div class="card  ">
			  <div class="card-body">
				<div class="row">
				  
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					  <form>
					  <div class="card card-box">
              
						<!-- card start -->
						<div class="card-header">
						   Customer Details
						</div>
						<div class="card-body address-tab">
							<div class="table-responsive">
               
								<table class="table table-hover table-bordered">
								  <tbody>
									<tr>
									  <td rowspan="6" colspan="2">
										<img src="http://localhost:8000/public/image/girl.svg" style="width: 100px; height: 100px;" alt="profile">
									  </td>
									  <td colspan="6"><input type="text" name="name" class="form-control autocomplete" autocomplete="off" placeholder="Name">
										<div id="data" class="auto-focus-table"></div>
										
										</div>
										<?php echo e(csrf_field()); ?>

									</td>
								
									</tr>
									<tr>
									  <td class="table-primary">Occupation</td>
									  <td ><span class="occupation"></span></td>
							
									  <td class="table-primary">Address</td>
									  <td><span class="address"></span></td>
									</tr>
									<tr>
									  <td class="table-primary">Village</td>
									  <td><span class="village"></span></td>
								
									  <td class="table-primary">Taluk</td>
									  <td><span class="taluk"></span></td>
									</tr>
									<tr>
									  <td class="table-primary">Pincode</td>
									  <td><span class="pincode"></span></td>
									
									  <td class="table-primary">Mobile</td>
									  <td><span class="phone"></span></td>
									</tr>
									<tr>
									  <td class="table-primary">Email</td>
									  <td><span class="email"></span></td>
									
									  <td class="table-primary">Area Name</td>
									  <td><span class="area"></span></td>
									</tr>
									<tr>
									  <td class="table-primary">DR Amt</td>
									  <td colspan="4"><span class="credit_amount"></span></td>
									</tr>
								  </tbody>
								</table>
							  </div>
						</div>
					 </div> <!-- Card end -->
					</div> <!-- col-mg-6 end-->
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 address-detail">
						  <div class="card card-box"> 
						  <!-- card start -->
							<div class="card-header">
							 Group  Details
							</div>
							<div class="card-body">
								<div class="table-responsive custtable-group group-table">
									
								  </div>
							</div>
						  </div> <!-- Card end-->
					  </div>
					</div> <!--Row End -->
					  <div class="row">
					  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="table-responsive chitfund-table">
							
						  </div>
						</div>
					  </div>
					</div>
				  </form>
				</div>
			  </div>
			</div>
	

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$(document).ready(function(){

 $('.autocomplete').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"<?php echo e(route('autocomplete.fetch')); ?>",
          method:"POST",
          data:{query:query, _token:"<?php echo e(csrf_token()); ?>"},
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
		$('.address').text(data.p_address);
		$('.phone').text(data.mobile_no);
		$('.email').text(data.mail_id);
		$('.pincode').text(data.p_pincode);
		$('.credit_amount').text(data.credit_amount);
		$('.taluk').text(data.taluk);
		$('.village').text(data.village);
		$('.profile').text(data.profile);
		$('.area').text(data.area);
		$('.occupation').text(data.occupation);
		
		
		
		
		groupdata(data.id);
		$('.chitfund-table').html("");
    }); 

   function groupdata(id){
	if(id != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"<?php echo e(route('groupdata.list')); ?>",
          method:"POST",
          data:{id:id, _token:"<?php echo e(csrf_token()); ?>"},
          success:function(data){

              $('.group-table').html(data);
          }
         });
        } 

   }
   function autcionData(id){
	if(id != '')
        {
		var data=id;//JSON.parse($(this).attr("data-id"));
	   	var _token = $('input[name="_token"]').val();
		   $('.chitfund-table').html("");
         $.ajax({
          url:"<?php echo e(route('autciondata.list')); ?>",
          method:"POST",
		  data:{group:data.groupId,subscriber_id:data.subscriber_id, _token:"<?php echo e(csrf_token()); ?>"},
          success:function(data){

              $('.chitfund-table').html(data);
          }
         });
        } 

   }
   $(document).on("click",".add-payment",function(e) {
      e.preventDefault();
       var data=JSON.parse($(this).attr("data-id"));
	   autcionData(data[0]);
	   var _token = $('input[name="_token"]').val();
        var show_url="<?php echo e(route('payment.add')); ?>";
          $.ajax({
                url: show_url,
                dataType: 'html',
				        method:"POST",
                data:{group:data.groupId,subscriber_id:data.subscriber_id, _token:"<?php echo e(csrf_token()); ?>"},
                success: function( data, textStatus, jQxhr ){
                    $('#response-full').html( data );
                    $('#response-full-title').text('Bill');
                    $('#myModal-full').modal('show')

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
$(document).on('click', '.creditPayment-add', function(creditPay){    
    creditPay.preventDefault();
    var creditPayment = $('#creditPaymentData')[0];
    var creditPaymentData = new FormData(creditPayment);
    var show_url="<?php echo e(route('creditpayment.store')); ?>";
          $.ajax({
              type: "POST",
              enctype: 'multipart/form-data',
              url: show_url,
              data: creditPaymentData,
              processData: false,
              contentType: false,
              cache: false,
              dataType: "json",
                success: function( data, textStatus, jQxhr ){
                  $('#myModal-full').modal('hide')
				  toastr.success(data.message, data.title); 
				  pdf_load(data.data);

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

  });

  function pdf_load(data){
	  console.log(data);
	$.ajax({
           
            type:'POST',
            url: '<?php echo e(route('billgenerate.generate')); ?>',
            data:{id:data,_token:"<?php echo e(csrf_token()); ?>"},
            xhrFields: {
                responseType: 'blob'
            },
            success: function (response, status, xhr) {

                var filename = "";                   
                var disposition = xhr.getResponseHeader('Content-Disposition');

                 if (disposition) {
                    var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                    var matches = filenameRegex.exec(disposition);
                    if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                } 
                var linkelem = document.createElement('a');
                try {
                                           var blob = new Blob([response], { type: 'application/pdf' });                        

                    if (typeof window.navigator.msSaveBlob !== 'undefined') {
                        //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                        window.navigator.msSaveBlob(blob, filename);
                    } else {
                        var URL = window.URL || window.webkitURL;
                        var downloadUrl = URL.createObjectURL(blob);
						window.open(downloadUrl, '_blank');
						console.log(downloadUrl);

                        if (filename) { 
                            // use HTML5 a[download] attribute to specify filename
                            var a = document.createElement("a");

                            // safari doesn't support this yet
                            if (typeof a.download === 'undefined') {
                                window.location = downloadUrl;
                            } else {
                                 a.href = downloadUrl;
                                a.download = filename;
                                document.body.appendChild(a);
                                a.target = "_blank";
                                a.click(); 
                            }
                        } else {
                           window.location = downloadUrl;
                        }
                    }   

                } catch (ex) {
                    console.log(ex);
                } 
            }
        });


  }

$(document).on('click', '.accordion-toggle', function(hs){    
    hs.preventDefault();
	$('.hiddenRow').hide();
	var data=JSON.parse($(this).attr("data-id"));
	var dataID=data.unique_id;
	var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"<?php echo e(route('creditpayment.list')); ?>",
          method:"POST",
		  dataType: 'html',
		  data:{autcion_id:data.autcion_id,subscriber_id:data.subscriber_id, _token:"<?php echo e(csrf_token()); ?>"},
          success:function(data){
              $("#demo-"+dataID).html(data);
          }
         });
	$(this).next('tr').find('.hiddenRow').show();
  });
  $(document).on('change', '.group-check', function(hs){   
    $('.group-check').not(this).prop('checked', false); 
	if($(this).is(':checked')){
     $(".group-check").not($(this)).attr("checked",false);
	 var data=JSON.parse($(this).attr("data-id"));
	 autcionData(data[0]);
    } 
  });
  
  
  
});

$(document).on('click', '.led-bill-add', function(hs){ 
  if ($('.group-check').is(":checked")){
    let array=JSON.parse($('.group-check:checked').attr("data-id"));
    let data=array[0];
    if(data.actionSub_id){
      BillpaymentDataShow(data);
    } else {
        alert("fail");
    }
    
   }else{
    alert("select Group please");
   }
   
});
$(document).on('click', '.led-payment-add', function(hs){ 
  if ($('.group-check').is(":checked")){
    let array=JSON.parse($('.group-check:checked').attr("data-id"));
    const result = array.filter(res => res.subscriber_id == res.actionSub_id);
    console.log(result);
    
    if ((result.length)==0 ){
            alert("fail");
    } else {
      let data=result[0];
      if (typeof data.auction_id == "undefined" || data.auction_id == null){
        alert("fail");
      } else{
        var url = '<?php echo e(route("debitPayment.auction.index", ["auction"=>":id"])); ?>';
        url = url.replace(':id', data.auction_id); 
        window.open(url, '_blank');
        
      }
      
    }
    
   }else{
    alert("select Group please");
   }
   
});

function BillpaymentDataShow(data){
  var show_url="<?php echo e(route('payment.add')); ?>";
          $.ajax({
                url: show_url,
                dataType: 'html',
				        method:"POST",
                data:{group:data.groupId,subscriber_id:data.subscriber_id, _token:"<?php echo e(csrf_token()); ?>"},
                success: function( data, textStatus, jQxhr ){
                    $('#response-full').html( data );
                    $('#response-full-title').text('Bill');
                    $('#myModal-full').modal('show')

                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
    console.log(data);
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\finance\finance\resources\views/ledger/index.blade.php ENDPATH**/ ?>