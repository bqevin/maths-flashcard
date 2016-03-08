<?php
$subject  = ' Feedback ';
$headers  = "From: Site \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= '<img src="//patric.xyz/images/logo/logo.png" alt="Website Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>Web Admin</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>admin</td></tr>";
$message .= "<tr><td><strong>Enquiry:</strong> </td><td>Did you register at a news site called samrack or http://patric.xyz ? Please let us know</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>checks</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td><a href='http://patric.xyz'> Link to here</a></td></tr>";
$message .= "<tr><td><strong>logo:</strong> </td><td><a href='http://patric.xyz'><img src='//patric.xyz/images/logo/logo.png'/> alt='Website Request'/></a></td></tr>";
$message .= "</table>";
$message .= "</body></html>";

if(mail('dev@patric.xyz',$subject,$message, $headers)) {
	echo 'success';
} else {
	echo 'error';
}
?>