<?php
//$connection= myspli_connect(dbserver, dbuser,dbpass,dbname)
$connection=mysqli_connect('localhost','root','','ipmsystemfinal');
// checking the connection

if(!$connection) {
	die('Database connection is failed'. mysqli_connect_error());
}else
{
	//echo "Connection Successful.";
}

?>