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
                            
                            <li class="nav-item dropdown nav-user">
                               <a href="welcome_page.php" class="btn btn-dark">Log Out</a>
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
                                Menu
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
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Welcome to I P M S </h2>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                     <div class="row">
                <!--=============================================================================-->




                <!--=============================================================================-->

									

										    
										
											
            <?php
            
            
                
                $student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
                $SQLSELECT = "SELECT * FROM student_diary WHERE student_id='$student_id'";    //change table name 
                $result_set =  mysqli_query($connection, $SQLSELECT);
                while($row = mysqli_fetch_array($result_set))
                    
                
                {
                ?>
            
                
        
                
                
                                            
                
                

        <table class="table table-bordered">

            <thead>
                    <tr>
                        
                        <th>Registration Number :</th>
                        <th><?php echo $row['student_id']; ?></th>
                    
 
 
                    </tr>  

            </thead>
            <thead>
                    <tr>
                        <th>Month</th>
                        <th>Week</th>
                        <th>Brief Description of Work Carried Out</th>
                    
 
 
                    </tr>   
            </thead>
                  
                  <thead>
                    <tr>
                        <th>Month 01</th>
                        <th>Week 01</th>
                        <td><?php echo $row['week1']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                    <tr>
                        <th></th>
                        <th>Week 02</th>
                        <td><?php echo $row['week2']; ?></td>
                    
                        
 
                    </tr>
                    
                    <thead>
                    <tr>
                        <th></th>
                        <th>Week 03</th>
                        <td><?php echo $row['week3']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 04</th>
                        <td><?php echo $row['week4']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  <thead>
                    <tr>
                        <th>Month 02</th>
                        <th>Week 05</th>
                        <td><?php echo $row['week5']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 06</th>
                        <td><?php echo $row['week6']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 07</th>
                        <td><?php echo $row['week7']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 08</th>
                        <td><?php echo $row['week8']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th>Month 03</th>
                        <th>Week 09</th>
                        <td><?php echo $row['week9']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 10</th>
                        <td><?php echo $row['week10']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                  <thead>
                    <tr>
                        <th></th>
                        <th>Week 11</th>
                        <td><?php echo $row['week11']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  
                 <thead>
                    <tr>
                        <th></th>
                        <th>Week 12</th>
                        <td><?php echo $row['week12']; ?></td>
                
 
 
                    </tr>   
                  </thead>

                 <thead>
                    <tr>
                        <th></th>
                        <th>Problems Encountered and Solutions Found:</th>
                        <td><?php echo $row['problems']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  <thead>
                    <tr>
                        <th></th>
                        <th>Number of  absent days in month:</th>
                        <td><?php echo $row['absent_days']; ?></td>
                
 
 
                    </tr>   
                  </thead>
                  <thead>
                    <tr>
                        <th></th>
                        <th>Placement manager's name:</th>
                        <td><?php echo $row['Manager']; ?></td>
                
 
 
                    </tr>   
                  </thead>

                 
                  
                  
                <?php
            }
            ?>
        </table>
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