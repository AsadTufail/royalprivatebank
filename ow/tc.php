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
										<form method='post' action='?tcv'>
										
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h2>Search  a username to view their  verification codes</h2>
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