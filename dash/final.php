
<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
							<?php  require('functions.php');
 if(isset($_SESSION['bn'])){
	$bn=$_SESSION['bn'];
	 $am=$_SESSION['am'];
	$tp= $_SESSION['tp'];
	 $bl=$_SESSION['bl'];
	 $desc=$_SESSION['desc'];
	 $tt=$awa-$am;
$query="UPDATE investors SET phone=$tt WHERE id=$lid ";
$result=$conn->query($query);
if($result==TRUE) {
    
    
    
    //process email begin
 $dat=date('D:M:Y , h:i:sa');   
 $subject = 'Transaction Alert [DEBIT: $'.$am.']';
$to = $aem;

// Create email headers

 
    $mes = "<html>

</body>
 
<br>
<h2><b>Dear $client ,</b></h2>

<h4><b> FED BANKING Bank Transaction Notification - Rep_today </b></h4>

Please see below details of the transaction on your account:
<br>
<table border='1'>
<tr>
<td>ACCOUNT NUMBER </td>
<td>******$aid</td>
</tr>
<br>

<tr>
<td>AMOUNT</td>
<td>$$am</td>
</tr>


<br>

<tr>
<td>DATED</td>
<td>$dat</td>
</tr>
<tr>
<td>DESCR</td>
<td>$desc</td>
</tr>


</table>

</table>
<TD height='2' style='LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> Remember: Our Bank would NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center cbfinac.onlineDirect on the details below, livechat with us at www.RoyalPrivateBank.com or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.
www.RoyalPrivateBank.com
   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

    // Sending email
if(sendit($to,$subject,$mes)){
  
}   
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
$ip= $_SERVER["REMOTE_ADDR"];
$date= date("D-M-Y : H:isa");
$sql="INSERT INTO logs(client,Description,anount,date,status,currency,balance,tp)
 VALUES('$u2','Transfer to $bn account','$am','$date','debited','$cur','$tt','$tp')";
if($conn->query($sql)==TRUE){
	} 
	
	
 header('Refresh: 3; url=index.php');
echo "<div class='alert alert-success'> <i class='fa fa-check' style='font-size:90px;'></i><br><h3>Transfer Successfully Done</h3>

<br>

<a class='btn btn-success' href='?histor'>View History</a></div>

";
} 
 }
	?> 
					  </div></div>
					