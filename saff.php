<?php

  include('lang.php');

$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];
$selang= $_GET['lang'];
$_SESSION['lang']=$selang;




include_once('phplib/db_config.php');






 if(isset($_POST['log_user'])) {
	
      // username and password sent from form 
      $email    = "";
     
      $myusername1 = mysqli_real_escape_string($con, $_POST['name']);
		$mypassword = mysqli_real_escape_string($con, $_POST['password']);
		

      $sql = "SELECT Username,Password FROM login WHERE Username = '$myusername1' and password = '$mypassword'";
     
      
	  $result=mysqli_query($con, $sql);	
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
			
             header("location: manage/index.html");
				
         
						
			}
	  
	  
	  
	
   }
   
include_once 'include/galleryClass.php';
$galleryClass=new galleryClass();

$news=$galleryClass->news();  
         ?>


 
 
 
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
	<link  rel="stylesheet" href="css/style_2.css" />

    <title><?php echo $lang[$default]['Free country from drugs']?></title>
</head>

<body  >
    <header class="header bg" style="background-color:#0EC9F7;" > <!-- hedaer backgroud changer-->
        <div class="container text-white" >
            <div class="row"  >
                <div class="col-sm-4 align-self-center text-left">
                    <h6>
					<ul class="line" >
					<li><a href="Home.php?lang=en" style="color:#e6f0ff;" >  English |</a></li>
					<li><a href="Home.php?lang=si" class="lang_color">සිංහල  |</a></li>
					<li><a href="Home.php?lang=tm" class="lang_color">தமிழ்</a></li>
					</ul>
				</h6>
                </div>
                <div class="col-sm-4 col-12 align-self-center box-1 text-center">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-4 align-self-center text-right">
                    <div class="social-icons">
                        <a class="navbar-brand" href="index.html"><img src="images/lk.png" alt="logo"></a>

                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="home.php?lang=<?php echo $default?> "><?php echo $lang[$default]['Home']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php?lang=<?php echo $selang?> "><?php echo $lang[$default]['About']?></a>
                    </li>
                     <li class="nav-item">
                    <div class="dropdown">
                      <a class="nav-link" href=""><?php echo $lang[$default]['ORGANIZATION']?></a>
                      <div class="dropdown-content" style="min-width:120px;" >
                        <a href="saff.php?lang=<?php echo $selang?> "><?php echo $lang[$default]['STAFF']?></a>
                        <a href="COmmite.php?lang=<?php echo $selang?> "><?php echo $lang[$default]['COMMITTE']?></a>
                      </div>
                    </div>
                  </li>
					
					 <li class="nav-item">
                        <a class="nav-link" href="news.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['News']?></a>
                    </li>
					
					
                  
					 <li class="nav-item">
                        <a class="nav-link" href="contact.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['CONTACT']?></a>
                    </li>
					
					
                   
                    <li class="nav-item">
                        <a class="nav-link" href="event.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['EVENTS']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galley.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['gallery']?></a>
                    </li>
                   
					<li class="nav-item">
                        <a class="nav-link" href="login.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['Login']?></a>
                    </li>

                </ul>
            </div>
        </div>
		   </nav>
		    <div class="container">
				
				<?php
				$rows="";
                    if(count($news)){
                        foreach ($news as $value) {
							if('en'==$_SESSION['lang']){
								 $rows=$rows.$value['english'];
                           // echo "    <marquee behavior=\"scroll\" direction=\"left\" scrollamount=\"3\">$value[english]</marquee> ";
							}
							elseif('si'==$_SESSION['lang'])
							{
								$rows=$rows." ✰  ".$value['sinhala'];
                           // echo "    <marquee behavior=\"scroll\" direction=\"left\" scrollamount=\"3\">$value[sinhala]</marquee> ";
							}
							else
							{
								$rows=$rows.$value['tamil'];
                           // echo "    <marquee behavior=\"scroll\" direction=\"left\" scrollamount=\"3\">$value[tamil]</marquee> ";
							}
                        }
                    }
                  ?>
				  <?php 
				  
	 echo "   <font size=\"3\" color=\"blue\">  <marquee behavior=\"scroll\" direction=\"left\" scrollamount=\"3\">$rows</marquee></h6> ";

				  
	?>
			  </div>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Event</h1>

            </div>
            <!--container-fluid end-->
        </div>
    </section>

<!-- Contact section Start -->
<div id="contact">
 
	
	 
     
</div>

<!-- Contact section Ended -->

    <section class="section-7">
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-5 col-sm-12 mx-auto box-1">

                        <!-- Content -->
                        <a href="index.html"><img src="images/footer-logo.png" alt="footer-logo"></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-2 mx-auto">

                        <!-- Links -->
                        <h5>Site Navigation</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="index.html">go to home</a>
                            </li>
                            <li>
                                <a href="services.html">services</a>
                            </li>
                            <li>
                                <a href="portfolio.html">portfolio</a>
                            </li>
                            <li>
                                <a href="blog.html">read blog</a>
                            </li>
                            <li>
                                <a href="contact.html">contact us</a>
                            </li>
                            <li>
                                <a href="contact.html">product support</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-3 mx-auto">

                        <!-- Links -->
                        <h5>information</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">user login</a>
                            </li>
                            <li>
                                <a href="#!">creat new account</a>
                            </li>
                            <li>
                                <a href="#!">checkout</a>
                            </li>
                            <li>
                                <a href="#!">my cart</a>
                            </li>
                            <li>
                                <a href="#!">other information</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-4 mx-auto">

                        <!-- Links -->
                        <h5>policies & Info</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Terms Conditions </a>
                            </li>
                            <li>
                                <a href="#!">website polocy</a>
                            </li>
                            <li>
                                <a href="#!">Policy for Sellers </a>
                            </li>
                            <li>
                                <a href="#!">Policy for Buyers</a>
                            </li>
                            <li>
                                <a href="#!">Shipping & Refund </a>
                            </li>
                            <li>
                                <a href="#!">Wholesale Policy</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <div class="gradient"></div>
                <p>© 2017, All Rights reserved. more theme, designed by<a href="https://www.template.net/editable/websites/html5"> tEMPLATE.net</a></p>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>