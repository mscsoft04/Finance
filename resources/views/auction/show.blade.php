<div class="row">
   <div class="col-md-5 col-sm-12 col-lg-5">
      <div class="card-body">
         <form method="post" action="{{ route('collection-area.store') }}" >
            @csrf
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
               <div class="form-label-group">
                  <label for="collectionareaname"><span>Customer Name</span></label>
                  <input type="text" id="collectionareaname" name="customer"   class="form-control autocomplete" placeholder="CustomerName" required>
                  <div id="data" class="auto-focus-table"></div>
               
                 </div>
               <span class="invalid-feedback" role="alert">
               <strong></strong>
               </span>
            </div>
         </div>
      </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="auctionNumber"><span>Auction Number</span></label>
                        <input type="text" id="auctionNumber"name="auction_number"  class="form-control" placeholder="Auction Number" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="auctionDate"><span>Auction Date</span></label>
                        <input type="text" id="auctionDate"name="auction_date"  class="form-control" placeholder="Auction Date" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="auction-amount"><span>Auction Amount</span></label>
                        <input type="text" id="auction-amount"name="auction_amount"  class="form-control" placeholder="Auction Amount" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="commision_amount"><span>Cmp Commision</span></label>
                        <input type="text" id="commision_amount"name="commision_amount"  class="form-control" placeholder="Commision Amount" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="gst_amount"><span>GST</span></label>
                        <input type="text" id="gst_amount"name="gst_amount"  class="form-control" placeholder="GST" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="dividend_amount"><span>Total Dividend Amount</span></label>
                        <input type="text" id="dividend_amount"name="dividend_amount"  class="form-control" placeholder=" Total Dividend Amount" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="each_dividend_amount"><span>Each Member Dividend</span></label>
                        <input type="text" id="each_dividend_amount"name="each_dividend_amount"  class="form-control" placeholder="Each Member Dividend" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-12">
                     <div class="form-label-group">
                        <label for="due_amount"><span>Due Amount</span></label>
                        <input type="text" id="due_amount"name="due_amount"  class="form-control" placeholder="Due Amount" required>
                     </div>
                     <span class="invalid-feedback" role="alert">
                     <strong></strong>
                     </span>
                  </div>
               </div>
            </div>
           
            <div class="form-group">
               <div class="form-row">
                  <div class="col-md-6">
                     <input type="submit" class="btn btn-primary btn-block btn-yellow">
                  </div>
                  <div class="col-md-6">
                     <a href="javascript:void(0)" type="button" class="btn btn-block btn-cancel">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div class="col-md-7 col-sm-12 col=lg-7">
      <div class="table-scroll-limit group-table">
         <table class="table-normal table-streched table-hover">
            <thead>
               <tr>
                  <th>S.No</th>
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
            </tbody>
         </table>
      </div>
   </div>
</div>