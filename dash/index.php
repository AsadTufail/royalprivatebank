<?php require_once('../connect.php');
$u2 = $_SESSION['u2'];
$client = $u2;
if (!isset($_SESSION['u2'])) {
    header("location:logout.php");
} else {
    echo "<center> Welcome , $client  </center> ";
}
$query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$u2'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $s1 = $row["s1"];
        $s2 = $row["s2"];
        $s3 = $row["s3"];
        $s4 = $row["s4"];
        $aid = $row["userid"];
        $aus = $row["username"];
        $aps = $row["password"];
        $accn = $row["accn"];
        $accn2 = $row["accn2"];
        $accn3 = $row["accn3"];
        $address = $row["address"];
        $ast = $row["status"];
        $asts = $row["status"];
        $ada = $row["misc"];
        $q1 = $row["firstname"];
        $country = $row["country"];
        $q2 = $row["lastname"];
        $q3 = $row["referral"];
        $aem = $row["email"];
        $awawa = '' . $row["phone"];
        $card = $row["card"];
        $card2 = $row["card2"];
        $card3 = $row["card3"];
        $pix = $row["pix"];
        $loc = $row["loc"];
        $lid = $row["id"];
        $cur = $row["currency"];
        $ip = $row["ip"];
        $at = $row["attime"];
        $location = $row["location"];
        $ph = $row["ph"];
        $dob = $row["age"];
        $rout = $row["rout"];
        $eth = $row["ethereum"];
        $cvv = $row["cvv"];
        $cvv2 = $row["cvv2"];
        $cvv3 = $row["cvv3"];
        //  $un1=$row["un1"];
//  $un2=$row["un2"];
//  $un3=$row["un3"];
    }
}
$query = "SELECT * FROM admin WHERE id=1";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $warn = $row["confirm"];
    }
}
?>

<?php
$queryv = "SELECT SUM(anount) AS rtv FROM logs WHERE client='$client' AND  status ='completed' And tp='check'";
$resultv = $conn->query($queryv);
if ($resultv->num_rows > 0) {
    while ($rowv = $resultv->fetch_assoc()) {
        $rtv = $rowv["rtv"];

    }
}
$queryv21 = "SELECT SUM(anount) AS rtv21 FROM logs WHERE client='$client' AND  status ='completed' And tp='save'";
$resultv21 = $conn->query($queryv21);
if ($resultv21->num_rows > 0) {
    while ($rowv21 = $resultv21->fetch_assoc()) {
        $rtv21 = $rowv21["rtv21"];

    }
}


$queryv213 = "SELECT SUM(anount) AS rtv213 FROM logs WHERE client='$client' AND  status ='completed' And tp='fixed'";
$resultv213 = $conn->query($queryv213);
if ($resultv213->num_rows > 0) {
    while ($rowv213 = $resultv213->fetch_assoc()) {
        $rtv213 = $rowv213["rtv213"];

    }
}

?>
<?php
$queryv2 = "SELECT SUM(anount) AS rtv2 FROM logs WHERE client='$client' AND  status ='debited' And tp='check' ";
$resultv2 = $conn->query($queryv2);
if ($resultv2->num_rows > 0) {
    while ($rowv2 = $resultv2->fetch_assoc()) {
        $rtv2 = $rowv2["rtv2"];


    }
}

$queryv22 = "SELECT SUM(anount) AS rtv22 FROM logs WHERE client='$client' AND  status ='debited' And tp='save' ";
$resultv22 = $conn->query($queryv22);
if ($resultv22->num_rows > 0) {
    while ($rowv22 = $resultv22->fetch_assoc()) {
        $rtv22 = $rowv22["rtv22"];

    }
}


$queryv223 = "SELECT SUM(anount) AS rtv223 FROM logs WHERE client='$client' AND  status ='debited' And tp='save' ";
$resultv223 = $conn->query($queryv223);
if ($resultv223->num_rows > 0) {
    while ($rowv223 = $resultv223->fetch_assoc()) {
        $rtv223 = $rowv223["rtv223"];


    }
}

$awa = $rtv - $rtv2;
$accb2 = $rtv21 - $rtv22;
$accb3 = $rtv213 - $rtv223;


