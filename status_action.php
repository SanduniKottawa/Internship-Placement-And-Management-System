<?php session_start()?>
<?php require_once('connection.php'); ?>
<?php
     $id=''; 
     $placement='';
     $selection='';  
if(isset($_POST['submit'])) {
    //echo "ok";
    
        $id=mysqli_real_escape_string($connection,$_POST['id']);
        $placement=mysqli_real_escape_string($connection,$_POST['placement']);
        $selection=mysqli_real_escape_string($connection,$_POST['selection']);

        
        $addsql="INSERT INTO  status (student_ID,interview_placement,company_selection) 
              VALUES ('$id','$placement','$selection')";
         $add_query=mysqli_query($connection,$addsql);

        if($add_query){
            //query successfuly
            echo '<script type="text/javascript"> alert("Data Updated") </script>';
        }else{
            echo '<script type="text/javascript"> alert("Data No Updated") </script>';
        }


    


}else{
    header('Location:status1.php');
}
?>