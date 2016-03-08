<?php
    include("inc/login.php")
?>
<!DOCTYPE HTML>
<html>
<head>
<title>I</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curabitur Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.js"> </script>
  <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->

</head>
<body>
		
		<!--start-banner-->
			<div class="banner ban1">
				<div class="container">
					<div class="top-menu">
					<span class="menu"><img src="images/nav.png" alt=""/> </span>
						<ul>
							<li><a  href="index.html">About</a></li>
							<li><a  href="about.html">Pricing</a></li>
							<li><a  href="menu.html">Faqs</a></li>
						</ul>
						<!-- script for menu -->
									
							 <script>
							 $("span.menu").click(function(){
							 $(".top-menu ul").slideToggle("slow" , function(){
							 });
							 });
							 </script>
						<!-- //script for menu -->
					</div>
					</div>	
			</div>
		<!--end-banner-->
			
			<!--contact-->
			<div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   
                   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                       <h3>REGISTERED</h3>
                       <p>If you have an account with us, please log in.</p>
                       <form action="" method="post">
                           <div>
                               <span>Email Address<label>*</label></span>
                               <input type="text" name="username"> 
                           </div>
                           <div>
                               <span>Password<label>*</label></span>
                               <input type="password" name="password"> 
                           </div>
                           <a class="forgot" href="#">Forgot Your Password?</a>
                           <input type="submit" name="submit" value="Login">
                       </form>
                   </div>
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>Not a member</h3>
				 <p> Say something here</p>
				 <a class="acount-btn" href="account.php">Create an Account</a>
			   </div>
			   	
                   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
	</div>
<!-- login -->

	<div class="footer-section">
					<div class="container">
						<div class="footer-top">
                            <p>Copyright &copy; 2016 <span>PEAK PERFOMANCE INTERNATIONAL</span> All Rights Reserved.</p>
					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


					</div>
					</div>


	
</body>
</html>