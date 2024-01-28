<?php 

session_start();
require_once('connection.php');?>
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
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Profile</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="create_cv.php ">Create CV</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Edit Profile</a>
                                        </li>
                                    </ul>
                                </div>
 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Doumentations</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="view1_dailydairy.php">View  and Print Diary Diary ary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view1_novation.php">View and Print Novation Report</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="upload_cv.php">Upload CV</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="novation_rpeport.php">Edit Novation Report</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Subjects</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_marks.php ">View Subject and Grades</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Company</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_company.php">view company details</a>
                                        </li>
                                       
                                
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-5"><i class="fab fa-fw fa-wpforms"></i>Status</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="status1.php ">Comment Status</a>
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
            <div class="influence-profile">
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

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2"> Student  Profile </h3>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                                                            </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0">
                                        <?php
                                            
                                        
                            
                                            $id=$_SESSION['username'];
                                            

                                        mysqli_select_db($connection,'ipmsystemfinal');
                                        $se="select full_name from student where student_id=$id" ;
                                         $q=mysqli_query($connection,$se);
                                                
                                        $row=mysqli_fetch_assoc($q);
                                        echo $row['full_name'];
                                        ?>
                                        </h2>
                                        
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>
                                        <?php
                                           
                                            $id=$_SESSION['username'];  


                                         mysqli_select_db($connection,'ipmsystemfinal');
                                            
                                            
                                         $se="select email from student where student_id= $id"  ;
                                          $q=mysqli_query($connection,$se);
                                                 
                                         $row=mysqli_fetch_assoc($q);
                                        echo $row['email'];
                                
                                        
                                        ?>
                                        </li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i> 
                                        <?php
                                            
                                           $id=$_SESSION['username'];


                                        mysqli_select_db($connection,'ipmsystemfinal');
                           
                                        $se="select phone from student where student_id=$id";
                                         $q=mysqli_query($connection,$se);
                                                
                                        $row=mysqli_fetch_assoc($q);
                                        echo $row['phone'];
                                        ?>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                
                                
                               
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        <div class="row">
                                            <div class="col-xl-20 col-lg-12 col-md-12 col-sm-12 col-12">
                                               
                                            </div>
                                            <div class="col-xl-10 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h1 class="mb-1"></h1>
                                                <p>
                                                     <?php
                                                        
                                                        $id=$_SESSION['username'];


                                                mysqli_select_db($connection,'ipmsystemfinal');
                                                $se="select * from student where student_id=$id  ";
                                                
                                                $q=mysqli_query($connection,$se);
                                                
                                                $row=mysqli_fetch_assoc($q);
                                                
                                               
                                                    echo "<table style='color:black; font-size:13px' class='table table-striped '>";
                                                    
                                                    echo "<tr>";
                                                        echo "<td>"."Student id"."</td>";
                                                        echo "<td>".":".$row['student_id']."</td>";
                                                    echo "</tr>";
                                                    
                                                    echo "<tr>";
                                                        echo "<td>"."DOB"."</td>";
                                                        echo "<td>".":".$row['DOB']."</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                            
                                                    echo "<td>"."Email"."</td>";
                                                        echo "<td>".":".$row['email']."</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";

                                                    echo "<tr>";
                                                        echo "<td>"."Phone"."</td>";
                                                        echo "<td>".":".$row['phone']."</td>";
                                                    echo "</tr>";

                                                    echo "<tr>";
                                                    echo "<td>"."Gender"."</td>";
                                                    echo "<td>".":".$row['gender']."</td>";
                                                echo "</tr>";

                                                echo "<tr>";
                                                    echo "<td>"."Address"."</td>";
                                                    echo "<td>".":".$row['address']."</td>";
                                                echo "</tr>";

                                                echo "<tr>";
                                                    echo "<td>"."Prefered area"."</td>";
                                                    echo "<td>".":".$row['prefered_area']."</td>";
                                                echo "</tr>";
                                                                       
                                                                                                            
                                             
                                                        echo "<td>"."<a href='student.php'>back</a>"."</td>";
                                            
                                                        
                                                    echo "</tr>";
                                                    echo "</table>";
                                    
                                                
                                                ?>
                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>       
                                </div>          
                      
                            </div>
                        </div>  
                    </div>  
            <!-- ============================================================== -->
            <!-- end content -->
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


            </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
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