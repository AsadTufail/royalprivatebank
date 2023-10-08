<?php session_destroy();
$e=$_COOKIE['username'];
$p=$_COOKIE['password'];
setcookie($e,'',time()-3600);
setcookie($p,'',time()-3600);
header("location:../my-account/index.html");
?>