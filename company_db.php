
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
        $c_name =  mysqli_real_escape_string($connection,$_REQUEST['c_name']);
		$address =  mysqli_real_escape_string($connection,$_REQUEST['address']);
		$Sup_name =  mysqli_real_escape_string($connection,$_REQUEST['Sup_name']);
		$Sup_email =  mysqli_real_escape_string($connection,$_REQUEST['Sup_email']);
		$Sup_contact =  mysqli_real_escape_string($connection,$_REQUEST['Sup_contact']);
		$technology =  mysqli_real_escape_string($connection,$_REQUEST['technology']);
		$contacts =  mysqli_real_escape_string($connection,$_REQUEST['contacts']);
		$com_email =  mysqli_real_escape_string($connection,$_REQUEST['com_email']);
		
		
		
		
		// Performing insert query execution
        // here our table name is company
		$sql = "INSERT INTO company (c_name, address, Sup_name, Sup_email, Sup_contact, technology, contacts, com_email) 
		VALUES ('$c_name', '$address', '$Sup_name', '$Sup_email', '$Sup_contact', '$technology', '$contacts', '$com_email')";
        

$result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add company\");
                        window.location = \"add_company.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"add_company.php\"
                        </script>";    
                }
// Close connection
mysqli_close($connection);

?>

</html>