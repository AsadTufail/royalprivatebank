<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
								<div><br>

									<strong style="padding-left:10px;">QUICK MONEY TRANSFER</strong>
								</div>
								<div>
<form action="?fund" method="POST" enctype="multipart/form-data" name="transfer" id="transfer">									
									
									
										<table class="table" style="margin-bottom:0px;">
                                        
                                        
                                        <tbody><tr>
										<td>
                                        <div class="form-group">
										<input type="text" class="form-control" style="margin-bottom:0px; margin-top:0px; " name="beneficiary" id="beneficiary" placeholder="Beneficiary (Account Name)" required="">
									</div>										</td>
										
										
										<td colspan="2" style="margin-bottom:0px;"><div class="form-group">
                                          <input type="text" class="form-control" style="margin-bottom:0px; margin-top:0px;" name="acctnumber" id="acctnumber" placeholder="Account Number" required="">
										</div>                     													</td>
										  </tr>
												
													<tr>
													  <td width="50%" style="margin-bottom:0px;">
                                        	<div class="form-group">
                                        	    <input list="browsers" placeholder="Search or select bank..."  class="form-control border-input" id="bankname">
                                        	    <datalist id="browsers" >

<option>...Choose Bank...</option>
<?php
$query2="SELECT * FROM banks ";
$result2=$conn->query($query2);
if($result2->num_rows>0) {
while ($row2=$result2->fetch_assoc()) {
$bs=$row2["bank"]; $c=$row2["country"]; $ids=$row2["id"];
echo "<option>$bs</option>";

}}
?> 
                                             </datalist>
                                                
                                                    </div> 
</td>
													  <td colspan="2" style="margin-bottom:0px;"><div class="form-group">
                                                        <input type="text" class="form-control" style="margin-bottom:0px;" name="bankadd" id="bankadd" placeholder="Bank Address" required>
													  </div></td>
													</tr>
													<tr>
													  <td style="margin-bottom:0px;"><div class="form-group">
                                                        <input type="text" class="form-control" style="margin-bottom:0px;" name="bankcode" id="bankcode" placeholder="Swift Code(optional)">
													  </div></td>
														<td colspan="2"><div class="form-group">
  <input type="text" class="form-control" style="margin-bottom:0px;" name="routnumber" id="routnumber" placeholder="Routing Number / IBAN">
</div></td>
													</tr>
													<tr>
														<td style="margin-bottom:0px;"><div class="form-group">
                                                          <input type="text" class="form-control input value2" style="margin-bottom:0px;" name="amount" id="amount" placeholder="Amount" required="">
                                                          <div class="error" style="display:none">Insufficient fund</div>
														  															
                                                  														
															
                                                          <input name="hidden" type="hidden" id="hidden" value="">
                                                        </div></td>
                                                        </tr>
														<tr>
                                                        
                                                        	<td style="margin-bottom:0px;"><div class="form-group">
                                                          <input type="text" class="form-control input value2" style="margin-bottom:0px;" name="desc" id="desc" placeholder="Description" required="">
                                                           
														  															
                                                  														
															
                                                          
                                                        </div></td></tr>
														<tr>
													   
													    <td width="22%" style="margin-bottom:0px;"> 
		<select class="form-control" style="margin-bottom:0px;" name="balance"    value="<?php  echo $awa; ?>" >
		<option value='check'>Checking Balance - $<?php  echo $awa; ?></option>
		<option value='save'>Savings Balance - $<?php  echo $accb2; ?></option>
		
		<?php $queryi="SELECT * FROM logs WHERE  client = '$client' AND  status ='completed' AND tp='fixed' AND datecd !='0' LIMIT 1";
$resulti=$conn->query($queryi);
if($resulti->num_rows>0) {
while ($rowi=$resulti->fetch_assoc()) { 
 $dcd1=$rowi["date"];
 $dcd=$rowi["datecd"];
  $par=$rowi["timcd"];
  

 
 
 //cd date check
 $nn=date("d-m-Y:h:i:sa");  
 // echo $nn;
$now = strtotime("$dcd"); // or your date as well
$your_date = strtotime("$dcd1");
$datediff = $now - $your_date;
$ddd= round($datediff / (60 * 60 * 24)); 
//date minus

$toda=date('Y-m-d'); //echo $toda; // or your date as well
$toda=strtotime("$toda");

$your_dater = strtotime("$dcd1");
$datedif = $toda - $your_dater;

$ddd2= round($datedif / (60 * 60 * 24)); 
$ddf=$ddd-$ddd2;
$par=$accb3+$par;

if($ddf<=0){
	echo "<option value='fixed'>Certificate of deposit - $$par</option>";

}
else {
echo $conn->error;

}}}
 
 ?>	
 
 
		</select>
		</td>
													</tr>
									  </tbody></table>

									
				 
									 
									
									<div class="waves-input-wrapper waves-effect waves-light"><input name="submit" type="submit" value="Confirm Transfer" class="btn btn-primary" id="submit"></div>
									
           
								 

								  </form>
								</div>
									</div>
					  </div>
					