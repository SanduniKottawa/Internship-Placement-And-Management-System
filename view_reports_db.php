<?php
 
	include 'connection.php';	
         
        // Taking all 5 values from the form data(input)
		$student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
		$comments =  mysqli_real_escape_string($connecton,$_REQUEST['comments']);
		$name =  mysqli_real_escape_string($connection,$_REQUEST['name']);
        
		
		
		
		// Performing insert query execution
        // here our table name is training_progress_month1 
		$sql = "INSERT INTO training_progress_month1 (student_id, comments, name) 
		VALUES ('$student_id', '$comments', '$name')";
        

if(mysqli_query($connection, $sql)){
   echo "Saved successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);

?>