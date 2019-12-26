@extends('layouts.main')
@section('title', 'Payment')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
            	
            	<div class="breadcrumbbar">
                	<ul>
                    	<li class="breadcrumb-item">
                        <a href="{{ url('ledger') }}"><span>Payment</span><i class="fas fa-arrow-left fa-fw"></i></a>
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
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                 <form>
                                    <div class="card card-box">
                                       <!-- card start -->
                                       <div class="card-header">
                                          Acution Payment
                                       </div>
                                       <div class="card-body address-tab">
                                          <div class="form-row btntop">
                                             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tab-panel-tab">
                                                <ul class="nav nav-tabs" role="tablist">
                                                   <li class="nav-item">
                                                      <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Document</a>
                                                   </li>
                                                   <li class="nav-item">
                                                      <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Nominee</a>
                                                   </li>
                                                   <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Surety</a>
                                                 </li>
                                                   <li class="nav-item">
                                                      <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Payment</a>
                                                   </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                   <div class="tab-pane active" id="tabs-1" role="tabpanel">


                                                    <div class="card card-box">
                                                      <!-- card start -->
                                                      <div class="card-header">
                                                        <div class="inner-header-pay">
                                                          <div class="fl_in_h">
                                                             <h5>Document Details</h5>
                                                          </div>
                                                          <div class="fr_in_h">
                                                             
                                                             <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r  add-new-doc" href="javascript:void(0)">
                                                             <i class="fas fa-plus"></i><span>Add New</span>
                                                             </a>
                                                            
                                                          </div>
                                                       </div>
                                                      </div>
                                                      <div class="card-body">
                                                       <div id="doc-new"> 
                                                         <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                               <div class="form-label-group">
                                                                     <label><span>Document Type</span></label>
                                                                     <select class="form-control" name="document-type">
                                                                        <option value="">Document Type</option>
                                                                        <option>Doc 1</option>
                                                                        <option>Doc 2</option>
                                                                        <option>Doc 3</option>
                                                                     </select>
                                                                  </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                               <div class="form-label-group">
                                                                <label><span>Document</span></label>
                                                                <div class="custom-file">
                                                                  <input type="file" class="custom-file-input" id="customFile-1">
                                                                  <label class="custom-file-label" for="customFile-1">Choose file</label>
                                                               </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 29px;"> 
                                                              <button class="btn btn-danger btn-sm deleteFile" type="button" >Delete</button>
                                                            </div>

                                                            
                                                         </div>
                                                      </div>
                                                      </div>
                                                   </div>
                                                      
                                                      <div class="row">
                                                         <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                            <div class="form-row btntop">
                                                               <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                  <input type="submit" class="btn btn-primary btn-block btn-blue" value="Save">
                                                               </div>
                                                               <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                  <input type="submit" class="btn btn-success btn-block" value="Update">
                                                               </div>
                                                               <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                  <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                      <div class="card card-box">
                                                         <!-- card start -->
                                                         <div class="card-header">
                                                            Nominee Detail
                                                         </div>
                                                         <div class="card-body">
                                                            <div class="row">
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Nominee Name</span></label>
                                                                     <input type="text" class="form-control" name ="nominee-name" id ="nominee-name" placeholder="Nominee">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Father Name</span></label>
                                                                     <input type="text" class="form-control" name ="father-name" id ="father-name" placeholder="Father Name">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Occupation</span></label>
                                                                     <input type="text" class="form-control" name ="occupation" id ="occupation" placeholder="Occupation">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Designation / Department</span></label>
                                                                     <input type="text" class="form-control" name ="designation" id ="designation" placeholder="Designation">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Salary</span></label>
                                                                     <input type="text" class="form-control" name ="salary" id ="salary" placeholder="Salary">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Relation Type</span></label>
                                                                     <select class="form-control" name="document-type">
                                                                        <option value="">Relation Type</option>
                                                                        <option>Doc 1</option>
                                                                        <option>Doc 2</option>
                                                                        <option>Doc 3</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Document Type</span></label>
                                                                     <select class="form-control" name="document-type">
                                                                        <option value="">Relation Type</option>
                                                                        <option>Doc 1</option>
                                                                        <option>Doc 2</option>
                                                                        <option>Doc 3</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Mobile Number</span></label>
                                                                   <input type="text" class="form-control" name ="salary" id ="salary" placeholder="Salary">
                                                                </div>
                                                             </div>
                                                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                  <div class="form-label-group">
                                                                     <label><span>Address</span></label>
                                                                     <textarea class="form-control" name="address" id="address"></textarea>
                                                                  </div>
                                                               </div>
                                                               
                                                               
                                                                   <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                      <div class="form-label-group">
                                                                            <label><span>Document Type</span></label>
                                                                            <select class="form-control" name="document-type">
                                                                               <option value="">Document Type</option>
                                                                               <option>Doc 1</option>
                                                                               <option>Doc 2</option>
                                                                               <option>Doc 3</option>
                                                                            </select>
                                                                         </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                      <div class="form-label-group">
                                                                       <label><span>Document</span></label>
                                                                       <div class="custom-file">
                                                                         <input type="file" class="custom-file-input" id="customFile">
                                                                         <label class="custom-file-label" for="customFile">Choose file</label>
                                                                      </div>
                                                                     </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 29px;"> 
                                                                     <button class="btn btn-danger btn-sm" type="button">Delete</button>
                                                                     <button class="btn btn-success btn-sm" type="button">Add New</button>
                                                                   </div>
       
                                                                   
                                                            
                                                               <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                  <div class="form-row">
                                                                     <!--Form start -->
                                                                     <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                                        <div class="profile-image">
                                                                           <img src="http://localhost:8000/public/image/girl.svg" class="profile"  alt="profile photo">
                                                                        </div>
                                                                        <div class="profile-image-save"  style="display: none">
                                                                           <img src="{{ asset('public/image/girl.svg') }}" class="profile"  alt="profile photo">
                                                                        </div>
                                                                     </div>
                                                                     <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                        <input type="hidden" id="profile" class="form-control" name="image" value="{{ old('image') }}">
                                                                        <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()" >Preview</button>
                                                                        <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                                                        <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                                                        <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                                <div class="form-row btntop">
                                                                   <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                      <input type="submit" class="btn btn-primary btn-block btn-blue" value="Save">
                                                                   </div>
                                                                   <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                      <input type="submit" class="btn btn-success btn-block" value="Update">
                                                                   </div>
                                                                   <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                      <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                    <div class="card card-box">
                                                       <!-- card start -->
                                                       <div class="card-header">
                                                       
                                                        <div class="inner-header-pay">
                                                          <div class="fl_in_h">
                                                             <h5> Surety Detail</h5>
                                                          </div>
                                                          <div class="fr_in_h">
                                                             
                                                             <a class="btn btn-link btn-sm btn-global btn-blue btn-fl-r" href="javascript:void(0)">
                                                             <i class="fas fa-plus"></i><span>Add New</span>
                                                             </a>
                                                            
                                                          </div>
                                                       </div>
                                                       </div>
                                                       <div class="card-body">
                                                          <div class="row">
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Surety Name</span></label>
                                                                   <input type="text" class="form-control" name ="nominee-name" id ="nominee-name" placeholder="Nominee">
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Father Name</span></label>
                                                                   <input type="text" class="form-control" name ="father-name" id ="father-name" placeholder="Father Name">
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Occupation</span></label>
                                                                   <input type="text" class="form-control" name ="occupation" id ="occupation" placeholder="Occupation">
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Designation / Department</span></label>
                                                                   <input type="text" class="form-control" name ="designation" id ="designation" placeholder="Designation">
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Salary</span></label>
                                                                   <input type="text" class="form-control" name ="salary" id ="salary" placeholder="Salary">
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Relation Type</span></label>
                                                                   <select class="form-control" name="document-type">
                                                                      <option value="">Relation Type</option>
                                                                      <option>Doc 1</option>
                                                                      <option>Doc 2</option>
                                                                      <option>Doc 3</option>
                                                                   </select>
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-label-group">
                                                                   <label><span>Document Type</span></label>
                                                                   <select class="form-control" name="document-type">
                                                                      <option value="">Relation Type</option>
                                                                      <option>Doc 1</option>
                                                                      <option>Doc 2</option>
                                                                      <option>Doc 3</option>
                                                                   </select>
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                              <div class="form-label-group">
                                                                 <label><span>Mobile Number</span></label>
                                                                 <input type="text" class="form-control" name ="salary" id ="salary" placeholder="Salary">
                                                              </div>
                                                           </div>
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                <div class="form-label-group">
                                                                   <label><span>Address</span></label>
                                                                   <textarea class="form-control" name="address" id="address"></textarea>
                                                                </div>
                                                             </div>
                                                             
                                                             
                                                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-label-group">
                                                                          <label><span>Document Type</span></label>
                                                                          <select class="form-control" name="document-type">
                                                                             <option value="">Document Type</option>
                                                                             <option>Doc 1</option>
                                                                             <option>Doc 2</option>
                                                                             <option>Doc 3</option>
                                                                          </select>
                                                                       </div>
                                                                 </div>
                                                                 <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                    <div class="form-label-group">
                                                                     <label><span>Document</span></label>
                                                                     <div class="custom-file">
                                                                       <input type="file" class="custom-file-input" id="customFile">
                                                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 29px;"> 
                                                                   <button class="btn btn-danger btn-sm" type="button">Delete</button>
                                                                   <button class="btn btn-success btn-sm" type="button">Add New</button>
                                                                 </div>
     
                                                                 
                                                          
                                                             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                <div class="form-row">
                                                                   <!--Form start -->
                                                                   <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                                      <div class="profile-image">
                                                                         <img src="http://localhost:8000/public/image/girl.svg" class="profile"  alt="profile photo">
                                                                      </div>
                                                                      <div class="profile-image-save"  style="display: none">
                                                                         <img src="{{ asset('public/image/girl.svg') }}" class="profile"  alt="profile photo">
                                                                      </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 uploadbtn">
                                                                      <input type="hidden" id="profile" class="form-control" name="image" value="{{ old('image') }}">
                                                                      <button class="btn btn-warning preview" type="button" onClick="preview_snapshot()" >Preview</button>
                                                                      <button class="btn btn-primary save" type="button" onClick="save_photo()" style="display: none">Save</button>
                                                                      <button class="btn btn-default cancel" type="button" onClick="cancel_preview()" style="display: none">Cancel</button>
                                                                      <button class="btn btn-danger delete" type="button" onClick="delete_preview()" style="display: none">Delete</button>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                              <div class="form-row btntop">
                                                                 <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                    <input type="submit" class="btn btn-primary btn-block btn-blue" value="Save">
                                                                 </div>
                                                                 <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                    <input type="submit" class="btn btn-success btn-block" value="verify">
                                                                 </div>
                                                                 <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                    <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                   <div class="tab-pane" id="tabs-3" role="tabpanel">
                                                      <div class="card card-box">
                                                         <!-- card start -->
                                                         <div class="card-header">
                                                            Payment Details
                                                         </div>
                                                         <div class="card-body">
                                                            <div class="row">
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Date</span></label>
                                                                     <input type="text" class="form-control" name ="date" id ="date" placeholder="Date">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Pay type</span></label>
                                                                     <input type="text" class="form-control" name ="paytype" id ="paytype" placeholder="Pay type">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Amount</span></label>
                                                                     <input type="text" class="form-control" name ="amount" id ="amount" placeholder="Amount">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                  <div class="form-label-group">
                                                                     <label><span>Pay Amount</span></label>
                                                                     <input type="text" class="form-control" name ="pay-amount" id ="pay-amount" placeholder="Pay Amount">
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                  <div class="form-label-group">
                                                                     <label><span>Remarks</span></label>
                                                                     <textarea class="form-control" name ="remarks" id ="remarks" placeholder="Remarks" rows="5"></textarea>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                                            <div class="form-row btntop">
                                                               <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                  <input type="submit" class="btn btn-primary btn-block btn-blue" value="Save">
                                                               </div>
                                                               <div class="col-md-4 col-4 col-sm-4 col-lg-4 col-xl-4">
                                                                  <a href="http://localhost:8000/subscriber" class="btn btn-block btn-dark">Cancel</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Card end -->
                                    </div>
                                    <!-- col-mg-6 end-->
                              </div>
                              <!--Row End -->
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection
@section('script')