?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>RoyalPrivateBank Panel</title>
    <meta name="description" content="Scril Credit Union">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light" style="background:;">
        <div class="left" style="background:;">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="background:;">
             <div class="item">
                 <a href="/dash">
                    <div class="in">
                        <div>
                           Royal Private Bank
                        </div>
                        <!--<div class="form-check form-switch  ms-2" style="background:linen;">-->
                        <!--    <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">-->
                        <!--    <label class="form-check-label" for="darkmodeSwitch"></label>-->
                        <!--</div>-->
                    </div>
                </a>
                </div>
        </div>
        <div class="right">
            <a href="?histor" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                
            </a>
            <a href="?profile" class="headerButton">
                <img src="assets/img/logo.png" alt="image" class="imaged w32">
                 
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <!--<div id="appCapsule" style="background:#df4040; ">-->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Total Balance</span>
                        <h1 class="total">$ <?php $nm = $awa;
                        $nmm = $nm + $accb2 + $accb3;
                        echo number_format("$nmm");

                        ?></h1>
                    </div>
                    <!--<div class="right">-->
                    <!--    <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">-->
                    <!--        <ion-icon name="add-outline"></ion-icon>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <!--<div class="wallet-footer">-->
                <!--    <div class="item">-->
                <!--        <a href="?inter" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">-->
                <!--            <div class="icon-wrapper bg-danger">-->
                <!--                <ion-icon name="arrow-down-outline"></ion-icon>-->
                <!--            </div>-->
                <!--            <strong>Interbank</strong>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="item">-->
                <!--        <a data-bs-toggle="modal" data-bs-target="#sendActionSheet">-->
                <!--            <div class="icon-wrapper">-->
                <!--                <ion-icon name="arrow-forward-outline"></ion-icon>-->
                <!--            </div>-->
                <!--            <strong>Wire</strong>-->
                <!--        </a>-->
                <!--    </div>-->
                    
                <!--    <div class="item">-->
                <!--        <a href="?loan" data-bs-toggle="modal" data-bs-target="#exchangeActionSheetloan">-->
                <!--            <div class="icon-wrapper bg-warning">-->
                <!--                <ion-icon name="swap-vertical"></ion-icon>-->
                <!--            </div>-->
                <!--            <strong>Loan</strong>-->
                <!--        </a>-->
                <!--    </div>-->

                <!--</div>-->
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Auth User</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <?php include("au.php"); ?>
                    </div>
                </div>
            </div>
        </div>  </div>
        <!-- * Deposit Action Sheet -->

        
<div class="modal fade action-sheet" id="exchangeActionSheetloan" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Loan Application</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                           
        <?php include("newloan.php");
        ?>                       
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>		
<div class="modal fade action-sheet" id="exchangeActionSheetloan" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Loan History</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                           
        <?php include("loan.php");
        ?>                       
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>		
        
<div class="modal fade action-sheet cd-tog" id="exchangeActionSheetCD" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CD Details</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                           
        <?php include("cd.php");
        ?>                       
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>		
        
        
        
         
        
        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Inter-Transfer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form action="?finalb"  method="POST" enctype="multipart/form-data" name="transfer" id="transfer">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Reciever</label>
                                        <input list="browsers" name="bn" id="beneficiary" placeholder="Beneficiary (Account Name)"  class="form-control border-input" required >
                                                <datalist id="browsers" >


<?php
$query2 = "SELECT * FROM investors JOIN users ON investors.userid = users.userid";
$result2 = $conn->query($query2);
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        $bs = $row2["username"];
        $c = $row2["country"];
        $ids = $row2["id"];
        echo "<option>$bs</option>";

    }
}
?> 
                                             </datalist>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Account Number</label>
                                        <input list="browsers2" type="text" class="form-control" style="margin-bottom:0px; margin-top:0px;" name="acctnumber" id="acctnumber" placeholder="Account Number" required="">
                                          <datalist id="browsers2" >


<?php
$query22 = "SELECT * FROM investors JOIN users ON investors.userid = users.userid";
$result22 = $conn->query($query2);
if ($result22->num_rows > 0) {
    while ($row22 = $result22->fetch_assoc()) {
        $bs2 = $row22["accn"];
        $c = $row22["country"];
        $ids = $row22["id"];
        echo "<option>$bs2</option>";

    }
}
?> 
                                             </datalist>
                                    </div>
                                </div>
                                
                                
                                
                                

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Description</label>
                                        <input type="text" class="form-control" id="text11d" name="desc" id="desc" placeholder="Description" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1">$</span>
                                        <input type="number" class="form-control" name="amount" required id="amount" placeholder="Enter an amount"
                                            >
                                    </div>
                                    <br><select class="form-control" style="margin-bottom:0px;" name="balance"    value="<?php echo $awa; ?>" >
        <option value='check'>Checking Balance - $<?php echo $awa; ?></option>
        <option value='save'>Savings Balance - $<?php echo $accb2; ?></option>
        
<?php $queryi = "SELECT * FROM logs WHERE  client = '$client' AND  status ='completed' AND tp='fixed' AND datecd !='0' LIMIT 1";
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
        $par = $accb3 + $par;

        if ($ddf <= 0) {
            echo "<option value='fixed'>Certificate of deposit - $$par</option>";

        } else {
            echo $conn->error;

        }
    }
}

