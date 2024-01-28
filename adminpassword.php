<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	
    <title>IPMS</title>
</head>
<?php

 
	include 'connection.php';	
         
        // Taking all 5 values from the form data(input)
    $username =  mysqli_real_escape_string($connection,$_REQUEST['username']);
		$password =  mysqli_real_escape_string($connection,$_REQUEST['password']);
		$role =  mysqli_real_escape_string($connection,$_REQUEST['role']);
	
		

		
		
		// Performing insert query execution
        // here our table name is notify_user
		$sql = "INSERT INTO notif_user (username,password,role) 
		VALUES ('$username', '$password','$role')";

        $result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add user\");
                        window.location = \"add_adminpassword.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"add_adminpassword.php\"
                        </script>";    
                }
// Close connection
mysqli_close($connection);

?>
</html>