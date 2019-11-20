@extends('layouts.main')

@section('title', 'auction')

@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('collection-area') }}"><span>Auction</span><i class="fas fa-arrow-left fa-fw"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
@endsection

@section('content')
<div class="row">
            	<div class="col-lg-12">
                	<div class="widget-bg"> 
                		<div class="card  ">
     
      <div class="card-body">
      <form method="post" action="{{ route('group.auction.update',["group"=>$group,"auction"=>$auction->id]) }}" >
        @csrf
        @method('PATCH')
        <div class="form-group">
          <div class="form-row">
             <div class="col-md-6">
          <div class="form-label-group">
             <label for="customer-name"><span>Customer Name</span></label>
             <input type="text" id="customer-name" name="customer"   class="form-control autocomplete"  value="{{ $customer->subscriber_name }}" placeholder="CustomerName" required>
             <div id="data" class="auto-focus-table"></div>
          
            </div>
            @error('customer')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
           @enderror
       </div>
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="auctionNumber"><span>Auction Number</span></label>
                   <input type="text" id="auctionNumber"name="auction_number"   value="{{ $auction->auction_number }}" class="form-control" placeholder="Auction Number" readonly required>
                </div>
                 @error('auction_number')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          </div>
       </div>
       <div class="form-group">
          <div class="form-row">
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="auctionDate"><span>Auction Date</span></label>
                   <input type="text" id="auctionDate" name="auction_date"  class="form-control date" value="{{ $auction->auction_date }}" placeholder="Auction Date" readonly required>
                </div>
                 @error('auction_date')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="auction-amount"><span>Auction Amount</span></label>
                   <input type="text" id="auction-amount" name="auction_amount"  class="form-control" value="{{ $auction->auction_amount }}" placeholder="Auction Amount" required>
                </div>
                 @error('auction_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          </div>
       </div>
       <div class="form-group">
          <div class="form-row">
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="commision_amount"><span>Cmp Commision</span></label>
                   <input type="text" id="commision_amount"name="commision_amount"  class="form-control" value="{{ $auction->commision_amount }}" placeholder="Commision Amount" readonly required>
                </div>
                 @error('commision_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="gst_amount"><span>GST</span></label>
                   <input type="text" id="gst_amount"name="gst_amount"  value="{{ $auction->gst_amount }}" class="form-control" placeholder="GST" readonly  required>
                </div>
                 @error('gst_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          </div>
       </div>
       <div class="form-group">
          <div class="form-row">
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="dividend_amount"><span>Total Dividend Amount</span></label>
                   <input type="text" id="dividend_amount" name="dividend_amount"  class="form-control" value="{{ $auction->dividend_amount }}" placeholder=" Total Dividend Amount" readonly required>
                </div>
                 @error('dividend_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
         
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="each_dividend_amount"><span>Each Member Dividend</span></label>
                   <input type="text" id="each_dividend_amount" name="each_dividend_amount" value="{{ $auction->each_dividend_amount }}" class="form-control"  readonly placeholder="Each Member Dividend" required>
                </div>
                 @error('each_dividend_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          </div>
       </div>
       <div class="form-group">
          <div class="form-row">
             <div class="col-md-6">
                <div class="form-label-group">
                   <label for="due_amount"><span>Due Amount</span></label>
                   <input type="text" id="due_amount" name="due_amount" value="{{ $auction->due_amount  }}" class="form-control" placeholder="Due Amount" readonly required>
                </div>
                 @error('due_amount')
                 <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
             </div>
          </div>
       </div>
		
       <input type="hidden" id="subscriber_id" name="subscriber_id" value="{{ $auction->subscriber_id }}" class="form-control" placeholder="Due Amount" readonly required>
       <input type="hidden" id="group_id" name="group_id" value="{{ $auction->group_id}}" class="form-control" >

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
              <input type="submit" class="btn btn-primary btn-block btn-yellow">
          </div>
          <div class="col-md-2">
              
          <a href="{{url()->previous()}}" type="button" class="btn btn-block btn-cancel">Cancel</a>

          </div>
          </div>
          </div>
        </form>
       
      </div>
    </div>
                     </div>
                
                </div>
                
            </div>
       

@endsection
@section('script')
<script type="text/javascript">

$(document).ready(function() {
  $(document).on('keyup', '.autocomplete', function () {
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('auction.fetch',["group"=>$group]) }}",
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
    $('#subscriber_id').val(data.id);  
    
		
		
		console.log(data);
    }); 

    $(document).on('keyup', '#auction-amount', function () {
        var amount = $(this).val();
        var total_amount="{{ $data->chit_value}}";
        var total_member="{{ $data->no_of_member}}";
        var montly_due="{{ $data->monthly_due}}";
        var commision_amount=percentage(5, total_amount);
        $("#commision_amount").val(commision_amount);
        var gst=(commision_amount*12)/100;
        $("#gst_amount").val(gst);
        var total_divde=amount-commision_amount;
        $("#dividend_amount").val(total_divde);
        var each_dividend=total_divde/total_member;
        $("#each_dividend_amount").val(each_dividend);

        var due_amount=montly_due-each_dividend;
        $("#due_amount").val(due_amount);

        
        
     
    });
    function percentage(percent, total) {
    return ((percent / 100) * total).toFixed(2)
   }
   
   $('.date').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy/mm/dd',

  }).datepicker("update", "{{  $auction->auction_date }} ");

    
});
</script>
@endsection