<?php session_start();
require('includes/config.php');
include_once './inc/header.php';
include_once './counting/countClass.php';
$countClass=new countClass();
$No=$countClass->showtheCount("gallery");
$aNo=$countClass->showtheCount("album");


include_once './inc/header.php';

if(isset($_POST["submit"])){
    $albumName=$_POST["albumName"];
    include_once './gallery/galleryClass.php';
    $galleryClass=new galleryClass();
    $galleryClass->addAlbum($albumName);
}

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
          
             <div class="container">

      <div class="masthead">
          <br/>
        <h3 class="text-muted">Gallery Dashboard</h3>
        <br/>
        
         <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Gellayaddalbum.php" >
			<i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Add Album</h4>
                      </a>
                      </div>
            
                  </div> 
				  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Gellayalistalbum.php" >
			<i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>List Album</h4>
                      </a>
                      </div>
            
                  </div> 
				  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="GellayaaddGellery.php" >
			<i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Add Gallery</h4>
                      </a>
                      </div>
            
                  </div>
				  
				  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Gellayalistgallery.php" >
			<i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>List Gallery</h4>
                      </a>
                      </div>
            
                  </div>
		
		
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Gallery Added</h2>
          <h1><?php echo $No; ?></h1>
        </div>
          <div class="col-lg-4">
          <h2>Album Added</h2>
          <h1><?php echo $aNo; ?></h1>
        </div>
      </div>


    </div> 
<div class="col-md-6">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Album Name</label>
                  <input type="text" name="albumName" id="albumName" value="" class="form-control">
              </div>
              <button id="submit" name="submit" type="Submit" class="btn btn-primary">Add Album</button>
          </form>
      </div>
	
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
		<div class="col-md-6">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr><th>Id</th><th>Name</th></tr>
              </thead>
              <tbody>
                  <?php
                    if(count($listAlbum)){
                        foreach ($listAlbum as $value) {
                            echo "<tr><td>$value[AlbumId]</td><td>$value[AlbumName]</td></tr>";
                        }
                    }
                  ?>
              </tbody>
          </table>
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
