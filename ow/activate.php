<?php 
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rs=$_GET['ui'];
$query="UPDATE investors SET te=1 WHERE id=$rs ";
$result=$conn->query($query);
if($result==TRUE) {
 
echo "Transfer Successfully activated <br> <a href='?tc'   class='alert alert-success' ><i class='fa fa-close'></i> Continue</a>";
}}} else{  echo 'This link has expired'; }
?>

