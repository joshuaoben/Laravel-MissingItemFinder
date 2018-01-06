<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ $title }}</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700%7CDroid+Serif:300,400,700,400italic">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/owl.carousel.css">


  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div id="main-wrapper" class="homepage">
  <div class="toolbar">
    <div class="uou-block-1a blog">
      <div class="container">
        <ul class="quick-nav">
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>

        <ul class="social">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-google-plus"></a></li>
        </ul>

        <ul class="authentication">
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>

        <div class="language"> 
          <a href="#" class="toggle"><img src="img/flags/32/NL.png" alt=""> NDL</a>

          <ul>
            <li><a href="#"><img src="img/flags/32/PT.png" alt=""> PT</a></li>
            <li><a href="#"><img src="img/flags/32/FR.png" alt=""> FR</a></li>
            <li><a href="#"><img src="img/flags/32/ES.png" alt=""> ES</a></li>
          </ul>
        </div>
      </div>
    </div> <!-- end .uou-block-1a -->
  </div> <!-- end toolbar -->

  <div class="header-nav">
      <div class="box-shadow-for-ui">

        <div class="uou-block-2b icons">
          <div class="container">
            <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
            <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>

            <nav class="nav">
              <ul class="sf-menu">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i> Home</a>
                  <ul class="demo-menu">
                    <li class="active"><a href="index.html">Home 1</a></li>
                    <li><a href="index2.html">Home 2</a></li>
                  </ul>
                </li>
                <li>
                  <a href="index_jobs.html"><i class="fa fa-search-plus"></i> Jobs</a>
                  <ul class="demo-menu">
                    <li><a href="index_jobs.html">Jobs Index(Default)</a></li>
                    <li><a href="single_job.html">Job Single</a></li>
                    <li><a href="profile_company.html">Company Profile</a></li>
                    <li><a href="profile_company2.html">Company Profile (2)</a></li>
                  </ul>
                </li>
                <li>
                  <a href="index_business1.html"><i class="fa fa-suitcase"></i> Businesses</a>
                  <ul class="demo-menu">
                    <li><a href="index_business1.html">Business Index(Default)</a></li>
                    <li><a href="index_business2.html">Business Index(2)</a></li>
                    <li><a href="index_business3.html">Business Index(3)</a></li>
                    <li><a href="index_business4.html">Business Index(4)</a></li>
                    <li><a href="index_business5.html">Business Index(5)</a></li>
                    <li><a href="single_business.html">Business Single</a></li>
                  </ul>
                <li>
                  <a href="index_restaurant.html"><i class="fa fa-cutlery"></i>  Restaurants</a>
                  <ul class="demo-menu">
                    <li><a href="index_restaurant.html">Restaurant Index</a></li>
                    <li><a href="single_restaurant.html">Restaurant Single</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-cogs"></i> Features</a>
                  <ul class="demo-menu">
                    <li><a href="box-variation1.html">Box Variation 1</a></li>
                    <li><a href="box-variation2.html">Box Variation 2</a></li>
                    <li><a href="box-variation3.html">Box Variation 3</a></li>
                    <li><a href="gui-kit.html">GUI kit</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div> <!-- end .uou-block-2b -->

      </div>
  </div> <!-- edn header-navm -->
  
@yield('content')



@include('layout.front-footer')
 
</div>

<div class="uou-block-11a">
  <h5 class="title">Menu</h5>
  <a href="#" class="mobile-sidebar-close">&times;</a>
  <nav class="main-nav">
      <ul>
        <li class="active"><a href="#">Home</a></li>

          <li class="pl10 active"><a href="index.html">Home 1</a></li>
          <li class="pl10"><a href="index2.html">Home 2</a></li>

        <li class="active"><a href="#">Jobs</a></li>
          <li class="pl10"><a href="index_jobs.html">Jobs Index(Default)</a></li>
          <li class="pl10"><a href="single_job.html">Job Single</a></li>
          <li class="pl10"><a href="profile_company.html">Company Profile</a></li>
          <li class="pl10"><a href="profile_company2.html">Company Profile (2)</a></li>

        <li class="active"><a href="#">Businesses</a></li>
          <li class="pl10"><a href="index_business1.html">Business Index(Default)</a></li>
          <li class="pl10"><a href="index_business2.html">Business Index(2)</a></li>
          <li class="pl10"><a href="index_business3.html">Business Index(3)</a></li>
          <li class="pl10"><a href="index_business4.html">Business Index(4)</a></li>
          <li class="pl10"><a href="index_business5.html">Business Index(5)</a></li>
          <li class="pl10"><a href="single_business.html">Business Single</a></li>

        <li class="active"><a href="#">Restaurants</a></li>
          <li class="p10"><a href="index_restaurant.html">Restaurant Index</a></li>
          <li class="p10"><a href="single_restaurant.html">Restaurant Single</a></li>
        
        <li class="active"><a href="#">Features</a></li>
          <li class="p10"><a href="box-variation1.html">Box Variation 1</a></li>
          <li class="p10"><a href="box-variation2.html">Box Variation 2</a></li>
          <li class="p10"><a href="box-variation3.html">Box Variation 1</a></li> 
          <li class="p10"><a href="gui-kit.html">GUI kit</a></li>
        
        <li class="active"><a href="about.html"></a></li>
        <li class="active"><a href="blog.html"></a></li>
        <li class="active"><a href="contact.html">Contact</a></li>


      </ul>
  </nav>

  <hr>

</div>

<!-- Scripts -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins/superfish.min.js"></script>
<script src="js/jquery.ui.min.js"></script>
<script src="js/plugins/rangeslider.min.js"></script>

<script src="js/plugins/jquery.flexslider-min.js"></script>

<script src="js/uou-accordions.js"></script>

<script src="js/uou-tabs.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>

<!-- Localized -->