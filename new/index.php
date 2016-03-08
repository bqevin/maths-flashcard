<?php
  @ include ('web/inc/session.php')
      


?>
<!DOCTYPE html>
<html>
<head>
<title>non</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Latest News Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body oncontextmenu="return false">
	<!-- main -->
		<div class="main">
			<div class="main-grid">
				
                <video id="video1" controls width="100%" height="100%"  autoplay>
                    <source src="183morning1.mp4" type="video/mp4" id="myVideo">
                        >
                    </video>
                    
                    <script>
                        
                        var video= document.getElementsByTagName('video')[0];
                        video.onended = function(e){
                        /*alert("<button type='button'>clck to continue</button>");*/
                         var r =  confirm("click to continue");
                            if (r == true){
                                
                                window.location.href = "index1.php";
                            } else{
                             window.close();
                            }
                            
                        }
                </script>
				
				<div class="clear"> </div>
			</div>
			<div class="footer">
                
			</div>
		</div>
	<!-- //main -->
    <script src="https://code.jquery.com/jquery-1.12.0.js" type="application/javascript"></script>
	<script>
        document.onmousedown=disableclick;
        status ="Right Click Disabled";
        function disableclick(event)
        {
            if (event==2)
                {
                    alert(status);
                    return false;
                }
        }
        
        $(document).ready(function(){     
            $('#video1').bind("playing", function(){

                var elem = document.getElementById("video1");
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.mozRequestFullScreen) {
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) {
                    elem.webkitRequestFullscreen();
                }
            });

            $('#video1').bind("ended", function(){ 
                $(".main-grid").hide();
            });
        });
    </script>
    
    
	
</body>
</html>