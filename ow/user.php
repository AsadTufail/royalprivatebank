<div class="card-header border-0">
      <h2 class="mb-0"><a href="?users" class="btn btn-danger font-bold">ALL CUSTOMERS ACCOUNT</a></h2>
    </div>
  <br>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap m-1">
          <tr  class="text-xs font-semibold tracking-wide text-left text-gray-800 font-bold uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">       
            <!-- <td>Photo</td>	 -->
            <td>User ID</td>  	
            <td>User</td>  	
            <td>Pass</td> 
            <!-- <td>pincode</td> -->
            <!-- <td>login pin</td> -->
            <td>Actions</td>                 
            <td>Pin</td>                 
            <td>Status</td>                 
            <td>Edit</td>                 
            <td>Remove</td>	 
          </tr>
 <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">										
                                                                                          
<?php require_once('../connect.php');
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($query);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $aid = $row["userid"];
    $aus = $row["username"];
    $aps = $row["password"];
    $id = $row["id"];
    $ast = $row["status"];
    $asts = $row["status"];
    //  $ada= $row["misc"];
    $q1 = $row["firstname"];
    // $accn= $row["accn"]; 
    // $pino= $row["s4"]; 
    $q2 = $row["lastname"];
    $q3 = $row["referral"];
    $imi = $row["email"];
    $aem = $row["email"];
    $awa = $row["phone"];
    $pix = $row["pix"];
    //  $pin=$row["pin"]; 
    $cur = $row["currency"];
    $loc = $row["address"];
    $lid = $row["id"];
    $pin = $row["pin"];

    //  if($loan==1){  $loan="<span style='border-radius:15px; background:gold;'>LOAN of [$$lneed] requested</span>";} else { $loan=''; }
    $vvx = "<a href='del.php?ui=$aid'><button class='badge-danger'>Delete</button></a>";
    if ($ast == 'N') {
      $ast = "";
    }
    if ($asts == 'P') {
      $dia = "<i class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>Active</i>- <a href='inacti.php?ui=$id'><button class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>Deactivate</button></a>";
    }
    if ($asts == 'N') {
      $dia = "<i class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>InActive</i>- <a href='acti.php?ui=$id'><button class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>Activate</button></a>";
    }
    if ($ast == 'P') {
      $ast = "";
    }
    if ($ast == 'B') {
      $ast = "";
    }
    if ($ast == 'S') {
      $ast = "";
    }

    if ($asts == 'S') {
      $oth = "";
    } else {

    }
    if ($asts == 'N') {
      $viv = "";
    }
    if ($asts == 'P') {
      $viv = "";
    }
    if ($asts == 'B') {

    } else {

    }
    //   $sqlmm="SELECT * FROM investors WHERE referral='$aus'";

    // if ($resultmm=mysqli_query($conn,$sqlmm))
