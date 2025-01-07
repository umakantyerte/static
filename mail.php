<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "bluebelleventorg@gmail.com";


$subject = " Contact Page";

$message = "
<html>
<head>
<title>Conatct Page</title>
</head>
 
<body>
<p>Contact Page</p>
<table>
<tr><td>Name : </td> <td>" . $name . "</td></tr>
<tr><td>email : </td> <td>" . $email . "</td></tr>

<tr><td>Phone: </td> <td>" . $phone . "</td></tr>
<tr><td>subject: </td> <td>" . $subject . "</td></tr>
<tr><td>Message: </td> <td>" . $message . "</td></tr>

</table>
</body>
</html>
";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to, $subject, $message, $headers);



echo "<script>alert(' THANK YOU FOR CONTACTING BLUE BELL EVENTS & ENTERTENTMENT');location.replace('index.php')</script>";
?>