?>        
        
        </select>
        <br>
                                </div>

                                <div class="form-group basic">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg"
                                       >Transfer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            
                            
<?php include("transfer.php"); ?>                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Exchange Action Sheet -->
        
        <!-- * Exchange Action Sheet -->

       
<?php
if (isset($_GET['profile'])) {
    include('user.php');
} else if (isset($_GET['security'])) {
    include('security.php');
} else if (isset($_GET['fund'])) {
    include('fund.php');
} else if (isset($_GET['2fa'])) {
    include('2fa.php');
} else if (isset($_GET['loan'])) {
    include('loan.php');
} else if (isset($_GET['newloan'])) {
    include('loan.php');
} else if (isset($_GET['histor'])) {
    include('history.php');
} else if (isset($_GET['process'])) {
    include('process.php');
} else if (isset($_GET['inter'])) {
    include('inter.php');
} else if (isset($_GET['card'])) {
    include('card.php');
} else if (isset($_GET['transfer'])) {
    include('transfer.php');
} else if (isset($_GET['final'])) {
    include('final.php');
} else if (isset($_GET['auth1'])) {
    include('auth1.php');
} else if (isset($_GET['auth2'])) {
    include('auth2.php');
} else if (isset($_GET['auth3'])) {
    include('auth3.php');
} else if (isset($_GET['locked'])) {
    include('locked.php');
} else if (isset($_GET['auth4'])) {
    include('auth4.php');
} else if (isset($_GET['a1'])) {
    include('a1.php');
} else if (isset($_GET['a2'])) {
    include('a2.php');
} else if (isset($_GET['au'])) {
    include('au.php');
} else if (isset($_GET['a3'])) {
    include('a3.php');
} else if (isset($_GET['a4'])) {
    include('a4.php');
} else if (isset($_GET['finalb'])) {
    include('finalb.php');
} else if (isset($_GET['locked'])) {
    include('locked.php');
} else if (isset($_GET['trans'])) {
    include('trans.php');
} else {
    include('def.php');
}

?>    


       

  

 


        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © Royal Private Bank 2023. All Rights Reserved.
            </div>
           Banking
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="?logs" class="item active">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Transactions</strong>
            </div>
        </a>
        <a href="https://RoyalPrivateBank.com/index.html" class="item">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Services</strong>
            </div>
        </a>
        <a href="index.php" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="?profile" class="item">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>Profile</strong>
            </div>
        </a>
        <a href="logout.php" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Logout</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="profileBox pt-2 pb-2">
                        <div class="in">
                            <strong><?php echo $client; ?></strong>
                            <div class="text-muted"><?php echo $aem; ?></div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <div class="sidebar-balance">
                        <div class="listview-title">Balance</div>
                        <div class="in">
                            <h1 class="amount">$ <?php $nm = $awa;
                            $nmm = $nm + $accb2 + $accb3;
                            echo number_format("$nmm"); ?></h1>
                        </div>
                    </div>
                    <!--<div class="action-group">-->
                    <!--    <a href="?logs" class="action-button">-->
                    <!--        <div class="in">-->
                    <!--            <div class="iconbox">-->
                    <!--                <ion-icon name="add-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            E-Statement-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--   <a  class="action-button" data-bs-toggle="modal" data-bs-target="#sendActionSheet">-->
                    <!--        <div class="in">-->
                    <!--            <div class="iconbox">-->
                    <!--                <ion-icon name="arrow-down-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            Wire Transfer-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--    <a href="?inter" class="action-button" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">-->
                    <!--        <div class="in">-->
                    <!--            <div class="iconbox">-->
                    <!--                <ion-icon name="arrow-forward-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            Interbank Transfer-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--    <a href="?loan" class="action-button" data-bs-toggle="modal" data-bs-target="#exchangeActionSheetloan">-->
                    <!--        <div class="in">-->
                    <!--            <div class="iconbox">-->
                    <!--                <ion-icon name="card-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            Loan-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>-->
      
                    <div class="listview-title mt-1">Menu</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="/dash" data-bs-toggle="modal" class="item" data-bs-target="#SendwActionSheet">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="pie-chart-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Accounts
                                      
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://RoyalPrivateBank.com/index.html" data-bs-toggle="modal" class="item" data-bs-target="#withdrawActionSheet">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-text-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Other services
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="?loan" data-bs-toggle="modal" class="item"  data-bs-target="#exchangeActionSheetloan">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="apps-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Loans History
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="?newloan" data-bs-toggle="modal" class="item"  data-bs-target="#exchangeActionSheetloan">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="create-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Loan application
                                </div>
                            </a>
                        </li>
                       
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="?profile" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Settings
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>


                    </ul>
                     
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->



    


   
 

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

</html>