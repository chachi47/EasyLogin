<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$con = mysqli_connect("localhost","root","","login");

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$_POST['user']);
$password = mysqli_real_escape_string($con,$_POST['pass']);






$result = mysqli_query($con,"SELECT * FROM user WHERE username = '$username' and password = '$password'" ) or die("Failed to Database".mysql_error());
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
  echo "Login Success, Welcome"." ".'<a href="login.php">Logout</a>'." ".$row['username'];
}else {
  echo "Failed to Login"." ".'<a href="login.php">Try Again</a>';
}



 ?>
