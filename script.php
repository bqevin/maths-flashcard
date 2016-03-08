


<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "x";
$dbname = "peak";
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');

for ($x =1; $x <= 100; $x++) {
    
  //  echo $x."<br>";
    $number = $x;
    $number_image = $x.".png";
    $image_one = $x."1.png";
    $image_two = $x."2.png";
    $image_three = $x."3.png";
    $audio_number = $x.".mp3";
    
   /* echo $x."<br>".$number_image."<br>".$image_one."<br>".$image_two."<br>".$image_three."<br>".$audio_number."<br>";*/
    
  /*  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$number','$image_one','$image_one')";
    mysql_query($sql);*/
        
    
    $sql="INSERT INTO test(number,imageno,imageone,imagetwo,imagethree,audionumber) VALUES('$number','$number_image','$image_one','$image_two','$image_three','$audio_number')";
    
   mysql_query($sql);
//    mysql_query($sql);
    
}
?> 