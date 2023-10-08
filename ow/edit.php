<?php  
$ui=$_GET['ui'];
$query="SELECT * FROM investors WHERE userid=$ui ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$fn=$row["misc"]; $em=$row["email"]; $u=$row["username"]; $p=$row["password"]; $ph=$row["phone"];
}}
?>
<form action="" method="post">
<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="text" style="height:50px;" name="name" value="<?php echo $fn; ?>" placeholder="Enter Your Full Name" required />
                                  </div>

<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="email" name="email" value="<?php  echo $em; ?>" placeholder="Enter  Email Address" required />
                                  </div>

<div class="inputdepsitdes"> <i class="ti-user"></i>
                                    <input type="text" name="user" value="<?php echo $u; ?>" placeholder="Enter  Username"  required />
                                  </div>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="bal" placeholder="Enter Wallet balance" value='<?php echo $ph; ?>' required />
                                  </div>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q1" placeholder="what is your grand fathers name" required />
                                  </div>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q2" placeholder="whats your mothers maiden name" required />
                                  </div>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="q3" placeholder="Whats your pets name" required />
                                  </div>                 
<button  class="btn btn-success" type="submit" name="reg" ><i class="fa fa-file-text-o"></i>UPDATEs</button><br />
 
 

</h4>


</form>
