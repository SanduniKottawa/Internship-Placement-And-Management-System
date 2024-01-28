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
    <title>Training Progress</title>
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
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Documentations</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="manage_notification.php">Manage Notification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="lec_view_rank.php">View Rank</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_novation.php">View Novation Reports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_diary.php">View Daily Diary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_cv.php">View CV</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Selections</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="lec_add_company.php">Add companies</a>
                                        </li>
                                                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Company Details</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="lec_company_details.php">View Company Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage_notification.php">Contact To The Supervisor</a>
                                        </li>
                                        
                                    </ul>
                                </div>
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
                                    <h5 class="card-header">MONTHLY PROGRESS REPORT</h5>
									
                                    <div class="card-body">
									
                                        <form action="student_diary.php" method="post" enctype="multipart/form-data">
										    
											<div class="form-group">
                                            <label for="inputstudent_id">Registration Number:</label>
                                            <input type="varchar" name="student_id" data-parsley-trigger="change" required="" placeholder="enter registration number" autocomplete="off" class="form-control">
                                            </div>
											
											<div class="form-group">
                                            <label for="inputplace_of_traning_id">Place of training:</label>
                                            <input type="text" name="place_of_traning" data-parsley-trigger="change" required="" placeholder="enter your selected company name as given by the university" autocomplete="off" class="form-control">
                                            </div>
											
											<div class="form-group">
										
											<table style="width:100%">
														<tr>
															<th>Week</th>
															<th>Brief Description of Work Carried Out</th>
															</tr>
  
														<tr>
															<td class="form-group">Week 01</td>
															<td class="form-group"><input id="inputweek1" name="week1" type="text" class="form-control"></td>
														</tr>
  
														<tr>
															<td class="form-group">Week 02</td>
															<td class="form-group"><input id="inputweek2" name="week2" type="text" class="form-control"></td>
														</tr>
  
														<tr>
															<td class="form-group">Week 03</td>
															<td class="form-group"><input id="inputweek1" name="week3" type="text" class="form-control"></td>
														</tr>
  
														<tr>
															<td class="form-group">Week 04</td>
															<td class="form-group"><input id="inputweek4" name="week4" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 05</td>
															<td class="form-group"><input id="inputweek4" name="week5" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 06</td>
															<td class="form-group"><input id="inputweek4" name="week6" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 07</td>
															<td class="form-group"><input id="inputweek4" name="week7" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 08</td>
															<td class="form-group"><input id="inputweek4" name="week8" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 09</td>
															<td class="form-group"><input id="inputweek4" name="week9" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 10</td>
															<td class="form-group"><input id="inputweek4" name="week10" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 11</td>
															<td class="form-group"><input id="inputweek4" name="week11" type="text" class="form-control"></td>
														</tr>
														
														<tr>
															<td class="form-group">Week 12</td>
															<td class="form-group"><input id="inputweek4" name="week12" type="text" class="form-control"></td>
														</tr>
  
											</table></div>
											
											
											<div class="form-group">
                                            <label for="inputstudent_id">Problems Encountered and Solutions Found:</label>
                                           <input id="inputproblems" name="problems" type="text" class="form-control">
                                         </div>
										 
										 <div class="form-group">
                                            <label for="inputstudent_id">Number of  absent days in month:</label>
                                           <input id="inputabsent_days" name="absent_days" type="text" required="" placeholder="enter number of absent days with relevent days (Ex: month1 - 3)" class="form-control">
                                         </div>
										 
										 <div class="form-group">
                                            <label for="inputstudent_id">Placement manager's name:</label>
                                           <input id="inputManager" name="Manager" type="text" class="form-control">
                                         </div>
										 
										 
  
  
											
											
											
								
											
											
										
										<div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Save</button>
                           
                                                </p>
                                            </div>	
                                        </form>
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