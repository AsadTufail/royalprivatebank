<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
				 <div class="panel panel-primary text-center no-boder bg-color-blue">
				 
                            <div class="panel-body">
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
					
							<div class="card card-stats">
								
										<br>
										<form method='post' action=''>
										
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h2>Search  a username to credit their account</h2>
                                               <input type="text" name="user" placeholder="Search user to check" list="cityname" class="form-control">
    <datalist id="cityname">

 <?php $query="SELECT * FROM investors ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$uus= $row["username"]; $iddd= $row["id"]; 
echo "<option>$uus</option>";
}}
 ?>
    </datalist>
                                                
                                             </div>
                                            
                                            	<div class="text-center">
                                    <button type="submit" name="update" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"><i class='fa fa-check'></i> Search</button> 
                                   
                                        </div>
                                        
                                        
									
                                    
                                    
                                </div>
                                    <div class="clearfix"></div>
										</form>

                            </div></div></div> </div></div></div> </div></div></div> </div></div>
							
							
							
							
				<br><br>			
							
							
        <div class="col">
          <div class="card shadow" >
            <div class="card-header border-0">
              <h3 class="mb-0"><a href="?users"   class="btn btn-danger">CUSTOMER ACCOUNT</a></h3>
            </div>
          
           <div class="card-body">
 
              <div class="table-responsive">
	<table class="table ">
 
	                                    <tr>
	               
										<td>Photo</td>	
										<td>User</td>  	
										<td>Pass</td> 
										<td>pincode</td>
										<td>Actions</td>
	                                    <td>Photo</td>	 
	                                   
	                                    </tr>	 
	                                    	 
											
											
	                                    
<?php
if(isset($_POST['update']))
{	
$u=$_POST['user'];
require_once('../connect.php');
$query="SELECT * FROM investors WHERE username='$u' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$aid= $row["userid"]; $aus= $row["username"]; $aps= $row["password"];$id= $row["id"];
$ast= $row["status"]; $asts= $row["status"];  $ada= $row["misc"]; $q1= $row["bitcoin"];$accn= $row["accn"]; $pino= $row["s4"]; 
$q2= $row["ico"]; $q3= $row["referral"]; $imi= $row["email"];
 $aem= $row["email"];  $awa= $row["phone"]; $pix=$row["pix"]; $pin=$row["pin"]; $cur=$row["currency"];
 $loc=$row["loc"]; $lid=$row["id"];
 $vvx="<a href='del.php?ui=$aid'><button class='badge-danger'>Delete</button></a>";
  if($ast=='N'){ $ast=""; }
  if($asts=='P'){ $dia="<i class='text-success'>Active</i>- <a href='inacti.php?ui=$id'><button class='badge-warning'>Deactivate</button></a>"; }
    if($asts=='N'){ $dia="<i class='text-warning'>InActive</i>- <a href='acti.php?ui=$id'><button class='badge-success'>Activate</button></a>"; }
  if($ast=='P'){ $ast=""; }
  if($ast=='B'){ $ast=""; }
  if($ast=='S'){ $ast=""; }
  
  if($asts=='S'){ $oth=""; } else{
      
  }
 if($asts=='N'){ $viv=""; }
 if($asts=='P'){ 
      $viv="";
  }
  if($asts=='B'){ }
 else { 
   
  }
  $sqlmm="SELECT * FROM investors WHERE referral='$aus'";

if ($resultmm=mysqli_query($conn,$sqlmm))
  {
  $rowcountmm=mysqli_num_rows($resultmm);
  $refe= "<span class='btn btn-warning'>".$rowcountmm."</span>"; }

  
$act="";

if($loc==0){
    $lo="<a href='?unlock&ui=$lid'   class='px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple' ><i class='fa fa-close'></i> Unlock Transfers</a>";
    
}
else {
    $lo="<a href='?lock&ui=$lid'    class='bpx-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple'><i class='fa fa-check'></i> Lock Transfers</a>";
}
?>
 <?php
	                $queryv="SELECT SUM(anount) AS rtv FROM logs WHERE  client = '$aus' AND  status ='completed' ";
$resultv=$conn->query($queryv);
if($resultv->num_rows>0) {
while ($rowv=$resultv->fetch_assoc()) {
$rtv=$rowv["rtv"];

}} else { echo "0.00"; }


$queryvz="SELECT SUM(anount) AS rtvz FROM logs WHERE  client = '$aus' AND  status ='debited' ";
$resultvz=$conn->query($queryvz);
if($resultvz->num_rows>0) {
while ($rowvz=$resultvz->fetch_assoc()) {
$rtvz=$rowvz["rtvz"];

}} else { echo "0.00"; }
$awamoney=$rtv-$rtvz;  
	                ?>
<?php

  echo "<tr>
  <td><img src='uploads/$pix'  style='width:60px;'></td> 
  <td> <b>$aus</b> </td>
  <td><span >$aps</span></td>   
  <td><span >$pino</span></td>
  <td>
  <strong style='color:green;'>Wallet: $cur $awamoney </strong>  
  <a href='?topupn&name=$aus&cur=$cur&awa=$awa&rs=$lid&imi=$imi&aid=$accn'><button type='submit' class='px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple'>Topup Account</button>  </a>
 
  </td>


  
   <td>
   <form method='post' action='upload.php?ui=$aid' enctype='multipart/form-data' >
   
  <input type='file' name='fileToUpload' id='fileToUpload' >
  <br>
     <button type='submit'>Change Photo</button>
   
   </form></td>

   </tr>";
}}

}

else {
	
echo " <a class='alert-info'><i class='fa fa-credit-card'></i> Enter a username above to search</a>";	
}
  ?>
  </table>

</div></div></div></div>