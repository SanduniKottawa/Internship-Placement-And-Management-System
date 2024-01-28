<?php

include "connection.php";
mysqli_select_db($connection,"ipmsystemfinal");

$sql = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'student_marks'";

$result=mysqli_query($connection,$sql);
if(!$result) {
	die("Invalid query".mysqli_error($conn));
}

$a = array();
while ($row = mysqli_fetch_array($result)) {
	if(!($row['column_name'] == 'Student_ID' || $row['column_name'] == 'name')){
		array_push($a,$row['column_name']);
	}
	
}

print_r($a);

$sql2 = "SELECT * FROM student_marks";
$result2 = mysqli_query($connection,$sql2);

if(!$result2) {
	die("Invalid query".mysqli_error($connection));
}

while ($row = mysqli_fetch_array($result2)){
	$total_marks = 0;
	for($i=0; $i<=count($a); $i++){
        $index = $a[0];
		$course = $row[$index];
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

	echo $total_marks;
	echo $row["Student_ID"];

	$student_Id = $row["Student_ID"];

    $sql3 = "SELECT * FROM rank where student_ID='$student_Id'";
    $search = mysqli_query($connection,$sql3);
  
    if($row = mysqli_num_rows($search)){
        echo "have a row according to that number";
        $sql4 = "UPDATE rank set overall_rank=$total_marks WHERE student_ID='$student_Id'";
        if(mysqli_query($connection,$sql4)){
            echo "done";
        }
        else{
            echo mysqli_error($connection);
        }
    }
    else{
        echo "haven't a row according to that number";
        $sql5 = "INSERT INTO rank VALUES('$student_Id', $total_marks)";
        if(mysqli_query($connection,$sql5)){
            echo "done";
        }
        else{
            echo mysqli_error($connection);
        }
    }

}



?>