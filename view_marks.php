<?php
session_start();
include('connection.php')
?>

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
                                            <a class="nav-link" href="profile.php">View Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Edit Profile</a>
                                        </li>
                                    </ul>
                                </div>
 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Daily Diary</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="daily_diary.php">View Diary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Chart</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Subjects</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Marks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Parsely Validations</a>
                                        </li>
                                
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Company</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Marks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Parsely Validations</a>
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
                    <div class="row"><h5 class="pageheader-title">Students marks</h5>
                        


                    <?php
    $id=$_SESSION['username'];


    mysqli_select_db($connection,'ipmsystemfinal');
    $se="select * from student_marks where Student_ID=$id  ";
                                                
    $q=mysqli_query($connection,$se);
                                                
     $row=mysqli_fetch_assoc($q);
                                                
                                               
    echo "<table style='color:black; font-size:13px' class='table table-striped '>";
                                                    
        echo "<tr>";
             echo "<td>"."Student id"."</td>";
             echo "<td>".":".$row['Student_ID']."</td>";
         echo "</tr>";
                                                    
                                                   
         echo "<tr>";                                   
            echo "<td>"."CSC1113"."</td>";
            echo "<td>".":".$row['CSC1113']."</td>";
        echo "</tr>";
                                                

        echo "<tr>";
            echo "<td>"."CSC1122"."</td>";
            echo "<td>".":".$row['CSC1122']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC113a"."</td>";
            echo "<td>".":".$row['CSC113a']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC1142"."</td>";
            echo "<td>".":".$row['CSC1142']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC1153"."</td>";
            echo "<td>".":".$row['CSC1153']."</td>";
        echo "</tr>";
                                                              
        echo "<tr>";
            echo "<td>"."CSC1213"."</td>";
            echo "<td>".":".$row['CSC1213']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC1223"."</td>";
            echo "<td>".":".$row['CSC1223']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC1233"."</td>";
            echo "<td>".":".$row['CSC1233']."</td>";
        echo "</tr>";

        echo "<tr>";
             echo "<td>"."CSC1242"."</td>";
            echo "<td>".":".$row['CSC1242']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC1251"."</td>";
            echo "<td>".":".$row['CSC1251']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2113"."</td>";
            echo "<td>".":".$row['CSC2113']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2123"."</td>";
            echo "<td>".":".$row['CSC2123']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2133"."</td>";
            echo "<td>".":".$row['CSC2133']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2143"."</td>";
            echo "<td>".":".$row['CSC2143']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2222"."</td>";
            echo "<td>".":".$row['CSC2222']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2213"."</td>";
            echo "<td>".":".$row['CSC2213']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2233"."</td>";
            echo "<td>".":".$row['CSC2233']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2242"."</td>";
            echo "<td>".":".$row['CSC2242']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2252"."</td>";
            echo "<td>".":".$row['CSC2252']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2263"."</td>";
            echo "<td>".":".$row['CSC2263']."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"."CSC2272"."</td>";
            echo "<td>".":".$row['CSC2272']."</td>";
        echo "</tr>";

                                           

                                                                               
        echo "<tr>";
             echo "<td>"."<a href='student.php'>back</a>"."</td>";
         echo "</tr>";
    echo "</table>";
                                    
                                                
     ?>   
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