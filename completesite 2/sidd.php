<?php

session_start();

$Username = $_POST['user'];
$Password = $_POST['pass'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "**create your password**";
$dbname = "user";
//$_SESSION['user']=$user;
//create connection

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()) {
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
 $q = "select * from  mop where Username='$user' && Password='$pass'";
 if($conn->query($q)) {
    header('location:beforehome.php');
 }
 else {
    echo "Error: Invalid User......."; 
 }
 $conn->close();
}
?>

