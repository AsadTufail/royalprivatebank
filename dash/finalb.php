<?php
$am=$_POST['amount'];
$bl=$_POST['balance'];
if($bl<$am){ 

echo "<br><br><br><br><br><br><div class='alert alert-warning'>insufficient funds</div>"; }
else{
	?>
	
<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
							<?php  require('functions.php');
 if(isset($_POST['bn'])){
	 $bn=$_POST['bn'];
	 $ac=$_POST['acctnumber'];
	 $de=$_SESSION['desc'];
	 $bl=$_POST['amount'];
	 $tt=$awa-$bl;
$query="UPDATE investors SET phone=$tt WHERE id=$lid ";
$result=$conn->query($query);
if($result==TRUE) {
 

//dom_import_simplexml
$ip= $_SERVER["REMOTE_ADDR"];
$date= date("D-M-Y : H:isa");
$sql="INSERT INTO logs(client,Description,anount,date,status,currency,balance)
 VALUES('$bn','Interbank transfer($de) from $u2 account ','$bl','$date','completed','$cur','$tt')";
if($conn->query($sql)==TRUE){
}  
    
    //process email begin
 $dat=date('D:M:Y , h:i:sa');   
 $subject = 'Transaction Alert [DEBIT: $'.$am.']';
$to = $aem;

// Create email headers

 
    $mes = "<html>

</body>
<img src='../assets/img/logo.png' style='background:; width:30%; height:200px; margin-right:auto; margin-left:auto;'>
<br>
<h2><b>Dear $client ,</b></h2>

<h4><b>  Transaction Notification - Rep_today </b></h4>

Please see below details of the transaction on your account:
<br>
<table border='1'>
<tr>
<td>ACCOUNT NUMBER </td>
<td>******$ac</td>
</tr>
<br>

<tr>
<td>AMOUNT</td>
<td>$$bl</td>
</tr>


<br>

<tr>
<td>DATED</td>
<td>$dat</td>
</tr>
<tr>
<td>DESCR</td>
<td>$de</td>
</tr>


</table>

</table>
<TD height='2' style='LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> Remember: Our Bank would NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center stanbicuniontreasuryDirect on the details below, livechat with us at www.rexon.online or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.
www.stanbicuniontreasury
   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

    // Sending email
if(sendit($to,$subject,$mes)){
  
}   
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
$ip= $_SERVER["REMOTE_ADDR"];
$date= date("D-M-Y : H:isa");
$sql="INSERT INTO logs(client,Description,anount,date,status,currency,balance)
 VALUES('$u2','Interbank ransfer to account $ac','$bl','$date','debited','$cur','$tt')";
if($conn->query($sql)==TRUE){
	} 
	
	
 header('Refresh: 3; url=index.php');
echo "<div class='alert alert-success'> <i class='fa fa-check' style='font-size:90px;'></i><br><h3>Transfer Successfully Done</h3>

<br>

<a class='btn btn-success' href='?history'>View History</a></div>

";
} 
 }
	?> 
					  </div></div>
<?php } ?>