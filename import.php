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
	           $sql = "INSERT into student_marks(`Student_ID`,`name`,`CSC1113`,`CSC1122`,`CSC113a`,`CSC1142`,`CSC1153`,`CSC1213`,`CSC1223`,`CSC1233`,`CSC1242`,`CSC1251`,`CSC2113`,`CSC2123`,`CSC2133`,`CSC2143`,`CSC2222`,`CSC2213`,`CSC2233`,`CSC2242`,`CSC2252`,`CSC2263`,`CSC2272`) 
	            	values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."')";
	         //using mysql_query function. it returns a resource on true else False on error****************** 
	           $result = mysqli_query($connection, $sql);
	
   			if(!isset($result))
        		{
       	   			echo "<script type=\"text/javascript\">
              			alert(\"Invalid File:Please Upload CSV File.\");
              			window.location = \"upload_marks.php\"
              			</script>";    
        		}
        	
			else
	        	{
            		        echo "<script type=\"text/javascript\">
            			alert(\"CSV File has been successfully Imported.\");
            			window.location = \"upload_marks.php\"
          			</script>";
        		}
 
	        }
	         
	fclose($file);
	         
 
 
 
			 
 
 
		 }
	}	 
?>