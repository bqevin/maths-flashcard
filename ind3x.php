<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "peak";
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');

$sql1="SELECT * FROM slides Where slide_no = '183-1' ";
$result_set1=mysql_query($sql1);


while($row1=mysql_fetch_array($result_set1))
{
    $slide_no = $row1['slide_no'] ;;
    $slide_content = $row1['slide_content'];
    $slide_formular = $row1['slide_formular'] ;

    $y= explode(",",$slide_content);
    $n = 1;

    for ($i =0; $i <count($y); $i++) {



        $x = $y[$i]; 

        $sql="SELECT * FROM test Where number = '$x' ";
        $result_set=mysql_query($sql);


        while($row=mysql_fetch_array($result_set))
        {


            $number = $row['number'] ;;
            $number_image = $row['imageno'];
            $image_one = $row['imageone'] ;
            $image_two = $row['imagetwo'] ;
            $image_three = $row['imagethree'] ;
            $audio_number = $row['audionumber'] ;

            
            

        }


    }

    /*foreach($y as $v){

        echo $v."<br>";
    }*/


}




/*$x =rand(1,100);



$sql="SELECT * FROM test Where number = '$x' ";
$result_set=mysql_query($sql);


while($row=mysql_fetch_array($result_set))
{


    $number = $row['number'] ;;
    $number_image = $row['imageno'];
    $image_one = $row['imageone'] ;
    $image_two = $row['imagetwo'] ;
    $image_three = $row['imagethree'] ;
    $audio_number = $row['audionumber'] ;


}*/


?>







<!DOCTYPE html>
<html>
    <head>
        <title>Gradient Accordion Menu Widget Flat Responsive Widget Template :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gradient Accordion Menu Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet" type="text/css">
    </head>
    <body>
        <!-- main -->
        <div class="main">
            <h1><img src="<?php echo "uploads/".$number_image; ?>"</h1>
                <audio autoplay>

                    <source src="<?php echo "uploads/".$audio_number; ?>" type="audio/mpeg">
                </audio> 
                <section class="ac-container">

                </section>
                </div>
            <!--<div class="footer">
<p>&copy 2016 Gradient Accordion Menu Widget . All rights reserved | Template by <a href="http://w3layouts.com">W3layouts.</a></p>
</div>-->
            <!-- //main -->
            </body>
        </html>