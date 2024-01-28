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
    <title>Add admin</title>
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
                                </br></br>Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Registration <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">User Registration</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Company Registration</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                         
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Subjects</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_subject.php">Add Subject</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="Upload_marks.php">Upload Marks</a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </li>









                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Company</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_company.php">Add company</a>
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
                    <h2>User Registration</h2>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                              
                                <div class="card-body">
                                     <form action="adminpassword.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                             <input id="inputUserName" type="text" name="username" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
										<!-- ==============================================================
                                        <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>-->
										
										  
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control">
                                        </div>
							
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Repeat Password</label>
                                            <input id="inputRepeatPassword" name="repeat_password" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
                                        </div> 
										<!-- ===========================================================
										<label>Position</label>
										<select name="Position" id="Position">
										<option value="Lecture">Lecture</option>
										<option value="Coordinator">Coordinator</option>
                                        </select>-->
										

                                        <div class="form-group">
                                            <label for="inputrole">role</label>
                                            <select name="role" id="role">
                                               <option value="Lecture">Lecture</option>
                                                <option value="Coordinator">Coordinator</option>
                                                <option value="Student">Student</option>
                                                <option value="Student">Supervisor</option>
  
                                             </select>
                                        </div>
										
										  
                                        <div class="row">
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Add User</button>
                                                    <a class="btn btn-space btn-secondary" role="button" href="coordinator.php">Cancel</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
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
