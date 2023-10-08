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
<?php  if(isset($_POST["updatee"])){
$s1=$_POST["f1"]; $s2=$_POST["f2"]; $s3=$_POST["f3"]; $s4=$_POST["f4"]; $id=$_POST["id"];

 
$sql="UPDATE `investors`  SET 
`s1` = '$s1',`s2` = '$s2',`s3` = '$s3',`s4` = '$s4'
  WHERE `id`=$id ";
if ($conn->query($sql) === TRUE) {
     

 echo "<div class='alert alert-success'>Pin Codes Updated!</div>";
 session_destroy();
}

else{ echo "<div class='alert alert-danger'>Error occured!</div>".$conn->error;}

}

?> 
						
						
						
<?php if(isset($_POST['user'])){ $user=$_POST['user'];}
$query="SELECT * FROM investors WHERE username='$user'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $s1= $row["s1"]; $s2= $row["s2"]; $s3= $row["s3"]; $s4= $row["s4"]; $id= $row["id"];  $loc=$row["te"];$accn=$row["accn"];
}} else
{}

if($loc==0){
    $lo="<a href='?activate&ui=$id'   class='alert alert-success' ><i class='fa fa-close'></i> Activate Transfers</a>";
	$gini="<h1 class='text-danger'>ACCOUNT TRANSFER IS DEACTIVATED</h1>";
    
}
else {
    $lo="<a href='?Deactivate&ui=$id'    class='alert alert-danger'><i class='fa fa-check'></i> Deactivate Transfers</a>";
	$gini="<h1 class='text-success'>ACCOUNT TRANSFER IS ACTIVATED</h1>";
} 						
?>
						
							<div class="card card-stats">
							<h3><?php echo "VIEW/EDIT PIN FOR $user"; ?></h3>	
										<br>
										<?php echo $gini. "". $lo; ?>
										
									<H4>	<?php echo "ACCOUNT NUMBER: <b style='text-info'>".$accn; ?></b></H4>
										<form method='post'>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>COT</label>
                                                <input type="text" class="form-control border-input"  placeholder="First Pin" name="f1" value="<?php if(isset($_POST['user'])){ echo $s1;}  ?>"   >
                                            </div>
                                        </div>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>IMF</label>
                                                <input type="text" class="form-control border-input"  placeholder="Second Pin" name="f2" value="<?php if(isset($_POST['user'])){ echo $s2;}  ?>" required>
                                            </div>
                                        </div>
								
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>COMPLAINT</label>
                                                <input type="text" class="form-control border-input"  placeholder="Third Pin" name="f3" value="<?php if(isset($_POST['user'])){ echo $s3;}  ?>" required >
                                                
                                            LOGIN Pin:   <input type="text" class="form-control border-input"  placeholder="Fourth Pin" name="f4" value="<?php if(isset($_POST['user'])){ echo $s4;}  ?>" required >
											  <input type="text"   placeholder="Fourth Pin" name="id" value="<?php if(isset($_POST['user'])){ echo $id;}  ?>" hidden >
											  <input type="text"   placeholder="Fourth Pin" name="user" value="<?php if(isset($_POST['user'])){ echo $user;}  ?>" hidden >
                                            </div>
                                            
                                            	<div class="text-center">
                                    <button type="submit" name="updatee" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"><i class='fa fa-check'></i> Update</button> 
                                   
                                        </div>
                                        
                                        
									
                                    
                                    
                                </div>
                                    <div class="clearfix"></div>
										</form>

                            </div></div></div> </div></div></div> </div></div></div> </div></div>