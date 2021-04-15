<?php
// Start the session
session_start();
//declare session varriable
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made by Eric -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/back2.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>MissingPerson</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>

  <section class="menu menu3 cid-sstQEzvJnp" once="menu" id="menu3-0">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/back2.jpg" alt="Mobirise" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                <a class="navbar-caption text-black display-7" href="index.php">MissingPerson</a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    
                </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://www.facebook.com" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://www.twitter.com" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://www.instagram.com" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    
                </div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="register.php">
                        Sign up</a></div>
            </div>
        </div>
    </nav>
</section>


<section class="header3 cid-sstSaeTO29 mbr-fullscreen mbr-parallax-background" id="header3-2">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(255, 255, 255);"></div>

    <div class="align-center container-fluid">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">
<?php 
	require 'DB/db_conn.php';
	
	$sql = "SELECT position FROM users WHERE email='$email'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//declare uesr position
			$position = "" . $row["position"]. "";
			//redirect users to their specific account page
			if ($position=="Administrator")
			{
				header("Refresh: 1; URL=Admin/Admin_Index.php");
			}
			if ($position=="DCI")
			{
				header("Refresh: 1; URL=DCI/DCI_Index.php");
			}
			if ($position=="Public")
			{
				header("Refresh: 1; URL=Public/Public_Index.php");
			}
				//close while loop
				}
		//close first if function		}
		} 
		else {
			echo "
			<div align='center' style='background-color:#EBD6D6'>
			Invalid Position!
			</div>
			<br>
			";
			}
	$conn->close();
	?>
	
<div class="container-fluid" align="center">
  <div class="spinner-border text-success"></div>
</div>
            </div>
        </div>
    </div>
</section>



<section class="footer3 cid-sstRFUVvyb" once="footers" id="footer3-1">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu"> 
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Contact Us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2021 MissingPerson. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section>




<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
 <a href="https://mobirise.site/o" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
 <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">
  
 </p>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>  
<script src="assets/popper/popper.min.js"></script>  
<script src="assets/tether/tether.min.js"></script>  
<script src="assets/bootstrap/js/bootstrap.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/dropdown/js/nav-dropdown.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  
<script src="assets/parallax/jarallax.min.js"></script>  
<script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>