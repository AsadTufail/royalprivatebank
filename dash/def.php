<!-- Stats -->
        <div class="section">
            <div class="row mt-2">
            <?php
            $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$u2' AND investors.type='checking'";
            $result = $conn->query($query);
            $num = number_format("$awa") . ".00";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $acc_c = $row["accn"];
                    if (isset($acc_c)) {
                      $queryv2 = "SELECT SUM(anount) AS rtv2 FROM logs WHERE  client = '$u2' AND  status ='completed' AND tp='check' AND accn='$acc_c' ";
                      $resultv2 = $conn->query($queryv2);
                      if ($resultv2->num_rows > 0) {
                        while ($rowv2 = $resultv2->fetch_assoc()) {
                          $rtv2 = $rowv2["rtv2"];

                        }
                      } else {
                        echo "0.00";
                      }
                      $queryvz2 = "SELECT SUM(anount) AS rtvz2 FROM logs WHERE  client = '$u2' AND  status ='debited' AND tp='check' AND accn='$acc_c' ";
                      $resultvz2 = $conn->query($queryvz2);
                      if ($resultvz2->num_rows > 0) {
                        while ($rowvz2 = $resultvz2->fetch_assoc()) {
                          $rtvz2 = $rowvz2["rtvz2"];
                        }
                      } else {
                        echo "0.00";
                      }
                      $awamoney2 = $rtv2 - $rtvz2;
                        echo '<div class="col-6">
                            <div class="stat-box">
                                <div class="title">Checking Balance</div>
                                <div class="value mb-1">' . $acc_c . '</div>
                                <div class="value text-success">$' . $awamoney2 . '</div>
                            </div>
                        </div>';
                    }
                }
            }
            ?>
            <?php
            $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$u2' AND investors.type='savings'";
            $result = $conn->query($query);
            $num = number_format("$accb2") . ".00";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $acc_s = $row["accn"];
                    if (isset($acc_s)) {
                      $queryv23 = "SELECT SUM(anount) AS rtv23 FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='save' AND accn='$acc_s' ";
                      $resultv23 = $conn->query($queryv23);
                      if ($resultv23->num_rows > 0) {
                        while ($rowv23 = $resultv23->fetch_assoc()) {
                          $rtv23 = $rowv23["rtv23"];
                        }
                      } else {
                        echo "0.00";
                      }

                      $queryvz23 = "SELECT SUM(anount) AS rtvz23 FROM logs WHERE  client = '$aus' AND  status ='debited' AND tp='save' AND accn='$acc_s' ";
                      $resultvz23 = $conn->query($queryvz23);
                      if ($resultvz23->num_rows > 0) {
                        while ($rowvz23 = $resultvz23->fetch_assoc()) {
                          $rtvz23 = $rowvz23["rtvz23"];
                        }
                      } else {
                        echo "0.00";
                      }
                      $awamoney3 = $rtv23 - $rtvz23;

                      echo '<div class="col-6">
                        <div class="stat-box">
                            <div class="title">Savings Balance</div>
                            <div class="value mb-1">$' . $acc_s . '</div>
                            <div class="value text-success">$' . $awamoney3 . '</div>
                        </div>
                    </div>';
                    }
                  }
               
            }
            ?>     
    
                    <?php
                    $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$u2' AND investors.type='cd'";
                    $result = $conn->query($query);
                    $num = number_format("$accb3") . ".00";
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $acc_cd = $row["accn"];
                            if (isset($acc_cd)) {
                              $queryvz = "SELECT SUM(anount) AS rtvz FROM logs WHERE  client = '$aus' AND  status ='debited' AND tp='fixed' AND accn='$acc_cd' ";
                              $resultvz = $conn->query($queryvz);
                              if ($resultvz->num_rows > 0) {
                                while ($rowvz = $resultvz->fetch_assoc()) {
                                  $rtvz = $rowvz["rtvz"];
                                }
                              } else {
                                echo "0.00";
                              }
                              $queryv = "SELECT SUM(anount) AS rtv FROM logs WHERE  client = '$aus' AND  status ='completed' AND tp='fixed' AND accn='$acc_cd' ";
                              $resultv = $conn->query($queryv);
                              if ($resultv->num_rows > 0) {
                                while ($rowv = $resultv->fetch_assoc()) {
                                  $rtv = $rowv["rtv"];
                                }
                              } else {
                                echo "0.00";
                              }
                              $awamoney = $rtv - $rtvz;
                            echo '<div data-bs-toggle="modal" data-bs-target="#exchangeActionSheetCD" class="col-6">
                                    <div class="stat-box">
                                        <div class="title">Certificate of Deposit</div>
                                        <div class="value mb-1">$' . $acc_cd . '</div>
                                        <div class="value text-success">$' . $awamoney . '</div>
                                    </div>
                                </div>';
                            }
                        }
                    }
                    ?>
                 
        </div>
        <!-- * Stats -->
        
                <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Recent Transactions</h2>
                <a href="?histor" class="link">View All</a>
            </div>
            <div class="transactions">
            
