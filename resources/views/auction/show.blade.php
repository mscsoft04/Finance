<table class=" table table-striped">
  
   <tbody>
     <tr>
       <th scope="row">Customer Name</th>
       <td>{{ $customer->subscriber_name}}</td>
       <th scope="row">Group</th>
       <td>{{ $data->name}}</td>
       
     </tr>
     <tr>
       <th scope="row">Auction Number</th>
       <td>{{ $auction->auction_number}}</td>
       <th scope="row">Auction Amount</th>
       <td>{{ $auction->auction_amount}}</td>
       
     </tr>
     <tr>
       <th scope="row">Auction Date</th>
       <td>{{ $auction->auction_date}}</td>
       <th scope="row">Commision Amount</th>
       <td>{{ $auction->commision_amount}}</td>
       
     </tr>
     <tr>
       <th scope="row">GST Amount</th>
       <td>{{ $auction->gst_amount}}</td>
       <th scope="row">Dividend Amount</th>
       <td>{{ $auction->dividend_amount}}</td>
       
     </tr>
     <tr>
       <th scope="row">Each Dividend Amount</th>
       <td>{{ $auction->each_dividend_amount}}</td>
       <th scope="row">Due Amount</th>
       <td>{{ $auction->due_amount}}</td>
       
     </tr>
 
 
   </tbody>
 </table>