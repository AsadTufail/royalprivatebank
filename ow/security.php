<?php include('../connect.php'); ?><div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
				 <div class="panel panel-primary text-center no-boder bg-color-blue">
				 
                            <div class="panel-body">
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$s1=$_POST["se1"]; $s2=$_POST["se2"]; $old=$_POST["old"]; $s3=$_POST["se3"];
if($s2=$s3){
 
$sql="UPDATE `admin`  SET 
`password` = '$s2'
  WHERE `id`=1 AND password='$old'";
if ($conn->query($sql) === TRUE) {
    header('Refresh: 3; url=index.php');
    

 echo "<div class='alert alert-success'>Password Updated!</div>";
 session_destroy();
}
} 
else{ echo "<div class='alert alert-danger'>Error occured!</div>";}

}

?> 
						
						
						
<?php
$query="SELECT * FROM admin WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $se2= $row["password"];
}} else
{}
						
?>
						
							<div class="card card-stats">
								
										<br>
										<form method='post'>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input"  placeholder="Username" name="se1" value="admin" disabled >
                                            </div>
                                        </div>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Enter old Password</label>
                                                <input type="password" class="form-control border-input"  placeholder="Enter old password" name="old" required>
                                            </div>
                                        </div>
								
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Enter New Password</label>
                                                <input type="password" class="form-control border-input"  placeholder="New password" name="se2" required >
                                                
                                             Confirm Password:   <input type="password" class="form-control border-input"  placeholder="Confirm password" name="se3" required >
                                            </div>
                                            
                                            	<div class="text-center">
                                    <button type="submit" name="update" class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"><i class='fa fa-check'></i> Update</button> 
                                   
                                        </div>
                                        
                                        
									
                                    
                                    
                                </div>
                                    <div class="clearfix"></div>
										</form>

                            </div></div></div> </div></div></div> </div></div></div> </div></div>