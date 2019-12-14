<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <div class="form-row">
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Payment Date <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Payment Date" name="paymentdate" id="paymentdate">
           <div class="input-group-append">
              <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
           </div>
        </div>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Payment Type <span class="text-danger">*</span></label>
        <select class="form-control pay-type">
           <option selected="selected" value="cash">Cash</option>
           <option value="cheque">Cheque</option>
        </select>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Bill Amount<span class="text-danger">*</span></label>
        <input type="text" name="cash-bank-adjust" class="form-control" placeholder="Bill Amount">
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Pending Amount<span class="text-danger">*</span></label>
        <input type="text" name="cash-bank-adjust" class="form-control" placeholder="Pending Amount" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Credit Amount<span class="text-danger">*</span></label>
        <input type="text" name="cash-bank-adjust" class="form-control" placeholder="Credit Amount" readonly>
     </div>
     
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Bank Name<span class="text-danger">*</span></label>
        <input type="text" name="chequeno" class="form-control" id="bank_name" placeholder="Bank Name" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Cheque Number<span class="text-danger">*</span></label>
        <input type="text" name="chequeno" class="form-control" id="cheque_number" placeholder="Cheque Number" readonly>
     </div>
     <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <label>Cheque Date <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Cheque Date" name="paymentdate" id="ChequeDate" disabled>
           <div class="input-group-append">
              <button class="btn btn-success" type="submit"><i class="far fa-calendar-alt"></i></button>
           </div>
        </div>
     </div>
  </div>
  <div class="form-group  text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-4">
    <div class="form-row btntop">
       <div class="col-md-2">
          <input type="submit" class="btn btn-primary btn-block btn-blue">
       </div>
       <div class="col-md-2">
          <a href="" data-dismiss="modal" class="btn btn-block btn-dark">Cancel</a>
       </div>
    </div>
 </div>
 <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12">
    <div class="table-scroll-limit">
      <table class="table-normal table-streched table-hover">
        <thead>
          <tr>
            </tr><tr>
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
  
  <script type="text/javascript">

$(document).ready(function() {
 

  $('#paymentdate,#ChequeDate').datepicker({
    autoclose: true,
    todayHighlight: true,

  });
});
</script>