<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file =$_FILES['audio']['name'];
    $file_loc = $_FILES['audio']['tmp_name'];
	$file_size = $_FILES['audio']['size'];
	$file_type = $_FILES['audio']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
        
        
        for ($x = 1; $x <= 100; $x++) {

            //  echo $x."<br>";
            $number = $x;
            $number_image = $x.".png";
            $image_one = $x."1.png";
            $image_two = $x."2.png";
            $image_three = $x."3.png";
            $audio_number = $x.".mp3";

            /* echo $x."<br>".$number_image."<br>".$image_one."<br>".$image_two."<br>".$image_three."<br>".$audio_number."<br>";*/


            $sql="INSERT INTO numbers(number,imageno,imageno,imagetwo,imagethree,audionumber) VALUES('$number','$number_image','$image_one','$image_two','$image_three','$audio_number')";

            mysql_query( $sql);
            //    mysql_query($sql);

        }
		$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
		mysql_query($sql);
		?>
<!--
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
-->
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>