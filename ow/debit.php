<?php require_once('../connect.php'); $client=$_SESSION['u2'];
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rs=$_GET['ui']; $wallet=$_POST['wallet']; $name=$_POST['name']; $top=$_POST['top']; $tt=$wallet-$top;  $des=$_POST['des'];
$cur=$_POST['cur']; $date=$_POST['date']; $date=$date.date(" - h:i:s a");
$query="UPDATE investors SET phone=$tt WHERE id=$rs ";
$result=$conn->query($query);
if($result==TRUE) {
$ip= $_SERVER["REMOTE_ADDR"];
$sql="INSERT INTO logs(client,Description,anount,date,status,currency)
 VALUES('$name','$des','$top','$date','debited','$cur')";
if($conn->query($sql)==TRUE){
	} 
 header('location:index.php?profile'); 
echo 'Debit Successfully Done';
}}} else{  echo 'This link has expired'; }
?>