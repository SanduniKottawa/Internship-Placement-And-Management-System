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
		$Registration_Number =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
        $full_name =  mysqli_real_escape_string($connection,$_REQUEST['full_name']);
		$address =  mysqli_real_escape_string($connection,$_REQUEST['address']);
		$phone =  mysqli_real_escape_string($connection,$_REQUEST['phone']);
		$Category_of_Apprenticeship =  mysqli_real_escape_string($connection,$_REQUEST['Category_of_Apprenticeship']);
		$From =  mysqli_real_escape_string($connection,$_REQUEST['Starting_date_of_traning']);
		$To =  mysqli_real_escape_string($connection,$_REQUEST['ending_date_of_traning']);
		$place_of_traning =  mysqli_real_escape_string($connection,$_REQUEST['place_of_traning']);
		
		
		// Performing insert query execution
        // here our table name is novation_report 
		$sql = "INSERT INTO novation_report (student_id, full_name, address, phone, Category_of_Apprenticeship, Starting_date_of_traning, ending_date_of_traning,place_of_traning) 
		VALUES ('$Registration_Number', '$full_name', '$address', '$phone', '$Category_of_Apprenticeship', '$From', '$To', '$place_of_traning')";
        


$result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add records\");
                        window.location = \"novation_report.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"novation_report.php\"
                        </script>";    
                }
 
// Close connection
mysqli_close($connection);

?>
</html>