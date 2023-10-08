<div >
<?php
if(isset($_POST['reg'])){
  $bname=$_POST['bname'];  

//if transfer is unlocked

$sql="UPDATE admin SET confirm='$bname' WHERE id=1";
if($conn->query($sql)==TRUE){ 

 echo "<div class='alert alert-success'> <i class='fa fa-check'></i> Successfully Updated!</div>";


}}

?>
  
 <?php
$query2="SELECT * FROM admin WHERE id=1";
$result2=$conn->query($query2);
if($result2->num_rows>0) {
while ($row2=$result2->fetch_assoc()) {
$bs=$row2["confirm"]; $c=$row2["country"]; $ids=$row2["id"];


}}
?> 
                               <form class="contact-form" method="post">  
                             
                                            <label for="InputName">Enter Warning Note<span class="requred">*</span></label>
                                            <input type="text" class="form-control" name="bname" id="InputName" value="<?php echo $bs; ?>"
                                                required>
                                    
                                                <button type="submit" class="btn btn-success" name="reg">Update Note</button>
                                           
                                              </form>
                                            </div>
                                    
                                  
                                    
                                 
                                    
                                    <hr>
                                   
                                   