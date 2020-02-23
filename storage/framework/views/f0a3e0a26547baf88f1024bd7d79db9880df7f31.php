<!DOCTYPE HTML>
<html>
  <head>
    <title>Bill</title>
  </head>
  <body>
    
<div class="container">
  <table class="" style="width:700px; border: 1px solid #ccc;padding: 10px;background-color: #fff;">
     <tbody>
       <tr>
         <td rowspan="4" style="padding: 10px;">
          <img src="./image/agnilogo.jpg" alt="Agni Logo" width="100">
         </td>
         <td style="text-align: center;"><strong>AGNISWARI CHIT FUNDS PVT LTD</strong></td>
       </tr>
       <tr>
         <td style="text-align: center;">
           HEAD OFFICE <br/>
           4/411,NORTH MAIN ROAD, SETHIYATHOPE & POST ,BHUVANAGIRI TALUK ,608702<br/>
           04144 - 244381,9488624381
           <br/>
           <strong><u>Form XVI</u></strong>
         </td>
       </tr>
       <tr>
         <td colspan="2" style="text-align: right;border-bottom: 0px solid #ccc;padding: 10px;"> GSTIN :33AAOCA8793K1ZY</td>
       </tr>
     </tbody>
   </table>
   <table style="width: 700px; border: 1px solid #ccc;padding: 0px;background-color: #fff;border-collapse: collapse;">
     <tbody>
      
       <tr>
         <td style="padding: 5px;">Group / Tkt.No</td>

         <td><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 90%; display: inline-block;"></span></td>
         <td style="padding: 5px;">Payment Date</td>
         <td ><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 90%; display: inline-block;"></span></td>

       </tr>
        <tr>
         <td colspan="4">
           <table style="width: 100%;padding: 0px;border-collapse: collapse;">
             <td style="padding: 5px;">PSO No</td>
             <td><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 150px; display: inline-block;"></span></td>
             <td style="padding: 5px;">By Law No</td>
             <td><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 150px; display: inline-block;"></span></td>
             <td style="padding: 5px;">Chit Value</td>
             <td style="text-align: right"><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;min-width:150px; max-width: 90%; display: inline-block;"></span></td>  
           </table>
         </td>
       </tr>
        <tr>
         <td style="padding: 5px;">Customer Name</td>

        <td><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 90%; display: inline-block;"><?php echo e($data->subscriber_name); ?></span></td>
         <td style="padding: 5px;">GSTIN</td>
         <td ><span  style="border-bottom: 1px dashed #ccc; padding: 5px 10px;width: 90%; display: inline-block;">TIN09988765456576</span></td>

       </tr>
        <tr>
         <td colspan="4" style="padding: 20px 0px; padding-bottom: 0px;border-collapse: collapse;">
           <table style="width: 100%; border: 1px solid #ccc; border-collapse: collapse;" >
            <tr style="border: 1px solid #ccc;">
             <td colspan="" style="border-right: 1px solid #ccc; padding: 5px;"></td>
             <td style="padding:5px;text-align: right;padding-right: 20px;">Rs.</td>  
             <td style="padding:5px;">Ps.</td>
            </tr>
            <tr>
              <td style="border-right: 1px solid #ccc;padding: 5px;">Payable Amount</td>
              <td style="text-align: right;padding: 5px;"><?php echo e($data->payable_amount); ?></td>
              <td>.00</td>
            </tr>
             <tr>
              <td style="border-right: 1px solid #ccc;padding: 5px;">Chit Due Amount</td>
              <td style="text-align: right;padding: 5px;"><?php echo e($data->due_amount); ?></td>
              <td>.00</td>
            </tr>
             <tr>
              <td style="border-right: 1px solid #ccc;padding: 5px;">Other Amount</td>
              <td style="text-align: right;padding: 5px;"><?php echo e($data->other_amount); ?></td>
              <td>.00</td>
            </tr>
             <tr>
              <td style="border-right: 1px solid #ccc;padding: 5px;">Processing Charge</td>
              <td style="text-align: right;padding: 5px;"><?php echo e($data->processing_amount); ?></td>
              <td>.00</td>
            </tr>
             <tr>
              <td style="border-right: 1px solid #ccc">GST - (CGST-6% +  SGST-6%) = 12%</td>
              <td style="text-align: right;"><?php echo e($data->gst_amount); ?></td>
              <td>.00</td>
            </tr>
            <tr style="border-top: 1px solid #ccc;font-weight: bold;">
              <td style="border-right: 1px solid #ccc;padding: 5px;">Payment Amount</td>
              <td style="text-align: right;padding: 5px;"><?php echo e($data->pay_amount); ?></td>
              <td>.00</td>
            </tr>
           </table>
         </td>
       </tr>
       <tr style="padding-top: 15px;">
         <td colspan="4" style="border: 1px solid #ccc;border-collapse: collapse;">
           <table style="width: 100%; border-collapse: collapse;">
             <tr>
               <td style="padding: 5px">Rupees:</td>
               <td colspan="3"><span style="border-bottom: 1px dashed #ccc; display: inline-block;padding: 5px;width: 95%;"><?php echo e($text); ?></span></td>
             </tr>
             <tr>
               <td style="padding: 5px">Pay Type: </td>
               <td colspan="3"  style="padding: 5px"><?php echo e($data->payment_type); ?></td>
             </tr>
             <tr>
               <td colspan="4" style="text-align: right;padding: 5px;padding-right: 30px;padding-top: 30px;"> For AGNISWARI  CHIT FUNDS  PVT  LTD</td>
             </tr>
              <tr>
               <td colspan="3" style="text-align: right;padding: 5px;padding-top: 20px;"> Customer's Signature</td>
               <td colspan="" style="text-align: right;padding: 5px;padding-top: 20px;padding-right: 30px;"> Cashier / Bill Collector</td>
             </tr>
           </table>
         </td>
       </tr>
     </tbody>
   </table>
</div>
 
  
  
  </body>
</html>
<?php /**PATH E:\finance\finance\resources\views/pdf/debit_payment.blade.php ENDPATH**/ ?>