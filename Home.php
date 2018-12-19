<?php


  include('lang.php');

$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];



 ?>

<html >

<head >
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
    <header class="header bg" style="background-color:#0066ff;" > <!-- hedaer backgroud changer-->
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
                        <a class="nav-link active" href="index.php"><?php echo $lang[$default]['Home']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"><?php echo $lang[$default]['About']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html"><?php echo $lang[$default]['ORGANIZATION']?></a>
                    </li>
                    <li class="nav-item" >
					<div class="dropdown">
                        <a class="nav-link" href="services.html"  class="dropdown" ><?php echo $lang[$default]['DISTRICT']?></a>

						<div class="dropdown-content" style="min-width:120px;" >
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
					</div>
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
                <h1 data-aos="fade-up" data-aos-delay="100"><?php echo $lang[$default]['PRESIDENTIAL_TASK']?></h1>

                <p data-aos="fade-up" data-aos-delay="700"><a href="beVol.html" class="btn btn-success">Be Volunteers</a></p>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    <!--Section-2-->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-12 box-1">
                    <div class="row box" data-aos="fade-left" data-aos-delay="300">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <h3><a href="services.html">design.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                            <p><a href="services.html"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-12 box-2">
                    <div class="row box" data-aos="fade-left" data-aos-delay="500">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <h3><a href="services.html">coding.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                            <p><a href="services.html"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-12 box-3">
                    <div class="row box" data-aos="fade-left" data-aos-delay="700">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <h3><a href="services.html">support.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                            <p><a href="services.html"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-5 col-md-12 p-0" data-aos="fade-right" data-aos-delay="300">
                    <h2>What we do <span>And why select us?</span></h2>
                    <ul>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Web Designing</a> </li>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Corporate Identity</a></li>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Domain Names</a></li>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Wordpress Development</a></li>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Logo Design</a></li>
                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Photography</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12 p-0" data-aos="fade-left" data-aos-delay="300">
                    <figure>
                        <img class="inner-img" src="images/services-bg2.jpg" alt="services">
                        <img class="out-sideimg" src="images/services-bg.jpg" alt="services">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="row heading">
                <div class="col-sm-6 col-12">
                    <h3>Read our articles<span>We write beautiful blog</span></h3>
                </div>
                <div class="col-sm-6 col-12">
                    <a href="blog.html" class="btn btn-success">Read our full blog</a>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-12 box-1"  data-aos="fade-right" data-aos-delay="300">
                    <figure class="figure">
                        <a href="blog.html"><img src="images/blog-1.jpg" class="figure-img img-fluid" alt="blog"></a>
                        <figcaption class="figure-caption">
                            <h2><a href="blog.html">Beautiful girl holding her camera in neck for a photo shoot</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                            <a href="blog_single.html" class="btn btn-success">+ more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-8 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="300">
                    <div class="row" >
                        <div class="col-sm-6 col-12 box-2">
                            <figure class="figure">
                                <a href="blog.html"><img src="images/blog-2.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-3">
                            <h4><a href="blog.html">Girl working seriously on laptop in office hours</a></h4>
                            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. specimen book. It has survived not only five</h5>
                            <a href="blog_single.html" class="btn btn-success">+ more</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 box-4">
                            <figure class="figure">
                                <a href="blog.html"><img src="images/blog-3.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-5">
                            <h4><a href="blog.html">Girl working seriously on laptop in office hours </a></h4>
                            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. specimen book. It has survived not only five</h5>
                            <a href="blog_single.html" class="btn btn-success">+ more</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 box-6">
                            <figure class="figure">
                                <a href="blog.html"><img src="images/blog-1.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-7">
                            <h4><a href="blog.html">Girl working seriously on laptop in office hours </a></h4>
                            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. specimen book. It has survived not only five</h5>
                            <a href="blog_single.html" class="btn btn-success">+ more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    <!--Section-5-->
    <section class="section-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-8">
                    <h3>Check our portfolio <span>view some of the best works...</span></h3>
                </div>
                <div class="col-lg-5 col-sm-4">
                    <a href="portfolio.html" class="btn btn-success">Read our portfolio</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row"  data-aos="fade-up" data-aos-delay="300">
                <a href="images/portfolio-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="images/portfolio-2.jpg" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>beautiful beach <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="images/portfolio-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="images/portfolio-3.jpg" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>beautiful beach <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="images/portfolio-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="images/portfolio-4.jpg" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>beautiful beach <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="images/portfolio-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="images/portfolio-5.jpg" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>beautiful beach <span>top view</span></h4></div>
                  </div>
                </a>
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </section>
    <section class="section-6" data-aos="fade-up">
        <div class="container">
            <!-- Grid row-->
            <div class="row main" data-aos="fade-up" data-aos-delay="300">
                <!-- Grid column -->
                <div class="col-lg-6 col-sm-12 col1">
                    <div class="heading">
                        <h3>Subscribe to Newsletter</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col1">
                    <form>
                        <div class="input-group">
                            <input name="email" id="email" type="email" placeholder="Enter your email id" required>
                            <button class="btn btn-info" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>
</body>

</html>
