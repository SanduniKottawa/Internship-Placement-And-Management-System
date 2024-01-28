
<?php 
SESSION_START();
$loginError = '';
if (!empty($_POST['username']) && !empty($_POST['pass'])) {
  include ('Push.php');
  $push = new Push();
  $user = $push->loginUsers($_POST['username'], $_POST['pass']); 
  if(!empty($user)) {
    $_SESSION['username'] = $user[0]['username'];
    header("Location:lec_add_company.php");
  } else {
    $loginError = "Invalid username or password!";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Welcome Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!-- Fonts and icons -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material Kit CSS -->
    <link href="assetsHome/css/material-kit.css?v=2.0.4" rel="stylesheet" />


    <style>
    html,
    body {
        height: 100%;
    }
.card{
  width: 400px;
  margin: 100px auto;
}
    body {
        display: -ms-flexbox;

        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>

  </head>
  <body>

   

    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
  <div class="container">
      <div class="navbar-translate">
		<h4><marquee>Welcome to Internship Placement and Management System, Department of Computer Science , University of Ruhuna</marquee></h4>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
  </div>
</nav>


<div class="page-header header-filter" data-parallax="true" style="background-image: linear-gradient(lightblue,purple) ">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
        			<img src="img/logo.png" class="navbar-brand"/>
          <h1><b>Internship Placement and Management System</b></h1>
          <h3 class="title text-center">Department of Computer Science<br>University of Ruhuna</h3>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- login page  -->
    <!-- ============================================================== -->



    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><span class="splash-description"><h3><b>LOGIN</b></h3></span></div>
            <div class="card-body">
               <!-- <form action="authentication1.php" method="post">-->
                <form action="authentication1.php" method="post">
    <?php
      if(isset($_GET['error'])){
        echo "Enter valid username/password";
 
     }?> 


                  
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="uname" type="text" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="pass" type="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <select class="form-control form-control-lg" name="role">
                          <option value="student">Student</option>
                          <option value="lecture">Lecture</option>
                          <option value="coordinator">Coordinator</option>
                          <option value="supervisor">Supervisor</option>
                        </select>


                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnlogin" value="login">Sign in</button>

                </form>
            </div>
        </div>
    </div>


<footer class="footer footer-default" >
  <div class="container">
    <div class="copyright float-right">
		<h4>Department of Computer Science , University Of Ruhuna</h4>
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="assetsHome/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assetsHome/js/core/popper.min.js" type="text/javascript"></script>
<script src="assetsHome/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assetsHome/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assetsHome/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assetsHome/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>

<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>

