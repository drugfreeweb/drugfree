<?php session_start();
require('includes/config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
                        <a href="Gellay.php"><i class="fa fa-edit "></i>Gallery category <span class="badge">Included</span></a>
                    </li>
					<li class="active-link">
                        <a href="Gellay_add.php"><i class="fa fa-edit "></i>Add to Gallery <span class="badge">Included</span></a>
                    </li>


                 <li>
                        <a href="Gellay_add.php"><i class="fa fa-qrcode "></i> Add to Gallery </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add to Gallery </h2> 
					 
					 
					
				
				
				
					<form action='process_delyear.php' method='POST'>
							
					<b style="color:darkgreen">SELECT YEAR </b>						
							<br>
								<select name="del">
	
									<?php
					
											$query="select * from  gallery_year ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['Year'];
											}

									?>
									<input type='submit' value='  DELETE  '>
					</form>
<hr>
				
					<form action='process_delmonth.php' method='POST'>
							
					<b style="color:darkgreen">SELECT MONTH </b>						
							<br>
								<select name="del">
	
	<?php

              $query="select * from  gallery_month ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['month'];
											}

									?>
									<input type='submit' value='  DELETE  '>
				</form>

<hr>

					<form action='process_dellocation.php' method='POST'>
							
					<b style="color:darkgreen">SELECT LOCATION </b>						
							<br>
								<select name="del">
	
	<?php

              $query="select * from  gallery_location ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['location'];
											}

									?>
									<input type='submit' value='  DELETE  '>
				</form>


					<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Image Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Category:</b><br>
						<select  name="cat">
								<?php
									
										
			
											$query="select * from gallery_year ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['Year'];
												
												$q2 = "select * from  gallery_month where yearid = ".$row['imgid'];
												
												$q12 = "select * from  gallery_location where monthid = ".$row['imgid'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo "<option disabled>".$row2['month'];
												
													
												}
												$res12 = mysqli_query($conn,$q12) or die("Can't Execute Query..");
												while($row12 = mysqli_fetch_assoc($res12))
												{	
												
										echo '<option value="'.$row12['imgid'].'"> ---> '.$row12['location'];
												
													
												}
												
												
											}
											
											
											
											mysqli_close($link);
								?>
						</select>
						<br><br>
						
						
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						
						
						<input  type='submit'  value='   OK   '  >
				</form> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
