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
         

		$student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
        $place_of_traning =  mysqli_real_escape_string($connection,$_REQUEST['place_of_traning']);
		$week1 =  mysqli_real_escape_string($connection,$_REQUEST['week1']);
		$week2 =  mysqli_real_escape_string($connection,$_REQUEST['week2']);
		$week3 =  mysqli_real_escape_string($connection,$_REQUEST['week3']);
		$week4 =  mysqli_real_escape_string($connection,$_REQUEST['week4']);
		$week5 =  mysqli_real_escape_string($connection,$_REQUEST['week5']);
		$week6 =  mysqli_real_escape_string($connection,$_REQUEST['week6']);
		$week7 =  mysqli_real_escape_string($connection,$_REQUEST['week7']);
		$week8 =  mysqli_real_escape_string($connection,$_REQUEST['week8']);
		$week9 =  mysqli_real_escape_string($connection,$_REQUEST['week9']);
		$week10 =  mysqli_real_escape_string($connection,$_REQUEST['week10']);
		$week11 =  mysqli_real_escape_string($connection,$_REQUEST['week11']);
		$week12 =  mysqli_real_escape_string($connection,$_REQUEST['week12']);
		$problems =  mysqli_real_escape_string($connection,$_REQUEST['problems']);
		$absent_days =  mysqli_real_escape_string($connection,$_REQUEST['absent_days']);
		$Manager =  mysqli_real_escape_string($connection,$_REQUEST['Manager']);
		
		
		// Performing insert query execution
        // here our table name is student_diary
		$sql = "INSERT INTO student_diary (student_id, place_of_traning, week1, week2, week3, week4, week5, week6, week7, week8, week9, week10, week11, week12, problems, absent_days, Manager)  
		VALUES ('$student_id', '$place_of_traning', '$week1', '$week2', '$week3', '$week4', '$week5', '$week6', '$week7', '$week8', '$week9', '$week10', '$week11', '$week12', '$problems', '$absent_days', '$Manager')";
        


$result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add records\");
                        window.location = \"training_progress.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"training_progress.php\"
                        </script>";    
                }
 
// Close connection
mysqli_close($connection);

?>
</html>