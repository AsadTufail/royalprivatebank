<?php require_once('../connect.php'); $client=$_SESSION['u2'];
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rs=$_GET['ui'];
$query="DELETE FROM logs WHERE id=$rs ";
$result=$conn->query($query);
if($result==TRUE) {
header('location:index.php'); 
echo 'Transfer Successfully UnLocked';
}}} else{  echo 'This link has expired'; }
?>