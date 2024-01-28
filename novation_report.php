<?php require_once('connection.php');?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>IPMS</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand"><img style="width: 65px" src="img/logo.png">Internship Placement and Management System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                </br></br>Menu
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Profile</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.php">View Profile <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="create_cv.php">Create CV</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Edit Profile</a>
                                        </li>
                                    </ul>
                                </div>
 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Student</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="lec_Student_details.php">View Marks</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Rank</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">View Rank</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">..............</a>
                                        </li>
                                
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Company</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">View Company Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Supervisor Details</a>
                                        </li>
                                
                                    </ul>
                                </div>
                            </li>


                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper" style='background-image: url(img/bdl.jpg)'>
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row" >
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><br><br><h2><b>Welcome to I P M S</h2> </h2>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                     <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="card">
                                    <h5 class="card-header">APPRENTICE’S DAILY DIARY</h5>
                                    <div class="card-body">
                                        <form action="novation_report_db.php" method="post" enctype="multipart/form-data">
										    <div class="form-group">
                                                <label for="Registration_Number" class="col-form-label">Registration Number</label>
                                                <input id="Registration_Number" name="student_id" type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputfull_name" class="col-form-label">Name</label>
                                                <input id="inputfull_name" name="full_name" type="text" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputaddress" class="col-form-label">Apprentic’s Private Address</label>
                                                <input id="inputaddress" name="address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputphone" class="col-form-label">Contact Phone Number</label>
                                                <input id="inputphone" name="phone" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputCategory_of_Apprenticeship" class="col-form-label">Category of Apprenticeship</label>
                                                <input id="inputCategory_of_Apprenticeship" name="Category_of_Apprenticeship" type="text" class="form-control">
                                            </div>
                                            

                                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Overall Period of Training</label>
                                            <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text">From</span></span>
                                                <input id="Starting_date_of_traning" name="Starting_date_of_traning" type="date" placeholder="date" class="form-control">
                                            <span class="input-group-text">To</span></span>
                                               <input id="ending_date_of_traning" name="ending_date_of_traning" type="date" placeholder="date" class="form-control">
                                            </div> 
											
											 <div class="form-group">
                                                <label for="inputplace_of_traning" class="col-form-label">Place of training</label>
                                                <input id="inputplace_of_traning" name="place_of_traning" type="text" class="form-control">
                                            </div>
											
											
											
											
											
											
								
											
											
										
										<div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Save</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>	
                                        </form>
                                    </div>
									
									
									
									
									
									
									
									
									
									
									<h5 class="card-header">Progress report on industrial training performance</h5>
									
									<div class="control-group">
							<div class="controls">
							<a  class="btn btn-primary button-loading" role="button" href="training_progress.php">My Report</a>
							
						
						
						
						
						
						
						
							</div>
						</div>
									
								
									
									<!-- ============================================================== 
                                    <div class="card-body border-top">
                                        <h3>Sizing</h3>
                                        <form>
                                            <div class="form-group">
                                                <label for="inputSmall" class="col-form-label">Small</label>
                                                <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputDefault" class="col-form-label">Default</label>
                                                <input id="inputDefault" type="text" value="Default input" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputLarge" class="col-form-label">Large</label>
                                                <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                                            </div>
                                        </form>-->
										<div class="row">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        







                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                Department of Computer Science, University of Ruhuna</a>.
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>