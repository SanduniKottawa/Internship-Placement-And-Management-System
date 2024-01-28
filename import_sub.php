<?php
include 'connection.php';
if(isset($_POST["Import"])){
 
 
		$filename=$_FILES["file"]["tmp_name"];
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
 
		  	$file = fopen($filename, "r");
	         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
	          //It wiil insert a row to student_marks table from  csv file
	           $sql = "INSERT into subject(`SubCode`,`SubName`) 
	            	values('".$getData[0]."','".$getData[1]."')";
	         //using mysql_query function. it returns a resource on true else False on error****************** 
	           $result = mysqli_query($connection, $sql);
	
   			if(!isset($result))
        		{
       	   			echo "<script type=\"text/javascript\">
              			alert(\"Invalid File:Please Upload CSV File.\");
              			window.location = \"add_subject.php\"
              			</script>";    
        		}
        	
			else
	        	{
            		        echo "<script type=\"text/javascript\">
            			alert(\"CSV File has been successfully Imported.\");
            			window.location = \"add_subject.php\"
          			</script>";
        		}
 
	        }
	         
	fclose($file);
	         
 
 
 
			 
 
 
		 }
	}	 
?>