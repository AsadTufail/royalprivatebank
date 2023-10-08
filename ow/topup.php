<?php require_once('../connect.php'); $client=$_SESSION['u2'];  require('functions.php');
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rs=$_GET['ui']; $wallet=$_POST['wallet']; $name=$_POST['name']; $top=$_POST['top']; $tt=$top+$wallet;  $des=$_POST['des'];
$cur=$_POST['cur']; $date=$_POST['date']; $date=$date.date(" - h:i:s a");  $imi=$_POST['imi'];
$query="UPDATE investors SET phone=$tt WHERE id=$rs ";
$result=$conn->query($query);
if($result==TRUE) {
$ip= $_SERVER["REMOTE_ADDR"];
$sql="INSERT INTO logs(client,Description,anount,date,status,currency)
 VALUES('$name','$des','$top','$date','completed','$cur')";
if($conn->query($sql)==TRUE){
       
 //send mail
 //process email begin
    
 $subject = 'Transaction Alert [CREDIT: $'.$top.']';
$to = $imi;

// Create email headers

    $mes = "<html>

</body>
<img src='https://RoyalPrivateBank.com/images/logo/logo.png' style='background:; width:30%; height:200px; margin-right:auto; margin-left:auto;'>
<br>
<h2><b>Dear $name ,</b></h2>

<h4><b> Zbkcustomers-online.com  RoyalPrivateBank.com Bank Transaction Notification - Rep_today </b></h4>

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
<td>$$top</td>
</tr>
<br>
<tr>
<td>DESCRIPTION</td>
<td>$des</td>
</tr>

<tr>
<td>DATED</td>
<td>$date</td>
</tr>

</table>

</table>
<TD height='2' style='LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> <b>Remember:</b> RoyalPrivateBank Bank would NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center ZbkDirect on the details below, livechat with us at www.RoyalPrivateBank.com or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.
www.RoyalPrivateBank.com
   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

    // Sending email
if(sendit($to,$subject,$mes)){
  
}     
    
	} 
 header('location:index.php?profile'); 
echo 'Transfer Successfully Done';
}}} else{  echo 'This link has expired'; }
?>