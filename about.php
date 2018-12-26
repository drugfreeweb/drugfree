<?php


  include('lang.php');

$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];



 ?>
<!doctype html>
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
    <link  rel="stylesheet" href="css/style_2.css" />

    <title>more</title>
    <style>
    .jumbotron {width: 100%;height: 150px;}
        .jumbotron h2 {padding-bottom: 0;}
    </style>

</head>

<body>
  <header class="header bg" style="background-color:#0EC9F7;" > <!-- hedaer backgroud changer-->
      <div class="container text-white" >
          <div class="row"  >
              <div class="col-sm-4 align-self-center text-left">
                  <h6>
        <ul class="line" >
        <li><a href="about.php?lang=en" style="color:#e6f0ff;" >  English |</a></li>
        <li><a href="about.php?lang=si" class="lang_color">සිංහල  |</a></li>
        <li><a href="about.php?lang=tm" class="lang_color">தமிழ்</a></li>
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
                      <a class="nav-link active" href="index.php"><?php echo $lang[$default]['Home']?></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="about.html"><?php echo $lang[$default]['About']?></a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown">
                      <a class="nav-link" href="portfolio.html"><?php echo $lang[$default]['ORGANIZATION']?></a>
                      <div class="dropdown-content" style="min-width:120px;" >
                        <a href="#"><?php echo $lang[$default]['STAFF']?></a>
                        <a href="#"><?php echo $lang[$default]['COMMITTE']?></a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item" >
                      <a class="nav-link" href="services.html"  class="dropdown" ><?php echo $lang[$default]['GALLERY']?></a>

                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html"><?php echo $lang[$default]['EVENTS']?></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html"><?php echo $lang[$default]['RESOURCES']?></a>
                  </li>
                 <!-- <li class="nav-item">
                      <a class="nav-link" href="blog.html"><?php echo $lang[$default]['CONTACT']?></a>
                  </li> -->
        <li class="nav-item">
                      <a class="nav-link" href="login.php?lang=en"><?php echo $lang[$default]['Login']?></a>
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
                <h1 data-aos="fade-right" data-aos-delay="300"><?php echo $lang[$default]['Our Vission']?></h1>
                <h1 data-aos="fade-left" data-aos-delay="300"><?php echo $lang[$default]['& Mission']?></h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>

    <!-- About Section Start -->
    <div id="about-us">
        <div class="container">
           <h3>Vision</h3>
            <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
                <div>
                 <!--<img src="images/about.jpg" alt="about-bg" class="thumbnail image">!-->
                  <p>To achieve the backdrop to economic, social and cultural development in Sri Lanka according to His Excellency the Presidents Policy Statement “Maithri Palanayak, Stavara Ratak” to build a Sri Lanka Free of Dangerous Drugs.

                   </p>
                </div>
             </div>
             <hr>
             <h3>Mision</h3>
              <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
                  <div>
                   <!--<img src="images/about.jpg" alt="about-bg" class="thumbnail image">!-->
                    <p>
To gradually reduce the use of Alcohol,
Tobacco and other illegal drugs and thereby
reduce the negative consequences of using the
aforementioned substances to the health of Sri
Lankans which will in turn improve the people’s wellbeing, improve productivity and reduce poverty.<br><br>

Objectives<br><br>

To decrease the usage, transport and sale of Illegal Drugs by 80%
by the year 2020 in comparison to year 2014.<br>
To Decrease the Individual usage of Alcohol by 25% by
2020 in comparison to 2014 To decrease the usage of tobacco
products by at least 50% by the Year 2020 in comparison to year 2014.<br>
To stop newcomers from starting the usage of drugs.<br>
To minimalize the hazardous and harmful behaviors of current users.<br>
To minimalize the number of road accidents caused by alcohol usage by at
least 50% in the year 2020 in comparison to the year 2014.<br>
To completely end the direct and indirect publicity of tobacco
and alcohol as well as to end corporate social responsibility programs of those respective organizations.<br>
To protect the rights of non-users affected by users in the work place,
at home and in the public and also to reduce the harm caused by which so
that a healthy environment can be developed for nonusers.<br>
To develop a social environment where peer pressure
towards individuals to consume alcohol for the first time or increasing the usage of alcohol.<br>
To protect the rights of non smokers, specially by passive smoking
caused by smokers, and also to develop a healthy environment which is not polluted by tobacco smoke.<br>

To reduce the number of victims being admitted to hospitals due to effects of direct or indirect usage of drugs.<br>
To reduce the abundances of Tobacco and Alcohol products.<br>
To efficiently and correctly educate the public regarding direct and indirect harm caused by Drugs.<br><br>

Action Plan<br><br>
In order to implement the “Mathin Nidahas Ratak” program
and its steps in reducing the demand of Drugs and the supply of the same,
focus will be on three important points. There will be special importance placed on
the factor of demand of drugs.<br><br>
1)	Compilation of Laws and Policies, implementation<br>
2)	Treatment and Rehabilitation<br>
3)	Prevention<br>

                     </p>
                  </div>
               </div>
        </div>
    </div>
    <!-- About Section End -->

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
