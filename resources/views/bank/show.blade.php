<table class=" table table-striped">
  
  <tbody>
    <tr>
      <th scope="row">Branch Name</th>
      <td>{{ $branch->branch_name}}</td>
      <th scope="row">Branch Code</th>
      <td>{{ $branch->branch_code}}</td>
      
    </tr>
    <tr>
      <th scope="row">Type</th>
      <td>{{ $bank->type}}</td>
      <th scope="row">Bank Name</th>
      <td>{{ $bank->bank_name}}</td>
      
    </tr>
    <tr>
      <th scope="row">Account Holder</th>
      <td>{{ $bank->account_holder}}</td>
      <th scope="row">Ac Number</th>
      <td>{{ $bank->ac_number}}</td>
      
    </tr>
    <tr>
      <th scope="row">Ifsc</th>
      <td>{{ $bank->ifsc}}</td>
      <th scope="row">Bank Branch</th>
      <td>{{ $bank->branch}}</td>
      
    </tr>
    <tr>
      <th scope="row">Opening Balance</th>
      <td>{{ $bank->opening_balance}}</td>
      <th scope="row">Address</th>
      <td>{{ $bank->address}}</td>
      
    </tr>
    


  </tbody>
</table>