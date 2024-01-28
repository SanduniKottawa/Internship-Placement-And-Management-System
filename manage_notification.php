<?php require_once('connection.php');?>
<?php require_once('Push.php');?>
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
    <title>Messages</title>
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
                                <br><br>Menu
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

                      <div class="row">
                        <div class="col-sm-6">
                            <h3><br><br>Add New Notification:</h3>
                            <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">                                      
                         <table class="table borderless">
                         <tr>
                            <td>Title</td>
                            <td><input type="text" name="title" class="form-control" required></td>
                         </tr>   
                         <tr>
                            <td>Message</td>
                            <td><textarea name="msg" cols="50" rows="4" class="form-control" required></textarea></td>
                         </tr>           
                    <tr>
                        <td>Broadcast time</td>
                        <td><select name="time" class="form-control"><option>Now</option></select> </td>
                    </tr>

                   
                    <tr>
                        <td>Loop (time)</td>
                        <td><select name="loops" class="form-control">
                        <?php 
                            for ($i=1; $i<=5 ; $i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Loop Every (Minute)</td>
                        <td><select name="loop_every" class="form-control">
                        <?php 
                        for ($i=1; $i<=60 ; $i++) { ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                        </select> </td>
                    </tr>               

                      <tr>
                        <td>For</td>
                         <td><select name="user" class="form-control">
                          <?php 
                            $push = new Push();
                            $user = $push->listUsers(); 
                            if(count($user) != 0){
                            foreach ($user as $key) {
                          ?>
                            <option value="<?php echo $key['username'] ?>"><?php echo $key['username'] ?></option>
                          <?php }} ?>
                          </select></td>
 
                    </tr>  
                      
                    <tr>
                        <td colspan=1></td>
                        <td colspan=1></td>
                    </tr>
                    <tr>
                        <td colspan=1></td>
                        <td><button name="submit" type="submit" class="btn btn-info">Add Message</button></td>
                    </tr>

                </table>

                 
            </form>
        </div>
    </div>

    <?php 
    if (isset($_POST['submit'])) { 
        if(isset($_POST['msg']) and isset($_POST['time']) and isset($_POST['loops']) and isset($_POST['loop_every']) and isset($_POST['user'])) {
            $title = $_POST['title'];   
            $msg = $_POST['msg']; 
            $time = date('Y-m-d H:i:s'); 
            $loop= $_POST['loops']; 
            $loop_every=$_POST['loop_every']; 
            $user = $_POST['user']; 
            $isSaved = $push->saveNotification($title, $msg,$time,$loop,$loop_every,$user);
            if($isSaved) {
                echo '* save new notification success';
            } else {
                echo 'error save data';
            }
        } else {
            echo '* completed the parameter above';
        }
    } 
    ?>
    <h3>Notifications List:</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Next Schedule</th>
                <th>Title</th>
                <th>Message</th>
                <th>Remains</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            <?php $a =1; 
            $notifList = $push->listNotification(); 
            foreach ($notifList as $key) {
            ?>
            <tr>
                <td><?php echo $a ?></td>
                <td><?php echo $key['notif_time'] ?></td>
                <td><?php echo $key['title'] ?></td>
                <td><?php echo $key['notif_msg'] ?></td>
                <td><?php echo $key['notif_loop']; ?></td>
                <td><?php echo $key['username'] ?></td>
            </tr>
            <?php $a++; } ?>
        </tbody>
    </table>

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