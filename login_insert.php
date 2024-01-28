<!DOCTYPE html>
<html>
<head>
	<title>Insert Users</title>
</head>
<body>

<?php

include("connection.php");
mysqli_select_db($connection,"ipmsystem2");
$passStu=md5("stu123");
$passLec=md5("lec123");
$passCoordi=md5("coordi1234");
$sql = "insert into user(username,password,role) values('10184','$passStu','student'),('lecture','$passLec','lecture'),('coordinator','$passCoordi','coordinator') ";
$result=mysqli_query($connection,$sql);
if(!$result){
die("Inavlid query" . mysqli_error());
}
mysqli_close($connection);


?>


</body>
</html>
