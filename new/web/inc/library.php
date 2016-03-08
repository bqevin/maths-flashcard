
<?php

 @   include('inc/session.php');


?>



<?php

if (isset($_POST['signup'])) {

    $link = mysqli_connect("localhost","root","password","peak");

    if ($link === false) {
        die ("Unable to get the database");

    }

    $f_name = mysqli_real_escape_string($link, $_POST['f_name']);

    $l_name =mysqli_real_escape_string($link, $_POST['l_name']);

    $email =mysqli_real_escape_string($link, $_POST['email']);

    $phone =mysqli_real_escape_string($link, $_POST['phone']);

    $age =mysqli_real_escape_string($link, $_POST['age']);

    $gender =mysqli_real_escape_string($link, $_POST['gender']);

    $pass =mysqli_real_escape_string($link, $_POST['password']);

    $date = date('Y-m-d H:i:s');


    $query = mysql_query("SELECT email FROM users WHERE email=$email", $link);

    if (mysql_num_rows($query) != 0)
    {
        echo "Email already exists";
    }

    else
    {

    $pass_crypted = md5($pass);


    $sql = "INSERT INTO users (
f_name,l_name,email,phone,age,gender,password,created_at,updated_at,username) VALUES ('$f_name','$l_name','$email','$phone','$age', '$gender','$pass_crypted','$date','','$email')";


    $query = mysqli_query($link , $sql);

    if ($query)
    {

        print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
    }

    else{
        print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
    }

}
}
?>