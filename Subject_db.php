

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

		$SubjectCode =  mysqli_real_escape_string($connection,$_REQUEST['SubjectCode']);
        $SubjectName =  mysqli_real_escape_string($connection,$_REQUEST['SubjectName']);

		
		
		// Performing insert query execution
        // here our table name is AddSubejct 
		$sql = "INSERT INTO subject(SubCode,SubName) 
		VALUES ('$SubjectCode', '$SubjectName')";
        

$result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add subject\");
                        window.location = \"add_subject.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"add_subject.php\"
                        </script>";    
                }
 
// Close connection
mysqli_close($connection);

?>
</html>