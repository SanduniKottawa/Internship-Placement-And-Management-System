<?php
include 'connection.php';		
        $student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
		$place_of_traning =  mysqli_real_escape_string($conn,$_REQUEST['place_of_traning']);
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
        // here our table name is training_progress
		$sql = "INSERT INTO training_progress(student_id, place_of_traning, week1, week2, week3, week4, week5, week6, week7, week8, week9, week10, week11, week12, problems, absent_days, Manager) 
		VALUES ('$student_id', '$place_of_traning', '$week1', '$week2', '$week3', '$week4', '$week5', $week6', $week7', $week8',$week9', $week10',$week11', $week12', '$problems', '$absent_days', '$Manager')";
        


if(mysqli_query($connection, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);

?>