//   {
//   $rowcountmm=mysqli_num_rows($resultmm);
//   $refe= "<span class='btn btn-warning'>".$rowcountmm."</span>"; }


    $act = "";

    if ($loc == 0) {
      $lo = "<a href='?unlock&ui=$lid' class='px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple' ><i class='fa fa-close'></i> Unlock Transfers</a>";

    } else {
      $lo = "<a href='?lock&ui=$lid' class='px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple'><i class='fa fa-check'></i> Lock Transfers</a>";
    }
    ?>
                             <?php
                             $queryv = "SELECT SUM(anount) AS rtv FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='check' ";
                             $resultv = $conn->query($queryv);
                             if ($resultv->num_rows > 0) {
                               while ($rowv = $resultv->fetch_assoc()) {
                                 $rtv = $rowv["rtv"];
                               }
                             } else {
                               echo "0.00";
                             }


                             $queryv2 = "SELECT SUM(anount) AS rtv2 FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='save' ";
                             $resultv2 = $conn->query($queryv2);
                             if ($resultv2->num_rows > 0) {
                               while ($rowv2 = $resultv2->fetch_assoc()) {
                                 $rtv2 = $rowv2["rtv2"];

                               }
                             } else {
                               echo "0.00";
                             }

                             $queryv23 = "SELECT SUM(anount) AS rtv23 FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='fixed' ";
                             $resultv23 = $conn->query($queryv23);
                             if ($resultv23->num_rows > 0) {
                               while ($rowv23 = $resultv23->fetch_assoc()) {
                                 $rtv23 = $rowv23["rtv23"];

                               }
                             } else {
                               echo "0.00";
                             }


                             $queryvz = "SELECT SUM(anount) AS rtvz FROM logs WHERE  client = '$aus' AND  status ='debited' AND tp='check' ";
                             $resultvz = $conn->query($queryvz);
                             if ($resultvz->num_rows > 0) {
                               while ($rowvz = $resultvz->fetch_assoc()) {
                                 $rtvz = $rowvz["rtvz"];

                               }
                             } else {
                               echo "0.00";
                             }


                             $queryvz2 = "SELECT SUM(anount) AS rtvz2 FROM logs WHERE  client = '$aus' AND  status ='debited' AND tp='save' ";
                             $resultvz2 = $conn->query($queryvz2);
                             if ($resultvz2->num_rows > 0) {
                               while ($rowvz2 = $resultvz2->fetch_assoc()) {
                                 $rtvz2 = $rowvz2["rtvz2"];

                               }
                             } else {
                               echo "0.00";
                             }


                             $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$aus' AND investors.type='cd'";
                             $result = $conn->query($query);
                             if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                               $acc_cd = $row["accn"];
                              } 
                             }

                             $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$aus' AND investors.type='checking'";
                             $result = $conn->query($query);
                             if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                               $acc_c = $row["accn"];
                              } 
                             }

                             $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$aus' AND investors.type='savings'";
                             $result = $conn->query($query);
                             if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                               $acc_s = $row["accn"];
                              } 
                             }



                             $queryvz23 = "SELECT SUM(anount) AS rtvz23 FROM logs WHERE  client = '$aus' AND  status ='debited' AND tp='fixed' ";
                             $resultvz23 = $conn->query($queryvz23);
                             if ($resultvz23->num_rows > 0) {
                               while ($rowvz23 = $resultvz23->fetch_assoc()) {
                                 $rtvz23 = $rowvz23["rtvz23"];

                               }
                             } else {
                               echo "0.00";
                             }
                             $awamoney = $rtv - $rtvz;
                             $awamoney2 = $rtv2 - $rtvz2;
                             $awamoney3 = $rtv23 - $rtvz23;
                             ?>
                              `<!-- <td><img src='uploads/$pix'  style='width:60px;'>
                                <form method='post' action='upload.php?ui=$aid' enctype='multipart/form-data' >
                                  <input type='file' name='fileToUpload' id='fileToUpload' >
                                  <br>
                                  <button type='submit' class='badge-info'>Change Photo</button>
                                </form>
                              </td> -->`
                            <?php echo "<tr>
  
  <td><b>$aid</b></td>
  <td><b>$aus</b></td>  
  <td><span>$aps</span></td>   
  <td><strong style='color:green;'>";
  if (isset($acc_c)) {
    echo "Checking: $$awamoney ($acc_c)<br>";
  }
  if (isset($acc_s)) {
    echo "Savings: $$awamoney2 ($acc_s)<br>";
  }
  if (isset($acc_cd)) {
    echo "CD: $$awamoney3 ($acc_cd)<br>";
  }

  ?>
          <?php $queryi = "SELECT * FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='fixed' AND datecd !='0' LIMIT 1";
          $resulti = $conn->query($queryi);
          if ($resulti->num_rows > 0) {
            while ($rowi = $resulti->fetch_assoc()) {
              $dcd1 = $rowi["date"];
              $dcd = $rowi["datecd"];
              $par = $rowi["timcd"];

              //cd date check
              $nn = date("d-m-Y:h:i:sa");
              // echo $nn;
              $now = strtotime("$dcd"); // or your date as well
              $your_date = strtotime("$dcd1");
              $datediff = $now - $your_date;
              $ddd = round($datediff / (60 * 60 * 24));
              //date minus
      
              $toda = date('Y-m-d'); //echo $toda; // or your date as well
              $toda = strtotime("$toda");

              $your_dater = strtotime("$dcd1");
              $datedif = $toda - $your_dater;

              $ddd2 = round($datedif / (60 * 60 * 24));
              $ddf = $ddd - $ddd2;


              if ($ddf <= 0) {
                echo "<i style='color:red; font-size:10px;'>[expired]</i>";

              } else {

                echo "<i style='color:orange; font-size:10px;'>[day $ddf of $ddd days duration to expire] total:$par</i>";
              }
            }
          }
          ?>

          <?php echo "<br> </strong>$dia 
          $lo <br>
          <a href='?ach&name=$aus' class='badge-info' style='color:blue;'><i class='fa fa-credit-card'></i> Account History</a>
      
          <a href='?topupn&name=$aus&cur=$cur&awa=$awa&rs=$lid&imi=$imi'><button type='submit' class='badge-info' style='color:green;'>Topup Account</button> </a>
          <a href='?debitn&name=$aus&cur=$cur&awa=$awa&rs=$lid&imi=$imi'><button type='submit' class='badge-warning' style='color:orange;'>Debit Account</button> </a>
        </td>
      
        <td> $pin</td></td>
        <td> <td><a href='?edi&name=$id' style='color:red;'><i class='fas fa-pencil'></i><b> Edit</b></a></td></td>
        <td> $vvx</td>
        </tr>";
  }
}
?>

  </tbody>
  </table>

</div></div> 