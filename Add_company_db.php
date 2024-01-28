

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

		//$company =  mysqli_real_escape_string($connection,$_REQUEST['SubjectCode']);
        if(isset($_POST["Import"])){
 
 
        $filename=$_FILES["file"]["tmp_name"];
 
 
         if($_FILES["file"]["size"] > 0)
         {
 
            $file = fopen($filename, "r");
             while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
             {   

		
		
		// Performing insert query execution
        // here our table name is AddSubejct 
		$sql = "INSERT INTO company(`c_name`,`address`,`Sup_name`,`Sup_email`,`Sup_contact`,`technology`,`contacts`,`com_email`) 
		values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."')";
        

                     if(mysqli_query($connection, $sql))
                        {
                                 echo "Saved successfully.";
                        } 
                    else
                        {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                        }
             }
 
            // Close connection
            mysqli_close($connection);
            fclose($file);
        }
}

?>
</html>