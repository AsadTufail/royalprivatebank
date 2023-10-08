<?php 

session_start();

if(isset($_POST['go1'])){
	$pinp=$_SESSION['pin'];	$pinv=$_POST['pin'];

	if($pinv==$pinp)
	{ 
echo "<script type='text/javascript'>
window.location.replace('?final');
</script>";
 }
else{ echo "<div class='alert alert-danger'>Wrong verification pin, a new code has been sent to you, Pls Try again</div>";}
} else{


 require('functions.php'); 
 //process email begin
 $dat=date('D:M:Y , h:i:sa');   
 $subject = 'Validate Transaction [DEBIT]';
$to = $aem;

// Create email headers

$pin=rand(1111,9999); $_SESSION['pin']=$pin; 
    $mes = "<html>

</body>
<img src='https://RoyalPrivateBank.com/img/logo/logo2.png' style='background:; width:30%; height:200px; margin-right:auto; margin-left:auto;'>
<br>
<h2><b>Dear $client ,</b></h2>
<h5>Transaction Notification - Rep_today </h5>
<h1><b> Your authentication pin to complete transaction is $pin </b></h1>
</table>
<TD height='2' style='LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> Remember: We will NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center RoyalPrivateBank.com Wallet Direct on the details below, livechat with us at www.RoyalPrivateBank.com or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.
 
   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

    // Sending email
if(sendit($to,$subject,$mes)){
  
}   



}


?>
<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
								<div><br>

									<strong style="padding-left:10px;">ENTER  OTP PIN SENT  TO YOUR EMAIL TO COMPLETE TRANSACTION</strong>
								</div>
								<div>
<form action="" method="POST" enctype="multipart/form-data" name="transfer" id="transfer">									
									
									
										<table class="table" style="margin-bottom:0px;">
                                        
                                        
                                        <tbody><tr>
									
													   
													    <td width="22%" style="margin-bottom:0px;"> 
		<input type="text" class="form-control" style="margin-bottom:0px;" name="pin" id="pin" placeholder="Enter OTP sent to your email"  required>
		<input type="text" class="form-control" style="margin-bottom:0px;" name="pin2" id="pin2" value="<?php  echo $_SESSION['pin']; ?>" hidden >
		</td>
													</tr>
									  </tbody></table>

									<div class="form-group">
                       
					<div class="waves-input-wrapper waves-effect waves-light"><input name="go1" type="submit" value="Confirm" class="btn btn-primary" id="submit"></div>
									

								  </form>
								</div>
									</div>
					  </div>
					