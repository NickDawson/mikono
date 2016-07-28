<?php
session_start();
require_once("config.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <div id="top"></div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->



<section id="topline">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p style='color: #5866A2;'><i class="rt-icon-mail3" style='color: #5866A2;'></i> sales@excel.co.tz | <i class="rt-icon-phone-outline" style='color: #5866A2;'></i> +255717 109 362</p>
      </div>
      <div class="col-sm-6" style='color: #5866A2;'>
        <p id="social" class="text-right" ><span style='color: #5866A2;'>
          <a class="socialico-twitter" href="#" title="Twitter" >#</a>
          <a class="socialico-facebook" href="#" title="Facebook">#</a>
          <a class="socialico-google" href="#" title="Google">#</a>
          <a class="socialico-linkedin" href="#" title="Lindedin">#</a>
          <a class="socialico-skype" href="#" title="tumblr">#</a></span>
        </p>
      </div>
    </div>
  </div>        
</section>





<section id="header">
    <div class="container"><div class="row">

      <a class="navbar-brand" href="./"><img src="example/logo.png" width='50px;' alt=""> <span style='color:5866A2'>Mikono Speakers </span></a>

      <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
        <ul id="mainmenu" class="nav menu sf-menu responsive-menu superfish">
          <li class="active">
            <a href="./">Home</a>
          </li>
          <li class="dropdown">
            <a href="./about.php">About</a>
            <ul class="nav dropdown-menu" style='background-color: #5866A2;'>
                <!--
              <li class="dropdown">
                <a href="./blog.html">Blog</a>
                <ul class="nav dropdown-menu">
                  <li class="">
                    <a href="./blog.html">Blog</a>
                  </li>
                  <li class="">
                    <a href="./blog-single.html">Blog Post</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="./gallery.html">Gallery</a>
                <ul class="nav dropdown-menu">
                  <li class="">
                    <a href="./gallery.html">Gallery</a>
                  </li>
                  <li class="">
                    <a href="./gallery-single.html">Gallery Item</a>
                  </li>
                </ul>
              </li>
                -->
              <li class="">
                <a href="./about.php">Who are we?</a>
              </li>
              <li class="">
                <a href="./services.php">Our Services</a>
              </li>
              <li class="">
                <a href="./contact.php">Contact us</a>
              </li>
              <li class="">
                <a href="./blog.php">Blog</a>
              </li>

            </ul>
          </li>
          <li class="dropdown">
            <a href="./upcomming_events.php.html">Upcomming Events</a>
            <!--
            <ul class="nav dropdown-menu" style='background-color: #5866A2;'>
              <li class="">
                <a href="./blog.html">Blog</a>
              </li>
              <li class="">
                <a href="./blog-single.html">Blog Post</a>
              </li>
            </ul>
        -->
          </li>
          <li class="dropdown">
            <a href="./gallery.php">Our Gallery</a>
            <!--
            <ul class="nav dropdown-menu" style='background-color: #5866A2;'>
              <li class="">
                <a href="./gallery.php">Gallery</a>
              </li>
              <li class="">
                <a href="./gallery-single.php">Gallery Item</a>
              </li>
            </ul>
            -->
          </li>  
           <li class="">
             <a href="./book_speaker.php">Book Your Speaker</a>
          </li>        
          <li class="">
             <a href="./contact.php">Contact</a>
          </li>

        </ul>
      </div>
      
    </div></div>
</section>