<?php
$query = "SELECT * FROM logs WHERE client='$client' ORDER BY date DESC LIMIT 4";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $m1 = $row["description"];
        $m2 = $row["anount"];
        $tp = $row["tp"];
        $id = $row["id"];
        $m3 = $row["date"];
        $m4 = $row["status"];
        $bal = $row["balance"];
        $m2 = number_format("$m2") . ".00";
        $ref = md5($m3);
        $ref = substr($ref, 0, 8);
        if ($m4 == 'completed') {
            $which = "";
            $badge = "success";
            $ar = "+";
            $r = "Recieved";
        } else if ($m4 == 'debited') {
            $badge = "danger";
            $r = "Sent";
            $which = "<ion-icon name='logo-usd' class='text-danger' style='font-size:25px;></ion-icon>";
            $ar = "-";
        }

        echo "
<a href='?trans&id=$id' class='item' data-bs-toggle='modal' data-bs-target='#transActionSheet$id'>
    <div class='detail'>
        <div class='image-block imaged w48'><ion-icon name='wallet' class='text-success' style='font-size:25px;'></ion-icon></div>
        <div>
            <strong>#$ref</strong>
            <p>$m1</p>
            <p class='price text-info'>" . ($tp == "fixed" ? "CD" : "Fixing") . "</p>
        </div>
    </div>
    <div class='right'>
        <div class='price text-$badge'>$ar $ $m2</div>
    </div>
</a>
";



        echo "<!-- Withdraw Action Sheet -->
        <div class='modal fade action-sheet' id='transActionSheet$id' tabindex='-1' role='dialog'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Transaction Detail</h5>
                    </div>
                    <div class='modal-body'>
                        <div class='action-sheet-content'>
                                <div id='appCapsule' class='full-height'>

        <div class='section mt-2 mb-2'>


            
            <ul class='listview flush transparent simple-listview no-space mt-3'>
                <li>
                    <strong>Status</strong>
                    <span class='text-$badge'>$r</span>
                </li>
                <li>
                    <strong>Description</strong>
                    <span>$m1</span>
                </li>
                <li>
                    <strong>Account Charged</strong>
                    <span>$tp</span>
                </li>
                
                <li>
                    <strong>#Receipt</strong>
                    <span>$ref</span>
                </li>
                <li>
                    <strong>Date</strong>
                    <span>$m3</span>
                </li>
                <li>
                    <strong>Amount</strong>
                    <h3 class='m-0'>$ar $ $m2</h3>
                </li>
            </ul>


        </div>

    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet -->		";


    }
}
?>        
            
            
            
            
            
            
            
            
            
               
                 
                 
            </div>
        </div>
        <!-- * Transactions -->
        
         <!-- my cards -->
         
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        































      