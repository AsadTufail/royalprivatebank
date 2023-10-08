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
    <h1>TOPUP ACCOUNT</h1>
<?php require('functions.php');
if (isset($_POST['topp'])) {
    $imi = $_POST['imi'];
    $rs = $_POST['rs'];
    $wallet = $_POST['wallet'];
    $aid = $_POST['aid'];
    $name = $_POST['name'];
    $accn = $_POST['accn'];
    $top = $_POST['top'];
    $tt = $top + $wallet;
    $des = $_POST['des'];
    $cur = $_POST['cur'];
    $date = $_POST['date'];
    $tim = $_POST['tim'];
    $datecd = $_POST['datecd'];
    $timcd = $_POST['timcd'];
    $par = $timcd / 100 * $top;
    $query2 = "SELECT * FROM investors WHERE accn=$accn";
    $result2 = $conn->query($query2);
    if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
            $check = $row2["type"];
            if ($check == "checking") {
                $tp = "check";
            }
            else if ($check == "savings") {
                $tp = "save";
            }
            else if ($check == "cd") {
                $tp = "fixed";
            }
            else if ($check == "loan") {
                $tp = "loan";
            }
            $query = "UPDATE users SET phone=$tt WHERE id=$rs ";
            $result = $conn->query($query);
            if ($result == TRUE) {
                $ip = $_SERVER["REMOTE_ADDR"];
                $sql = "INSERT INTO logs(client,Description,anount,date,status,currency,balance,tp,datecd,timcd,accn)
 VALUES('$name','$des','$top','$date','completed','$cur','$tt','$tp','$datecd','$par', $accn)";
                if ($conn->query($sql) == TRUE) {

                    //send mail
//process email begin

                    $subject = 'Alert [CREDIT: $' . $top . ']';
                    $to = $imi;
                    // Create email headers
                    $mes = "<html>
</body>
<img src='https://RoyalPrivateBank.com/assets/img/logo.png' style='background:; width:30%; height:200px; margin-right:auto; margin-left:auto;'>
<br>
<h2><b>Dear $name ,</b></h2>

<h4><b> RoyalPrivateBank.com Transaction Notification - Rep_today </b></h4>

Please see below details of the transaction on your account:
<br>
<table border='0'>
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
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 12px'> <b>Remember:</b> Biinance Fintechnology Bank would NEVER call, SMS or e-mail requesting for your card details, PIN, token codes, mobile/internet banking login details or other account related information. Please DO NOT respond to such messages.

You can reach our 24/7 contact center BiinanceDirect on the details below, livechat with us at www.RoyalPrivateBank.com or click the Facebook and Twitter buttons below to engage us on social media.

Thank you for Banking with us.
www.RoyalPrivateBank.com
   
    
	</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>";

                    // Sending email
                    if (sendit($to, $subject, $mes)) {

                    }









                }
                header('Refresh: 3; url=index.php');
                echo "Transfer Successfully Done";
            }
        }
    }
}
?>   
     
    
    
    
    
    
    
    
    <form method='post' action=''  >
 <?php
 if (isset($_GET['name'])) {
     $aus = $_GET['name'];
     $awa = $_GET['awa'];
     $rs = $_GET['rs'];
     $cur = $_GET['cur'];
 } else {
     $aus = "";
     $cur = "";
     $awa = "0";
     $rs = 0;
 }
 ?> 

<select name='accn' id="accn"> 
<?php
$query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$aus'";
$result = $conn->query($query);
if ($result === false) {
    // Handle query error
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $accn = $row["accn"];
            $type = $row["type"];
            echo "<option value='$accn'>$accn ($type)</option>";
        }
    } else {
        echo "<option value=''>No Account found</option>";
    }
}
?>
</select>
<br>


   <input type='text' name='top' style='widht:50%; border:1px solid black; color:red; background:lavender' 
   onkeypress='return isNumberKey(event,this)' placeholder='Amount' required><br><br>
   <input type='text' name='des' placeholder='Description' required> <br><br>
   <input type='text' name='wallet' value='<?php echo $awa; ?>' hidden>  
   <input type='text' name='imi' value='<?php $imi = $_GET['imi'];
   echo $imi; ?>'  hidden>
   <input type='text' name='name' value='<?php echo $aus; ?>'  hidden> 
    <input type='text' name='aid' value='<?php echo $_GET['aid']; ?>'  hidden> 
   <input type='text' name='cur' value='<?php echo $aus; ?>'  hidden>  <input type='text' name='rs' value='<?php echo $rs; ?>'  hidden> 
      <input type='date' name='date' value='<?php echo strtotime("now") ?>' required  ><br><br>
      <input type='text' name='tim' value='<?php echo date("h:i:sa"); ?>'><br><br>
      
<div style='background:green;'>	  
<p><b>only for CD topup</b></p><br>Date/time of expiry of CD deposit
<input type='date' name='datecd' value='<?php echo strtotime("now") ?>'  ><br><br>
     <br><input type='text' name='timcd' placeholder='percentage'><br><br>
</div>

     <button type='submit' name='topp' class='px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple'>Top up Account</button>
  </form><br><br><hr>
  
  
                   <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                
                        <div class="card-header">
                         Account Statement		              </div>
                        <div class="card-table table-responsive"><table class="w-full whitespace-no-wrap">
                        
                            <thead class="thead-light">
                              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th width="25%">Date / Time </th>
                                  <th width="12%">Credit / Debit </th>
                                  <th width="25%">Description</th>
                                  <th width="15%">Amount</th>
                                  <th width="15%">Type</th>
                                  <th width="16%">Action </th>
                                  <th width="7%">&nbsp;</th>
                              </tr>
                            </thead>
<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
<?php
$query = "SELECT * FROM logs WHERE client='$aus' ORDER BY id DESC";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $m1 = $row["description"];
        $m2 = $row["anount"];
        $m3 = $row["date"];
        $m4 = $row["status"];
        $tp = $row["tp"];
        if ($m4 == 'completed') {
            $check = "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>Credit</span>";
            $badge = "px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100";
            $h = "text-success";
            $m2 = "+ " . $m2;
        } else {
            $check = "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>Debit</span> ";
            $badge = "px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600";
            $h = "text-danger";
            $m2 = "- " . $m2;
        }
        $rand = rand(111111111111, 999999999999);



        echo "<tr>
<td>$m3</td>
<td> $check</td>
<td>$m1		          
</td>
<td>                        
<h4 class='$badge'>$cur $m2</h4>	
</td>
<td>$m4
</td>
<td>$tp		
</td>
<td>
</td>
</tr>";
    }
}
?>
</tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
                    
              
