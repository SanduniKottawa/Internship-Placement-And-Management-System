<?php
	session_start();
	$_SESSION['student_id'] = "student_id";  
?>


<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        <form action="login1.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['']))  { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            <label>User Name </lable> 
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>User Name</label>
            <input type="password" name="password" placeholder="password"><br>

            <button type="submit">Login</button>
        </form>    
    </body>

</html>