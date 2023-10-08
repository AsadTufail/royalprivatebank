<?php
  if(isset($_POST["update"])){
  $credit=$_POST["credit"];
  $la=$_POST["la"];

$sql="INSERT INTO loan(lamount,lneed,lstatus,userid) VALUES('$credit','$la','P','$lid'";
if ($conn->query($sql) === TRUE) {
   
 echo "<div class='alert alert-success'>LOAN APPLICATION SUCCESSFUL!</div>";

} else{ echo "<div class='alert alert-danger'>Error occured!</div>"; }
  
  }  
  ?>
  
  
  
  <form id="contactForm" method="POST"  class="log-form">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" id="name" class="form-control" name="la" placeholder="Loan amount" required >
                                            </div>
											<br>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
 <select   class="form-control" name="credit" style="color:blue;" >
<option value="50">$3,000 loan credit allowed</option>
<option value="100">$6,000 loan credit allowed</option>
<option value="150">$10,000 loan credit allowed</option>
<option value="200">$30,000 loan credit allowed</option>


     </select>
     <br> 
 <br>
     <button type="submit" name="update" id="submit" class="btn btn-success">Appl Now</button>
     
 </div>
 </form>
 
 
 