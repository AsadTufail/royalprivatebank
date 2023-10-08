<script type="text/javascript">

        function isNumberKey(evt, obj) {

            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }



    </script>
<?php if (isset($_POST['reg'])) {

  echo "<div class=''>";
  //Fetching Values from INPUTS
  $name = $_POST['userid'];
  $type = $_POST['type'];
  // $phone=$_POST['bal'];
// $bitcoin=$_POST['q1'];
// $ico=$_POST['q3'];
  $accn = trim($_POST['accn']);
  $accn2 = trim($_POST['accn2']);
  $accn3 = trim($_POST['accn3']);
  // $country=trim($_POST['country']);
// $address=trim($_POST['address']);
// $cur=$_POST['cur'];
// $referal=$_POST['q3'];
  $user = trim($_POST['userid']);
  // $user=str_replace(' ','',$user);
// $email=trim($_POST['email']);
  if (isset($_POST['ref'])) {
    $ref = trim($_POST['ref']);

  } else {
    $ref = 'N';
  }
  // $pass1=trim($_POST['pass1']);
// $pass2=trim($_POST['pass2']);
// $pass=md5($_POST['pass1']);
//check if form fields left empty 
// if(empty($name) || empty($email) || empty($pass1) || empty($pass2)){
// echo "<h4><i class='fa fa-times'></i> Some Fields Are Empty!</h4>";		
// }
// check passwords

  //Insert To Database	
  $date = date('D M ,Y');
  $time = date('h:i:sa');
  $verify = md5('$time');
  $verify = $verify . $user;
  $r = rand(1000, 9999);
  $rout = rand(100000000, 999999999);
  $ud = $r;
  //check if user already exist
// $query="SELECT * FROM users WHERE username='$user' ";
// $result=$conn->query($query);
// if($result->num_rows>0) {
// while ($row=$result->fetch_assoc()) {
// $u=$row["username"];
// if($user==$u){ echo "<center><div class='alert alert-danger'><i class='fa fa-info'></i> 
// Username Already Exist ! </div></center>";}}}
// else{
  $s1 = rand(123456, 987654);
  $s2 = rand(234567, 876543);
  $s3 = rand(112233, 998877);
  $s4 = rand(2244, 9977);
  $ran = rand(1234, 9999);
  $card = rand(1089, 8999);
  $card = $card . $ran . '12' . $card;
  $card2 = $card . $ran . '34' . $card;
  $card3 = $card . $ran . '56' . $card;
  $cvv = "12/29";
  $cvv2 = "12/29";
  $cvv3 = "12/29";
  $sql = "INSERT INTO investors(userid,date,time,status,verify,te,misc,cvv,card,accn,s1,s2,s3,s4,rout,card2,cvv2,card3,cvv3,accn2,accn3,type)
 VALUES('$name','$date','$time','P','$verify','1','$name','$cvv','$card','$accn','$s1','$s2','$s3','$s4','$rout','$card2','$cvv2','$card3','$cvv3','$accn2','$accn3','$type')";
  if ($conn->query($sql) == TRUE) {
    echo "<div class='alert alert-success'>Creation Successful, you can go ahread to top up the account</div>";
  } else {
    echo "xxx" . $conn->error;
  }




  // }

}
echo "</div>";
?>
<center>
    <h3>CREATE NEW BANK ACCOUNT</h3>
<form action="" method="post"> <br>
                                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                                    <input type="text" name="userid" placeholder="User Id" style="width:50%; height:50px;" required />
                                  </div>
                  <div class="inputdepsitdes"> <i class="ti-lock"></i>
                  <span>Account Number</span>
                  <br>
                  <input type="text" name="accn" placeholder="Account no." value="<?php echo "098" . rand(1111111, 9999999); ?>" style="width:50%; height:50px;" required />
                  <br>
                  <span>Account Type</span>
                  <br>
                  <select name="type" id="type" style="width:50%; height:50px;" required>
                    <option value="checking">Checking</option>
                    <option value="savings">Savings</option>
                    <option value="cd">CD</option>
                    <option value="loan">Loan</option>
                  </select>
                  <input type="text" name="accn2" placeholder="Account no." value="<?php echo "078" . rand(1111111, 9999999); ?>" style="width:50%; height:50px;" required hidden />
                  <input type="text" name="accn3" placeholder="Account no." value="<?php echo "009" . rand(1111111, 9999999); ?>" style="width:50%; height:50px;" required hidden />
                                  
                  </div>
                  <?php
                  if (isset($_GET['ref'])) {
                    echo '<div class="form-group group-icon">
                            <label class="text-muted" for="exampleInputPassword2">My Referral</label>
                            <div class="group-icon">
                          <input id="ref" name="ref"  value="'; ?>   <?php echo $_GET["ref"]; ?>   <?php echo '" type="text" placeholder="Referal" class="form-control">
                          <span class="icon-lock text-muted icon-input"></span>
                            </div>
                      </div> ';
                  }
                  ?>

 <br>
                <br> 
           <br>     
<button  class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="reg" ><i class="fa fa-file-text-o"></i>Open account</button><br />



</form></center>
