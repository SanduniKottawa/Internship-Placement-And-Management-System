<?php
//$connection= myspli_connect(dbserver, dbuser,dbpass,dbname)
$connection=mysqli_connect('localhost','root','','ipmsystem');
// checking the connection

if(mysqli_connect_errno()) {
	die('Database connection is failed'. mysqli_connect_error());
}else
{
	//echo "Connection Successful.";
}

?>