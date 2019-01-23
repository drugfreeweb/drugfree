
<?php session_start();
require('includes/config.php');
include_once './inc/header.php';
include_once './counting/countClass.php';




include_once './gallery/galleryClass.php';
$galleryClass=new galleryClass();
<<<<<<< HEAD
$newslist=$galleryClass->newslist();




if(isset($_POST["submit"])){
		














		
    $getImage=  basename($_FILES["Image"]["name"]);
    if($getImage==""){
        echo "Please choose";
	
		
    }
    else
    {
		
				$tsi=$_POST['tsi'];
=======

if(isset($_POST["submit"])){
				
   
		$tsi=$_POST['tsi'];
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
			$ttm=$_POST['ttm'];
				$teng=$_POST['teng'];
					$si=$_POST['si'];
						$tm=$_POST['tm'];
							$eng=$_POST['eng'];
<<<<<<< HEAD
        $target="../news/";
        $ran=time();
        $target=$target.$ran.$getImage;
        $imageName=$ran.$getImage;
        
        if($_FILES["Image"]["type"]=="image/jpg"||$_FILES["Image"]["type"]=="image/jpeg"){
            move_uploaded_file($_FILES["Image"]["tmp_name"], $target);
            if(move_uploaded_file){
                $galleryClass->news($tsi,$ttm,$teng,$si,$tm,$eng,$imageName);
					include_once './index.html';
            }
            else
            {
                echo "File is not uploaded";
            }
        }
        else
        {
            echo "Please choose Image";
        }
    }
}

if(isset($_POST["select"])){
	
$nid=$_SESSION['nid'];
	
	$galleryClass->deletenews($nid);
	include_once './index.html';
	
	
=======
			 $galleryClass->news($tsi,$ttm,$teng,$si,$tm,$eng);				
       
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
}

?>
















<<<<<<< HEAD

=======
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
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
                 


                     <li> 
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li class="active-link">
                        <a href="ui.html"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Blank Page  <span class="badge">Included</span></a>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
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
                        <h2>News Management</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<<<<<<< HEAD
	   <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
             
=======
	<form method="post" >
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
                        <h5>News Topic</h5>
                       <div class="input-group">
  <span class="input-group-addon">Header Sinhala</span>
  <input type="text" class="form-control" name="tsi" placeholder="Enter " />
  </div>
  
  <div class="input-group">
  
  <span class="input-group-addon">Header English</span>
  <input type="text" class="form-control"  name="ttm" placeholder="Enter" />
  </div>
  
  <div class="input-group">
  <span class="input-group-addon">Header Tamil</span>
  <input type="text" class="form-control"  name="teng" placeholder="Enter" />
</div>
<br />

<br />

                    </div>
                   
                    <div class="col-lg-6 col-md-6">
                        <h5>News Details</h5>
                       <div class="input-group">
  <span class="input-group-addon">Header Tamil</span>
  <input type="text" class="form-control"   name="si"placeholder="Enter" />
</div>

                        <div class="input-group">
  <span class="input-group-addon">Header Tamil</span>
  <input type="text" class="form-control"  name="tm" placeholder="Enter" />
</div>

                        <div class="input-group">
  <span class="input-group-addon">Header Tamil</span>
  <input type="text" class="form-control"  name="eng" placeholder="Enter" />
</div>

  <div class="form-group">
                  <label>Choose Image</label>
                  <input type="file" name="Image" id="Image" value="" class="form-control">
              </div>
			  
                      
                        <button id="submit" name="submit" type="Submit" class="btn btn-primary">Upload Image</button>
					   
		</form>			   
					   
					   
					   
					   
					   
					   
					   
					   
					   
                        <br>
                        <br>


                </div>
                <!-- /. ROW  -->
                <hr>
              
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
<<<<<<< HEAD
                        <h5>News Tabele</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                  
                                    <th>ID</th>
                                    <th>Sinhala</th>
                                    <th>Tamil</th>
									<th>English</th>\
									<th>Opthion</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php
                    if(count($newslist)){
                        foreach ($newslist as $value)
						{		$_SESSION['nid']=$value['nid'];
                            echo "<tr><td>$value[nid]</td><td>$value[sinhala]</td><td>$value[english]</td><td>$value[tamil]</td><td>  <form  method='post'>
												<input type='submit' name='select' value='Delete' > </form>	
												
												</td>   </tr>";
                        }
                    }                 
                  ?>
                               
=======
                        <h5>Table  Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
                            </tbody>
                        </table>

                    </div>
<<<<<<< HEAD
                   
                
                <!-- /. ROW  -->
                <hr />
          
=======
                    <div class="col-lg-6 col-md-6">
                        <h5>Table  Sample Two</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>


                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h5>Panel Sample</h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Default Panel
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class="panel-footer">
                                Panel Footer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Accordion Sample</h5>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Collapsible Group Item #1</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  

                                        <div class="panel-body">
                                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Tabs Sample</h5>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Home</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Home Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Profile Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Messages Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Information</h5>
                            This is a type of bare admin that means you can customize your own admin using this admin structured  template . For More Examples of bootstrap elements or components please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                        . And if you want full template please download <a href="http://www.binarytheme.com/bootstrap-free-admin-dashboard-template/" target="_blank">FREE BCORE ADMIN </a>&nbsp;,&nbsp;  <a href="http://www.binarytheme.com/free-bootstrap-admin-template-siminta/" target="_blank">FREE SIMINTA ADMIN</a> and <a href="http://binarycart.com/" target="_blank">FREE BINARY ADMIN</a>.

                    </div>
                </div>
>>>>>>> 25bf30b2a8f77778851430a5c38a0608002c038e
                <!-- /. ROW  -->

            </div>
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
