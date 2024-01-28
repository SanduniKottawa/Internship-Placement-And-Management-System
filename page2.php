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
    <title>Progress report on industrial training performance</title>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Approve Student Diary</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                      <li class="nav-item">
                                            <a class="nav-link" href="supervisor.php">view and approve Student Diary</a>
                                        </li>
                                          
                                    </ul>
                                </div>
 
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


 
	<div id="wrap">
	<div class="container">
		<div class="row">
			<h2 class="pageheader-title">Progress report on industrial training performance </h2>
		</div>
		

		<!-- ============================================================== -->
	
			<?php
			
			
			    
				$student_id =  mysqli_real_escape_string($connection,$_REQUEST['student_id']);
				$SQLSELECT = "SELECT * FROM student_diary WHERE student_id='$student_id'";    //change table name 
				$result_set =  mysqli_query($connection, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
					
				
				{
				?>
			
				
		
				
				
											
				
				
				</div>
				<div>
		<table align="left" class="table table-bordered">
		<pre class="tab">              </pre>
		<thead>
				  	<tr>
						
				  		<th>Registration Number	:</th>
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

				 
				  
				  
				<?php
			}
			?>
		</table>
		</div>
		
		
		
		<pre></pre>
		
		
		<form action="approve_report_db.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
          
                                           
	<div class="form-group">
                                            <label for="inputstudent_id">registration No.</label>
                                             <input id="inputstudent_id" type="varchar" name="student_id" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
										
										  
                                        <div class="form-group">
                                            <label for="inputmonth">Month</label>
                                            <input id="inputmonth" type="int" name="month" placeholder="month" required="" class="form-control">
                                        </div>
							
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Comments</label>
                                            <input id="inputcomments" name="comments" data-parsley-equalto="#inputcomments" type="text" required="" placeholder="comments" class="form-control">
                                        </div> 
										
										<div class="form-group">
                                            <label for="inputmonth">Approvel</label>
                                            <select name="approve" id="approve">
    <option value="approved">approved</option>
    <option value="not approved">not approved</option>
  
  </select>
                                        </div>
										  
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Done</button>
                                                    <a class="btn btn-space btn-secondary" role="button" href="http://localhost/ipms/company1.php">Cancel</a>
                                                </p>
                                           
		</div>
											
		</form>

		
		<!-- ============================================================== -->
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