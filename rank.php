<?php

include "connection.php";
mysqli_select_db($connection,"ipmsystemfinal");

$sql = "SELECT * FROM ipmsystemfinal.student_marks";

$result=mysqli_query($connection,$sql);
if(!$result) {
	die("Invalid query".mysqli_error($connection));
}

$a = array();

//print_r($result);

while ($row = mysqli_fetch_assoc($result)) {
	
		//if(!($row['column_name'] == "Student_ID" || $row['column_name'] == "name")){
		array_push($a,$row['Student_ID']);
	//}
	
}

//print($a);

$sql2 = "SELECT * FROM ipmsystemfinal.student_marks";
$result2 = mysqli_query($connection,$sql2);

if(!$result2) {
	die("Invalid query".mysqli_error($connection));
}

while ($row = mysqli_fetch_array($result2)){
	$total_marks = 0;
	
        
    for($j=2; $j<23; $j++){
		$course = $row[$j];
			
		switch ($course){
			case "A+":
				$total_marks = $total_marks + 11;
				break;

			case "A":
				$total_marks = $total_marks + 10;
				break;

			case "A-":
				$total_marks = $total_marks + 9;
				break;

			case "B+":
				$total_marks = $total_marks + 8;
				break;

			case "B":
				$total_marks = $total_marks + 7;
				break;

			case "B-":
				$total_marks = $total_marks + 6;
				break;

			case "C+":
				$total_marks = $total_marks + 5;
				break;
				
			case "C":
				$total_marks = $total_marks + 4;
				break;
				
			case "C-":
				$total_marks = $total_marks + 3;
				break;

			case "D+":
				$total_marks = $total_marks + 2;
				break;

			case "D":
				$total_marks = $total_marks + 1;
				break;
				
			case "E":
				$total_marks = $total_marks + 0;
				break;
				
			default:
				$total_marks = $total_marks + 0;
		}
		
	}


	echo "total_marks" .$total_marks."<br>";



	$student_Id = $row["Student_ID"];


        
	$sql5 = "INSERT INTO rank(student_ID,overall_rank) VALUES('$student_Id',$total_marks)";
	if(mysqli_query($connection,$sql5)){
    	//echo "done";
	}
	else{
    	echo mysqli_error($connection);
	}
    
}




?>