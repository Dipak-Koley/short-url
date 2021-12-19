<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL SHORTNER</title>
    <link rel="stylesheet" href="./css/main.css">
    <meta name="google-signin-client_id" content="726321899109-7gt977vcihofpm5b99dat56i2kshjo8j.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <script type="text/javascript" src="./js/main.js"></script>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span>URL Shortner</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                
                
                <?php
                    if(isset($_SESSION['user_id']))
                        echo '<li><a href="javascript:void(0)" onclick="logout()" class="menu-btn">Log Out</a></li>';
                    else
                        echo '<li><a class="menu-btn" data-onsuccess="gmailLogIn">Login with Google</a></li>';
                ?>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2 gray">Short links, big results</div>
				<div class="text-1 gray" >
					A URL shortener built with powerful tools to 
					help you grow and protect your brand.
				</div>
				<br>
				<br>
                <a href="#">Click Here to get started!</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
               
                <div class="centre">
                    <div class="text">Hello, We are Walkover Teammate <span class="typing-2"></span></div>
                    <p>Ankit Ranjan & Dipak Koley</p>
           
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Our teams</h2>
   <div class="container">
   <div class="row">
     <div class="col-xs-12">
        <div class="card">
          <div class="card-block">
            <h2>About us</h2>

<h3> Ankit Ranjan</h3>
              <p>I am Ankit Ranjan pursuing B.tech in Computer Science with Specialization in Open Source Software and Open Standards at Galgotias University , Uttar Pradesh , India

<p> I have a good experienced in Python, Cloud Computing and SQL .</p>
<p>With the gained experience I have made several projects like :</p>
<p> i. Facial detection </p>
<p> ii. Face Mood Detection </p>
<p> iii. Face Mask Detector </p>

I have good experience in Google Cloud and completed many Challenges like 30 Days of Google Cloud , Google Devjam Challenges , Qwiklabs challenges and also won several goodies from Google , Amazon  and Microsoft..</p>
<p> ` </p>
<h3>Dipak Koley</h3>
<p>I am Dipak Koley pursuing MCA after completed my BCA from West Bengal, India</p>
              </div>
            </div>
          </div>
        </div>
      
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="">Ankit Ranjan & Dipak Koley</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>