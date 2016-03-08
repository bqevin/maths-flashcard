<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
   
        <lable>Number</lable>
        <br>
        <input type="text" name="number" ".gif,.jpg,.jpeg,.png" />
        <br><br>
        <lable>Image Number</lable>
        <br>
        <input type="file" name="image_no" ".gif,.jpg,.jpeg,.png" />
        <br><br>
    <lable>Image 1</lable>
        <br>
        <input type="file" name="imageone" ".gif,.jpg,.jpeg,.png" />
        <br><br>
    <lable>Image 2</lable>
        <br>
        <input type="file" name="imagetwo" ".gif,.jpg,.jpeg,.png"/>
        <br><br>
    <lable>image 3</lable>
        <br>
        <input type="file" name="Imagethree" accept=".gif,.jpg,.jpeg,.png"/>
        <br><br>
	<lable>Audio</lable>
        <br>
        <input type="file" name="audio" accept=".mp3" />
	<br><br>
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <?php
	}
	?>
</div>
<div id="footer">
<label>By <a href="http://cleartuts.blogspot.com">cleartuts.blogspot.com</a></label>
</div>
</body>
</html>