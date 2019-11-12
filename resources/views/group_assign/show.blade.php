<div class="col-md-12 col-sm-12 col=lg-12">
   <div class="card-body assgin-view">
      <form>
         @csrf
         <div class="form-group">
            <div class="form-row">
               <div class="col-md-6">
                  <div class="form-label-group">
                     <label for="collectionareaname"><span>Customer Name</span></label>
                     <input type="text" id="collectionareaname" name="customer"   class="form-control autocomplete" placeholder="CustomerName" required>
                     <div id="data" class="auto-focus-table"></div>
						
                    </div>
                  <span class="invalid-feedback" role="alert">
                  <strong></strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-label-group">
                     <label for="Type"><span>Collection Type</span></label>
                     <select  id="Type" name="type"  class="form-control" >
                        <option value="">Select type</option>
                        <option  value="Monthly">Monthly</option>
                        <option  value="daily">Daily</option>
                     </select>
                  </div>
                  <span class="invalid-feedback" role="alert">
                  <strong></strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-label-group">
                     <label for="ticket_number"><span>Ticket number</span></label>
                     <input type="text" id="ticket_number" name="ticket_number"  class="form-control" placeholder="Ticket Number" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-label-group">
                     <label for="agent_id"><span>Agent ID</span></label>
                     <input type="text" id="agent_id" name="agent_id"  class="form-control" placeholder="Agent ID" required>
                  </div>
               </div>
            </div>
         </div>
         <input type="hidden" id="subscriber_id" name="subscriber_id"  class="form-control" placeholder="subscriber id" required>
         <input type="hidden" id="group_id" name="group_id"  class="form-control" placeholder="group id" required>

         
         <div class="form-group">
            <div class="form-row">
               <div class="col-md-2">
                  <input type="submit" class="btn btn-primary btn-block btn-yellow">
               </div>
               <div class="col-md-2">
                  <a href="JavaScript:void(0)" type="button" class="btn btn-block btn-cancel assign-cancel ">Cancel</a>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="table-scroll-limit">
      <div class="inner-header">
         <div class="fl_in_h">
            <h5>Group Assign </h5>
         </div>
         <div class="fr_in_h">
            <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r assign-mode"  href="JavaScript:void(0)">
            <i class="fas fa-plus"></i><span>Add</span>
            </a>
            
         </div>
      </div>
      <table class=" table table-striped">
         <tbody>
            <tr>
               <th>Group name</th>
               <td>Name</td>
               <th>No. Of Member</th>
               <td>63</td>
            </tr>
            <tr>
               <th>No. Of Join</th>
               <td>45</td>
               <th>No. Of Vecant</th>
               <td>15</td>
            </tr>
         </tbody>
      </table>
      <table class="table table-streched table-hover">
         <thead>
            <tr>
               <th>S.No</th>
               <th>Name</th>
               <th>Occupation</th>
               <th>Collection Type</th>
               <th>Age</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>Charles Antony</td>
               <td>Senior Engineer</td>
               <td>Monthly</td>
               <td>30</td>
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