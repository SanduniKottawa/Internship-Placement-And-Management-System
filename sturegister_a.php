<?php

 
	include 'connection.php';	
         
        // Taking all 5 values from the form data(input)
        $student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
		$full_name =  mysqli_real_escape_string($connection,$_REQUEST['full_name']);
		$DOB =  mysqli_real_escape_string($connection,$_REQUEST['DOB']);
		$NIC =  mysqli_real_escape_string($connection,$_REQUEST['NIC']);
		$phone =  mysqli_real_escape_string($connection,$_REQUEST['phone']);
		$gender =  mysqli_real_escape_string($connection,$_REQUEST['gender']);
		$email =  mysqli_real_escape_string($connection,$_REQUEST['email']);
		$address =  mysqli_real_escape_string($connection,$_REQUEST['address']);
		$prefered_area =  mysqli_real_escape_string($connection,$_REQUEST['prefered_area']);
		
		
		
		// Performing insert query execution
        // here our table name is student
		$sql = "INSERT INTO student (student_id, full_name, DOB, NIC, phone, gender, email, address, prefered_area) 
		VALUES ('$student_id', '$full_name', '$DOB', '$NIC', '$phone', '$gender', '$email', '$address', '$prefered_area')";
        

if(mysqli_query($connection, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);

?>
