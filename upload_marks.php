<?php require_once('connection.php');?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Import Excel File To MySQL Database Using php">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/bootstrap-custom.css">
    <title>Upload Marks</title>
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
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        
					<!-- ============================================================== -->
                    <!-- start up mark  -->
                    <!-- ============================================================== -->

<div class="navbar navbar-inverse navbar-fixed-top">
		
	
 
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							
							<div class="controls">
								<label>CSV/Excel File :-</label><input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
 
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			
		</div>
        <br>


     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
       
         <div class="card-body">
             <div class="table-responsive">
		   <table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Student_ID</th>
				  		<th>name</th>
				  		<th>CSC1113</th>
				  		<th>CSC1122</td>
						<th>CSC113a</th>
						<th>CSC1142</th>
						<th>CSC1153</th>
						<th>CSC1153</th>
						<th>CSC1213</th>
						<th>CSC1223</th>
						<th>CSC1233</th>
						<th>CSC1242</th>
						<th>CSC1251</th>
						<th>CSC2113</th>
						<th>CSC2123</th>
						<th>CSC2133</th>
						<th>CSC2143</th>
						<th>CSC2222</th>
						<th>CSC2213</th>
						<th>CSC2233</th>
						<th>CSC2242</th>
						<th>CSC2252</th>
						<th>CSC2263</th>
						<th>CSC2272</th>
 
 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM student_marks ";    //change table name 
				$result_set =  mysqli_query($connection, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
 
					<tr>
						<td><?php echo $row['Student_ID']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['CSC1113']; ?></td>
						<td><?php echo $row['CSC1122']; ?></td>
						<td><?php echo $row['CSC113a']; ?></td>
						<td><?php echo $row['CSC1142']; ?></td>
						<td><?php echo $row['CSC1153']; ?></td>
						<td><?php echo $row['CSC1153']; ?></td>
						<td><?php echo $row['CSC1213']; ?></td>
						<td><?php echo $row['CSC1223']; ?></td>
						<td><?php echo $row['CSC1233']; ?></td>
						<td><?php echo $row['CSC1242']; ?></td>
						<td><?php echo $row['CSC1251']; ?></td>
						<td><?php echo $row['CSC2113']; ?></td>
						<td><?php echo $row['CSC2123']; ?></td>
						<td><?php echo $row['CSC2133']; ?></td>
						<td><?php echo $row['CSC2143']; ?></td>
						<td><?php echo $row['CSC2222']; ?></td>
						<td><?php echo $row['CSC2213']; ?></td>
						<td><?php echo $row['CSC2233']; ?></td>
						<td><?php echo $row['CSC2242']; ?></td>
						<td><?php echo $row['CSC2252']; ?></td>
						<td><?php echo $row['CSC2263']; ?></td>
						<td><?php echo $row['CSC2272']; ?></td>
 
 
					</tr>
				<?php
				}
			?>
		</table>

             </div>
         </div>
     </div>
 </div>
	</div>
 
	</div>
					<!-- ============================================================== -->
                    <!-- end up mark  -->
                    <!-- ============================================================== -->




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