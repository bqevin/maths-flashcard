<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "peak";
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');

$sql1="SELECT * FROM slides Where slide_no = '183-1' ";
$result_set1=mysql_query($sql1);
$secs = 0.6; //speed
?>
<!DOCTYPE html>
<html>
<head>
<title>Gradient Accordion Menu Widget Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gradient Accordion Menu Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet" type="text/css">
<script src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="main">
<section id="kontainer" class="ac-container">

</section>
<div id="numbers" class="carousel slide">
<div class="carousel-inner" role="listbox">
<?php
$sql1="SELECT * FROM slides Where slide_no = '183-1' ";
$result_set1=mysql_query($sql1);
$count = 0;
while($row1=mysql_fetch_array($result_set1)) {
    $slide_no       = $row1['slide_no'] ;;
    $slide_content  = $row1['slide_content'];
    $slide_formular = $row1['slide_formular'] ;

    $y= explode(",",$slide_content);
    $n = 1;
    $id = 1;
 
    foreach($y as $v){
        $x = $v;
        $sql="SELECT * FROM test Where number = '$x' ";
        $result_set=mysql_query($sql);
        while($row=mysql_fetch_array($result_set)) {
            $number = $row['number'] ;;
            $number_image = $row['imageno'];
            $image_one = $row['imageone'] ;
            $image_two = $row['imagetwo'] ;
            $image_three = $row['imagethree'] ;
            $audio_number = $row['audionumber'] ;
            if($count == 0){
                $active = 'active';
                $autoplay = 'autoplay';
            } else {
                $active = '';
                $autoplay='';
            }
                echo '<div id ="'.$count.'" class="item '.$active.' count '.$count.'"><h1 class="img"><img src="uploads/'.$number_image.'" class="img-responsive"></h1>';
                echo "<audio id='a".$count."'>"."<source src='uploads/".$audio_number."' type='audio/mpeg'> </audio> </div>";
                ?>
                <script type="text/javascript">
                setInterval(function(){
                    var active = jQuery('.active').attr('id');
                    var myAudioTag = document.getElementById('a'+active);
                    myAudioTag.play();
                },800);
                </script>
                <?php    
              $count++;  
              break;
        }
    }
}
?>
</div>
</div>
</div>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(function(){
            jQuery("#numbers").carousel({
                'interval':900 //0.9 seconds spee control
            });
            jQuery("#numbers").carousel("cycle");
    });
</script>
<style type="text/css">
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-inner > .item {
        -webkit-transition: -webkit-transform .<?php echo $secs ?>s opacity;
             -o-transition:      -o-transform .<?php echo $secs ?>s opacity;
                transition:         transform .<?php echo $secs ?>s opacity;

        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-perspective: 1000;
                perspective: 1000;
    }
    .carousel-inner > .item.next,
    .carousel-inner > .item.active.right {
        left: 0;
        -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
    }
    .carousel-inner > .item.prev,
    .carousel-inner > .item.active.left {
        left: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
    }
    .carousel-inner > .item.next.left,
    .carousel-inner > .item.prev.right,
    .carousel-inner > .item.active {
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
    }
 }  
.carousel-inner > .item {
    position: relative;
    -webkit-transition: .<?php echo $secs ?>s opacity;
    -o-transition: .<?php echo $secs ?>s opacity;
    transition: .<?php echo $secs ?>s opacity;
} 
</style>
</body>
</html>