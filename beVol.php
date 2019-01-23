<?php
 
include_once('phplib/config.php');
   session_start();
  
   if(isset($_POST['log_user'])) {
      // username and password sent from form 
 
     
      $myusername1 =  (string)  $_POST['name'];
		$mypassword2 = mysqli_real_escape_string($con, $_POST['adress']);
			$mypassword3= mysqli_real_escape_string($con, $_POST['age']);
				$mypassword4 =$_POST['bof'];
					$mypassword5 = $_POST['select'];
						$mypassword6 = mysqli_real_escape_string($con, $_POST['divi']);
							$mypassword7 = mysqli_real_escape_string($con, $_POST['Tel']);
								$mypassword8 = mysqli_real_escape_string($con, $_POST['email']);
									$mypassword9 = mysqli_real_escape_string($con, $_POST['nic']);
							
						$mypassword10 =	date("Y/m/d");
							
      $sql = "INSERT INTO `vol` ( `name`, `addres`, `bof`, `district`, `Divisional`, `number`, `Email`, `nic`, `Qualifications`,`regdate`) VALUES ( '$myusername1', '$mypassword2', '$mypassword3', '$mypassword4', '$mypassword5', '$mypassword6', '$mypassword7', '$mypassword8', '$mypassword9','$mypassword10') ";
	  
//$sql="INSERT INTO `vol` (`id`, `name`, `addres`, `bof`, `district`, `Divisional`, `number`, `Email`, `nic`, `Qualifications`, `regdate`) VALUES (NULL, 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we');";
     
      
	  $result=mysqli_query($con, $sql);	
     	header("location: index.php");
			
	  
	  
	  
	
   
   
   }
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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

    <title>more</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
        .jumbotron h2 {padding-bottom: 0;}
    </style>
</head>

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-4 align-self-center text-left">
                    <h6>Estd 1905</h6>
                </div>
                <div class="col-sm-4 col-12 align-self-center box-1 text-center">
                    <a class="navbar-brand" href="index.html"><img src="images/header-logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-4 align-self-center text-right">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
						
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Be A Volunteers</h1>

            </div>
            <!--container-fluid end-->
        </div>
    </section>

<!-- Contact section Start -->
<div id="contact">
  <div class="container">
  <h3>Register</h3>
  <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-12 text-left">
          <p>Please fill this form to be a volunteer</p>
      </div>
  </div>
    </div>
     <div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-12">
              <form method="post">
                  <div class="form-group row">
                    Your Name:
                      <div class="col-sm-12">
                          <input type="text" class="form-control"  name="name" placeholder="Your Name" required>
                      </div>
                      Your Address:
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="adress" placeholder="Your Address" required>
                      </div>
                      Your Age:
                      <div class="col-sm-12">
                          <input type="number" class="form-control"  name="age" placeholder="Your Age" required>
                      </div>
                      Your Birthday:
                      <div class="col-sm-12">
                          <input type="date" class="form-control"  name="bof" placeholder="Your Date" required>
                      </div>
                      Your District:
                          <div class="col-sm-12">
                            <select  name="select">
                              <option value="Ampara">Ampara</option>
                              <option value="Anuradhapura">Anuradhapura</option>
                              <option value="Badulla">Badulla</option>
                              <option value="Batticaloa">Batticaloa</option>
                              <option value="Colombo">Colombo</option>
                              <option value="Galle">Galle</option>
                              <option value="Gampaha">Gampaha</option>
                              <option value="Hambantota">Hambantota</option>
                              <option value="Jaffna">Jaffna</option>
                              <option value="Kalutara">Kalutara</option>
                              <option value="Kandy">Kandy</option>
                              <option value="Kegalle">Kegalle</option>
                              <option value="Kilinochchi">Kilinochchi</option>
                              <option value="Kurunegala">Kurunegala</option>
                              <option value="Mannar">Mannar</option>
                              <option value="Matale">Matale</option>
                              <option value="Matara">Matara</option>
                              <option value="Monaragala">Monaragala</option>
                              <option value="Mullaitivu">Mullaitivu</option>
                              <option value="Nuwara Eliya">Nuwara Eliya</option>
                              <option value="Polonnaruwa">Polonnaruwa</option>
                              <option value="Puttalam">Puttalam</option>
                              <option value="Ratnapura">Ratnapura</option>
                              <option value="Trincomalee">Trincomalee</option>
                              <option value="Vavuniya">Vavuniya</option>
                            </select>
                      </div>
                      Your Divisional Secretariat:
                          <div class="col-sm-12">
                          <input type="text" class="form-control"  name="divi" placeholder="Your Divisional Secretariat" required>
                      </div>
                      Your Telephone number:
                          <div class="col-sm-12">
                          <input type="text" class="form-control"  name="Tel" placeholder="Your Telephone number" required>
                      </div>
                      Your Email Address:
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="email" placeholder="Your Email Address" required>
                      </div>
                      Your National Identity Car Number:
                          <div class="col-sm-12">
                          <input type="text" class="form-control"  name="nic" placeholder="Your National Identity Car Number" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    Your Educational Qualifications:
                      <div class="col-xs-12 col-md-12">
                          <textarea type="text" class="form-control" name="info"  placeholder="Your Educational Qualifications" rows="6" required></textarea>
                      </div>
                  </div>
                  <input type="submit" name="log_user"  value="Search" class="form-control btn btn-primary">
              </form>
          </div>
      </div>
     </div>
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