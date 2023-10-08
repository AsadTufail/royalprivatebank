<?php require_once('../connect.php');  
            if(isset($_POST['sends'])) {
            $a=htmlspecialchars($_POST["username"]);
            $b=$_POST["pas"];	 
           
            $query="SELECT * FROM investors WHERE password='$b' AND accn='$a' ";
            $result=$conn->query($query);
            if($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {
            $u2=$row["username"]; $status=$row["status"];           
                
   if($status=="P") {
 $u2=$row["username"];
            $_SESSION["u2"]=$u2;
            unset($_SESSION['ilog2']);
            $_SESSION['ilog']=1;
            header('location:security.php');
   }else { echo "<div style='color:white; background:orange; height:100px;'><h4>THIS ACCOUNT IS DEACTIVATED , PLS CONTACT BANK FOR VERIFICATION</h4><div>"; }             
     }} else{
				echo "<div class='alert alert-danger'> <i class='fa fa-close'></i> Authentication failed! Please retry</div><br><br><br>".$conn->error;
            
                $_SESSION['logerr']=2;
               
              } } 
  
             ?>