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
        <div class="card-body">
          <div class="row">
            
             <form>
               
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card card-box"> 
                    <!-- card start -->
                      <div class="card-header">
                       Surety Details
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-surety" width="100%">
                            <thead>
                               <tr>
                                <th colspan="4" class="text-right">Report Date : 05-01-2020</th>
                              </tr>
                             
                            </thead>
                            <tbody>
                               <tr>
                                <td colspan="4" class="text-center">Customer Details</td>
                              </tr>

                              <tr>
                                <td><span class="td-star">*</span></td>
                                <td>
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <th>Customer Name <span class="colan-right">:</span></th>
                                        <td><span class="td-initial">Mrs</span>. <span class="name-caps">ARASI S (1931)</span></td>
                                      </tr>
                                      <tr>
                                        <th>Father Name<span class="colan-right">:</span></th>
                                        <td><span class="name-caps">W/O. SELVAM V</span></td>
                                      </tr>
                                      <tr>
                                        <th>Contact No. <span class="colan-right">:</span></th>
                                        <td>9876543212</td>
                                      </tr>
                                      <tr>
                                        <th>Group Name & Ticket Number <span class="colan-right">:</span></th>
                                        <td>A10L4027A - 32</td>
                                      </tr>
                                      <tr>
                                        <th>Auction No & Date <span class="colan-right">:</span></th>
                                        <td>3 - 27-11-2019</td>
                                      </tr>
                                      <tr>
                                        <th>Auction Amount <span class="colan-right">:</span></th>
                                        <td>400000.00</td>
                                      </tr>
                                      <tr>
                                        <th>Address <span class="colan-right">:</span></th>
                                        <td><span class="name-caps">No: 1/70, north street, <br/>melpathipalaiyamgottai, <br/>SRIMUshnam (POst), <br/>Cudaalore (Taluk),<br/> pin - 608701 </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td> <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="Photos"></td>
                                <td>
                                  <div class="custdetails">
                                    Adhaar Card / Xerox-1, <br/>
                                    Bank  Passbook / Xerox-1,<br/>
                                    Tamil Bond / Original-1,<br/>
                                    Promissory Note/ Original-2,<br/>
                                    Withot form / original-1,<br/>
                                    Cheque slip / original-3,<br/>
                                    IOB Bank.
                                  </div>
                                </td>
                              
                              </tr>
                              <tr>
                                <td colspan="4" class="text-center">Guarantoer Details</td>
                              </tr>

                              <tr>
                                <td><span class="td-star">*</span></td>
                                <td>
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <th>Guarantoer Name <span class="colan-right">:</span></th>
                                        <td><span class="td-initial">Mrs</span>. <span class="name-caps">ARASI S (1931)</span></td>
                                      </tr>
                                      <tr>
                                        <th>Father Name<span class="colan-right">:</span></th>
                                        <td><span class="name-caps">W/O. SELVAM V</span></td>
                                      </tr>
                                      <tr>
                                        <th>Contact No. <span class="colan-right">:</span></th>
                                        <td>9876543212</td>
                                      </tr>
                                      <tr>
                                        <th>Group Name & Ticket Number <span class="colan-right">:</span></th>
                                        <td>A10L4027A - 32</td>
                                      </tr>
                                      <tr>
                                        <th>Auction No & Date <span class="colan-right">:</span></th>
                                        <td>3 - 27-11-2019</td>
                                      </tr>
                                      <tr>
                                        <th>Auction Amount <span class="colan-right">:</span></th>
                                        <td>400000.00</td>
                                      </tr>
                                      <tr>
                                        <th>Address <span class="colan-right">:</span></th>
                                        <td><span class="name-caps">No: 1/70, north street, <br/>melpathipalaiyamgottai, <br/>SRIMUshnam (POst), <br/>Cudaalore (Taluk),<br/> pin - 608701 </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td> <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="Photos"></td>
                                <td>
                                  <div class="custdetails">
                                    Adhaar Card / Xerox-1, <br/>
                                    Bank  Passbook / Xerox-1,<br/>
                                    Tamil Bond / Original-1,<br/>
                                    Promissory Note/ Original-2,<br/>
                                    Withot form / original-1,<br/>
                                    Cheque slip / original-3,<br/>
                                    IOB Bank.
                                  </div>
                                </td>
                              
                              </tr>
                              <tr>
                                <td><span class="td-star">*</span></td>
                                <td>
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <th>Guarantoer Name <span class="colan-right">:</span></th>
                                        <td><span class="td-initial">Mrs</span>. <span class="name-caps">ARASI S (1931)</span></td>
                                      </tr>
                                      <tr>
                                        <th>Father Name<span class="colan-right">:</span></th>
                                        <td><span class="name-caps">W/O. SELVAM V</span></td>
                                      </tr>
                                      <tr>
                                        <th>Contact No. <span class="colan-right">:</span></th>
                                        <td>9876543212</td>
                                      </tr>
                                      <tr>
                                        <th>Group Name & Ticket Number <span class="colan-right">:</span></th>
                                        <td>A10L4027A - 32</td>
                                      </tr>
                                      <tr>
                                        <th>Auction No & Date <span class="colan-right">:</span></th>
                                        <td>3 - 27-11-2019</td>
                                      </tr>
                                      <tr>
                                        <th>Auction Amount <span class="colan-right">:</span></th>
                                        <td>400000.00</td>
                                      </tr>
                                      <tr>
                                        <th>Address <span class="colan-right">:</span></th>
                                        <td><span class="name-caps">No: 1/70, north street, <br/>melpathipalaiyamgottai, <br/>SRIMUshnam (POst), <br/>Cudaalore (Taluk),<br/> pin - 608701 </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td> <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="Photos"></td>
                                <td>
                                  <div class="custdetails">
                                    Adhaar Card / Xerox-1, <br/>
                                    Bank  Passbook / Xerox-1,<br/>
                                    Tamil Bond / Original-1,<br/>
                                    Promissory Note/ Original-2,<br/>
                                    Withot form / original-1,<br/>
                                    Cheque slip / original-3,<br/>
                                    IOB Bank.
                                  </div>
                                </td>
                              
                              </tr>
                              <tr>
                                <td colspan="4" class="text-center">Nominee Details</td>
                              </tr>

                              <tr>
                                <td><span class="td-star">*</span></td>
                                <td>
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <th>Nominee Name <span class="colan-right">:</span></th>
                                        <td><span class="td-initial">Mrs</span>. <span class="name-caps">ARASI S (1931)</span></td>
                                      </tr>
                                      <tr>
                                        <th>Father Name<span class="colan-right">:</span></th>
                                        <td><span class="name-caps">W/O. SELVAM V</span></td>
                                      </tr>
                                      <tr>
                                        <th>Contact No. <span class="colan-right">:</span></th>
                                        <td>9876543212</td>
                                      </tr>
                                      <tr>
                                        <th>Group Name & Ticket Number <span class="colan-right">:</span></th>
                                        <td>A10L4027A - 32</td>
                                      </tr>
                                      <tr>
                                        <th>Auction No & Date <span class="colan-right">:</span></th>
                                        <td>3 - 27-11-2019</td>
                                      </tr>
                                      <tr>
                                        <th>Auction Amount <span class="colan-right">:</span></th>
                                        <td>400000.00</td>
                                      </tr>
                                      <tr>
                                        <th>Address <span class="colan-right">:</span></th>
                                        <td><span class="name-caps">No: 1/70, north street, <br/>melpathipalaiyamgottai, <br/>SRIMUshnam (POst), <br/>Cudaalore (Taluk),<br/> pin - 608701 </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td> <img src="http://localhost:8000/public/image/girl.svg" class="profile" alt="Photos"></td>
                                <td>
                                  <div class="custdetails">
                                    Adhaar Card / Xerox-1, <br/>
                                    Bank  Passbook / Xerox-1,<br/>
                                    Tamil Bond / Original-1,<br/>
                                    Promissory Note/ Original-2,<br/>
                                    Withot form / original-1,<br/>
                                    Cheque slip / original-3,<br/>
                                    IOB Bank.
                                  </div>
                                </td>
                              
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="4">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th>Date</th>
                                        <th>Signature</th>
                                        <th>Document</th>
                                        <th>Date</th>
                                        <th>Signature</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Surety Received By</td>
                                        <td></td>
                                        <td></td>
                                        <td>Document Submitted by</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Surety Verification By</td>
                                        <td></td>
                                        <td></td>
                                        <td>Document Submitted by</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td>Surety Entry to System</td>
                                        <td></td>
                                        <td></td>
                                        <td>Document Returened by</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td>Surety Field Verification</td>
                                        <td></td>
                                        <td></td>
                                        <td>Document Returened by</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td>Surety File Verification</td>
                                        <td></td>
                                        <td></td>
                                        <td>Document Received by</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div> <!-- Card end-->
                </div>
              </div> <!--Row End -->

            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection 

		 