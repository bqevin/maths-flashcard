


<!DOCTYPE HTML>
<html>
<head>
<title>|</title>
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
 <!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
                <form action="inc/library.php" method="post"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
						<input type="text" name="f_name" required> 
					 </div>
					 
					<div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
                        <input type="text" name="l_name" required> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
                         <input type="text" name="email" required> 
					 </div>
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                         <span>Phone Number<label>*</label></span>
                         <input type="text" name="phone" required> 
                     </div>

                     <div class=" wow fadeInRight" data-wow-delay="0.4s">
                         <div class="sort-by">
                             <span>Gender<label>*</label></span>
                             <select name="gender" required>
                                 <option>
                                   select              </option>
                                 <option value="male">
                                     Male              </option>
                                 <option value="female">
                                     Female              </option>
                                 

                             </select>
                         </div>
                     </div>
                     
                     <div class=" wow fadeInRight" data-wow-delay="0.4s">
                         <div class="sort-by">
                             <span>Age<label>*</label></span>
                             <select name="age"  required>
                                 <option>
                                     select             </option>
                                 <option value="12">
                                     6-12 months             </option>
                                 <option value="1">
                                     1 year             </option>
                                 <option value="2">
                                     2 years             </option>
                                 <option value="3">
                                     3 years              </option>
                                 <option value="4">
                                    4 years              </option>
                                 <option value="5">
                                     5 years              </option>
                                 <option value="6">
                                     6 years              </option>


                             </select>
                         </div>
                     </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
                                 <input name="password" type="password"  required>
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
                                 <input type="password"  required>
							 </div>
					 </div>
                  <div class="clearfix"> </div>
                      <div class="register-but">
                      <input type="submit" name="signup" value="submit">
                  </div> 
                  
				</form>
				<div class="clearfix"> </div>
				
		   </div>
		 </div>
	</div>
<!-- registration -->

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
					
					<script>
                        $(document).ready(function(){
                          $("#txtConfirmPassword").keyup(checkPasswordMatch);  
                        });
                        
                        </script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


					</div>
					</div>
    

	
</body>
</html>	