<script type="text/javascript">

$(document).ready(function() {
     var id=2;
var myvar = '<div class="row">'+
'                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">'+
'                                                               <div class="form-label-group">'+
'                                                                     <label><span>Document Type</span></label>'+
'                                                                     <select class="form-control" name="document-type">'+
'                                                                        <option value="">Document Type</option>'+
'                                                                        <option>Doc 1</option>'+
'                                                                        <option>Doc 2</option>'+
'                                                                        <option>Doc 3</option>'+
'                                                                     </select>'+
'                                                                  </div>'+
'                                                            </div>'+
'                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">'+
'                                                               <div class="form-label-group">'+
'                                                                <label><span>Document</span></label>'+
'                                                                <div class="custom-file">'+
'                                                                  <input type="file" class="custom-file-input" id="customFile-'+id+'">'+
'                                                                  <label class="custom-file-label" for="customFile-'+id+'">Choose file</label>'+
'                                                               </div>'+
'                                                              </div>'+
'                                                            </div>'+
'                                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin-top: 29px;"> '+
'                                                              <button class="btn btn-danger btn-sm deleteFile" type="button">Delete</button>'+
'                                                            </div>'+
''+
'                                                            '+
'                                                         </div>';
	

  
    

$(document).on("click", ".add-new-doc", function() {

   $("#doc-new").append(myvar);
   id=id+1;

});

$(document).on("click", ".deleteFile", function() {
   $(this).closest('.row').remove();
});



});


</script>
@endsection