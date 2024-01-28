<?php
session_start();
include("connection.php");
mysqli_select_db($connection,"ipmsystemfinal");
extract($_POST);
if($_POST['btnlogin']){

$sql = "select id,role,username from notif_user where username='".$uname."' and 
password='".$pass."' "; // removed md5 beacause it's not support to login 
$result=mysqli_query($connection,$sql);
if(!$result){
die("Inavlid query".mysqli_error($connection)); 
}
$row = mysqli_fetch_assoc($result);

$_SESSION['ROLE'] = $row['role'];
$_SESSION['USERID'] = $row['id'];
$_SESSION['username'] = $row['username'];

if($row['role'] == "student"){
  header("Location: student.php");
  
}
elseif($row['role'] == "lecture"){
	header("Location: lecture.php");
	 
}
elseif($row['role'] == "coordinator"){
	header("Location: coordinator.php");

}
elseif($row['role'] == "supervisor"){
	header("Location: supervisor.php");
	 
}
else{
  header("Location: welcome_page.php?error=1");  
}
mysql_close($connection);
}

 /*if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
include ('Push.php');
$push = new Push();
$user = $push->loginUsers($_POST['username'], $_POST['pwd']);
if(!empty($user)) {
$_SESSION['username'] = $user[0]['username'];
header("Location:index.php");
} else {
$loginError = "Invalid username or password!";
}
}*/

?>