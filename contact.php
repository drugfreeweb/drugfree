<?php
session_start();

 include('lang.php');

$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];




$selang=$_GET['lang'];





$_SESSION['lang']=$default;

include_once 'include/galleryClass.php';
$galleryClass=new galleryClass();

$news=$galleryClass->news();

 ?>
<html lang="en">

<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <title>more</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
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
        <li><a href="news.php?lang=en" style="color:#e6f0ff;" >  English |</a></li>
        <li><a href="news.php?lang=si" class="lang_color">සිංහල  |</a></li>
        <li><a href="news.php?lang=tm" class="lang_color">தமிழ்</a></li>
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
                      <a class="nav-link" href="about.html"><?php echo $lang[$default]['About']?></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="portfolio.html"><?php echo $lang[$default]['ORGANIZATION']?></a>
                  </li>
				  <li class="nav-item">
                        <a class="nav-link" href="news.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['News']?></a>
                    </li>
				   
					 
					
					 <li class="nav-item">
                        <a class="nav-link" href="contact.php?lang=<?php echo $selang?>"><?php echo $lang[$default]['CONTACT']?></a>
                    </li>
					
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html"><?php echo $lang[$default]['EVENTS']?></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="galley.php?lang=<?php echo $default?>     "><?php echo $lang[$default]['gallery']?></a>
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
			  </div>	  </div>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Contact Us</h1>

            </div>
            <!--container-fluid end-->
        </div>
    </section>

<!-- Contact section Start -->
<div id="contact">
  <div class="container">

  <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-12 text-left">
          <p>
Dr. Samantha Kumara Kithalawaarachchi<br>
Director<br>
Presidential Task Force on Drug Prevention<br><br>
Address -<br>
Presidential Secretariat,<br>
Colombo 01,<br>
Sri Lanka.<br><br>
Tel - +94 (0) 11 235 4354<br>
+94 (0) 11 235 4614<br>
Fax - +94 (0) 11 235 4561<br>
E-mail - psdp@presidentsoffice.lk

      </div>
  </div>
    </div>

</div>

<!-- Contact section Ended -->

    <section class="section-7">
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark">


            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <div class="gradient"></div>
                <p>© 2019, All Rights reserved. Designed by<a href="http://www.zacseed.com/"> Zacseed</a></p>
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
