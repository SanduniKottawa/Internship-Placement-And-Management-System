
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
        $Role =  mysqli_real_escape_string($connection,$_REQUEST['Role']);
	
		
		// The plain text password to be hashed
  $plaintext_password = "$password"; 
  
  // The hash of the password that
  // can be stored in the database
  $hash = password_hash($plaintext_password, 
          PASSWORD_DEFAULT);
  

		
		
		// Performing insert query execution
        // here our table name is login
		$sql = "INSERT INTO notif_user (username, password,role) 
		  VALUES ('$username', '$password','$Role')";
        
if(mysqli_query($connection, $sql)){
	
    echo "Records added successfully.";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);

?>
</html>