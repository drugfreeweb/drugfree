
<?php
  include('lang.php');

$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];


include_once './manage/gallery/galleryClass.php';
$galleryClass=new galleryClass();
$albumList=$galleryClass->listAlbum();

include_once './manage/gallery/galleryClass.php';
$galleryClass=new galleryClass();
$galleryList=$galleryClass->listGallery("where AlbumId='$_GET[id]'");

include_once './manage/gallery/galleryClass.php';
$galleryClass=new galleryClass();
$albumList=$galleryClass->listAlbum();




?>
<html >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta http-equiv="refresh" content="10" > 
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
        <li><a href="galley.php?lang=en" style="color:#e6f0ff;" >  English |</a></li>
        <li><a href="galley.php?lang=si" class="lang_color">සිංහල  |</a></li>
        <li><a href="galley.php?lang=tm" class="lang_color">தமிழ்</a></li>
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
                      <a class="nav-link" href="galley.php"><?php echo $lang[$default]['gallery']?></a>
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
                <h1 data-aos="fade-right" data-aos-delay="300">Gallery</h1>
                <!-- <h2 data-aos="fade-left" data-aos-delay="300">the multipurpose psd wordrpess theme</h2> -->
            </div>
            <!--container-fluid end-->
        </div>
    </section>
<body  >
   
    <!--Section-5-->
    <section class="section-5">
        <?php
		echo '<div class="container-fluid">
            <div class="row"  data-aos="fade-up" data-toggle="lightbox" data-aos-delay="300">';
    if(count($galleryList)){
    foreach ($galleryList as $value) {
		$albumimg=$value['ImageName'];
		
		
	
		
		$url='galleryImage/'.$albumimg;
		
		echo'
                  <a href="'.$url.'"  class="col-sm-3 box">
                  <img src='.$url.' class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"></div>
				 
                  </div>
                </a>
                
       ';
		
		
	
	}
    }
	echo '  </div>
        <!--container-->
    </section>';
	
    ?>
      
    
      

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
           

             // Intialize gallery
             var gallery = $('.gallery a').simpleLightbox();
         });
    </script>
</body>

</html>
