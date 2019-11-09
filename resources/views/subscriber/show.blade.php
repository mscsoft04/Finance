<table class=" table table-striped">
  
  <tbody>
    <tr>
      <th scope="row">Branch Name</th>
      <td>{{ $branches->branch_name}}</td>
      <th scope="row">Branch Code</th>
      <td>{{ $branches->branch_code}}</td>
      
    </tr>
    <tr>
      <th scope="row">Name </th>
      <td>{{ $subscriber->subscriber_name . $subscriber->Initial_name}}</td>
      <th scope="row">Phone No</th>
      <td>{{ $subscriber->phone_no}}</td>
      
    </tr>
    <tr>
      <th scope="row">Relation</th>
      <td>{{ $subscriber->relation_type}}</td>
      <th scope="row">Realtion Name</th>
      <td>{{ $subscriber->realtion_name}}</td>
      
    </tr>
    <tr>
      <th scope="row">Date Of Birth</th>
      <td>{{ $subscriber->dob}}</td>
      <th scope="row">Age</th>
      <td>{{ $subscriber->age}}</td>
      
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td>{{ $subscriber->gender}}</td>
      <th scope="row">Marital Status</th>
      <td>{{ $subscriber->marital_status}}</td>
      
    </tr>
    <tr>
      <th scope="row">Date Of Joing</th>
      <td>{{ $subscriber->doj}}</td>
      <th scope="row">Email</th>
      <td>{{ $subscriber->mail_id}}</td>
      
    </tr>
    <tr>
      <th scope="row">Mobile Number</th>
      <td>{{ $subscriber->mobile_no}}</td>
      <th scope="row">Phone Number</th>
      <td>{{ $subscriber->phone_no}}</td>
      
    </tr>
    <tr>
      <th scope="row">Adhar</th>
      <td>{{ $subscriber->aadhar_no}}</td>
      <th scope="row">Pan</th>
      <td>{{ $subscriber->pan_no}}</td>
      
    </tr>
    <tr>
      <th scope="row">Rationcard</th>
      <td>{{ $subscriber->rationcard_no}}</td>
      
      <th scope="row">Driving Licence</th>
      <td>{{ $subscriber->driving_licence}}</td>
      
    </tr>
    <tr>
      <th scope="row">Voter ID</th>
      <td>{{ $subscriber->voter_id}}</td>
      <th scope="row">GST Number</th>
      <td>{{ $subscriber->gst_no}}</td>
      
    </tr>

    <tr>
      <th scope="row" rowspan="5" >Permanent Address</th>
      <th scope="row" >ADDRESS</th>
      <td colspan="2">{{ $subscriber->p_address}}</td>
      </tr>
    <tr>
      <th scope="row">State</th>
      <td colspan="2">{{ $subscriber->p_state}}</td>
      
    </tr>
    <tr>
      <th scope="row">District</th>
      <td colspan="2">{{ $subscriber->p_district}}</td>
      </tr>
    <tr>
      <th scope="row">Taluk</th>
      <td colspan="2">{{ $subscriber->p_taluk}}</td>
      
    </tr>
    <tr>
      <th scope="row">Pincode</th>
      <td colspan="2">{{ $subscriber->p_pincode}}</td>
      </tr>
    

    <tr>
    <th scope="row" rowspan="5">Comunication Address</th>
      <th scope="row">ADDRESS</th>
      <td colspan="2">{{ $subscriber->c_address}}</td>
      </tr>
    <tr>
      <th scope="row">State</th>
      <td colspan="2">{{ $subscriber->c_state}}</td>
      
    </tr>
    <tr>
      <th scope="row">District</th>
      <td colspan="2">{{ $subscriber->c_district}}</td>
      </tr>
    <tr>
      <th scope="row">Taluk</th>
      <td colspan="2">{{ $subscriber->c_taluk}}</td>
      
    </tr>
    <tr>
      <th scope="row">Pincode</th>
      <td colspan="2">{{ $subscriber->c_pincode}}</td>
      </tr>
    

    <tr>
      <th scope="row">Agent Type</th>
      <td>{{ $subscriber->agent_Type}}</td>
      <th scope="row">Refered By</th>
      <td>{{ $subscriber->refered_by}}</td>
      
    </tr>
    <tr>
      <th scope="row">Collection Area</th>
      <td>{{ $subscriber->collection_area}}</td>
      <th scope="row">Occupation</th>
      <td>{{ $subscriber->occupation}}</td>
      
    </tr>
    <tr>
      <th scope="row">Retirement Date</th>
      <td>{{ $subscriber->retirement_date}}</td>
      <th scope="row">PF Number</th>
      <td>{{ $subscriber->pf_no}}</td>
      
    </tr>
    <tr>
      <th scope="row">Relationship</th>
      <td>{{ $subscriber->relationship}}</td>
      <th scope="row">Relation For</th>
      <td>{{ $subscriber->relation_for}}</td>
      
    </tr>
    <tr>
      <th scope="row">Note</th>
      <td colspan="3">{{ $subscriber->additional_notes}}</td>
     
      
    </tr>
    


  </tbody>
</table>