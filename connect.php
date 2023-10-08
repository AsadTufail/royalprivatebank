<?php session_start();

// $servername = "localhost";
// $username = "bi";
// $password = "Qwerty1,11";
// $dbname = "bi";
// $conn = new MySQLi($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
// 	die("Please wait, we will be up in moments...");
// }

// $db = new PDO('mysql:host=localhost;dbname=bi;charset=utf8', 'bi', 'Qwerty1,11');
// $conk = mysqli_connect("localhost", "bi", "Qwerty1,11", "bi");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bi";
$conn = new MySQLi($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Please wait, we will be up in moments...");
}

$db = new PDO('mysql:host=localhost;dbname=bi;charset=utf8', 'root', '');
$conk = mysqli_connect("localhost", "root", "", "bi");


?>