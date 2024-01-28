<!doctype html>
<html lang="en">
<pre class="tab"></pre>
<?php
 
	include 'connection.php';	
         
        // Taking all 5 values from the form data(input)
		$student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
		$month =  mysqli_real_escape_string($connection,$_REQUEST['month']);
		$comments =  mysqli_real_escape_string($connection,$_REQUEST['comments']);
		$approve =  mysqli_real_escape_string($connection,$_REQUEST['approve']);
        
		
		
		
		// Performing insert query execution
        // here our table name is approve_report 
		$sql = "INSERT INTO approve_report (student_id, month, comments, approve) 
		VALUES ('$student_id','$month', '$comments', '$approve')";
        


$result = mysqli_query($connection, $sql);
        
        if(!isset($result))
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Failed to add records\");
                        window.location = \"company1.php\"
                        </script>";
                }
            
            else
                
                {
                        echo "<script type=\"text/javascript\">
                        alert(\"Records added successfully.\");
                        window.location = \"company1.php\"
                        </script>";    
                }
// Close connection
mysqli_close($connection);

?>

 
