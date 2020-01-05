<?php

$to = "itsamirzia@gmail.com";
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];//"My subject";
$txt = $_POST['message'];
$msg = "New email received from ".$firstName." ".$lastName." with email id ".$email." Below is his query.\r\n".$txt;//"Hello world!";
$headers = "From: webmaster@ibrainware.com" . "\r\n" .
"CC: iftekhar.naiyar@gmail.com";

mail($to,$subject,$msg,$headers);
echo '<script type="text/javascript">
           window.location = "http://localhost/ibrainware/contact.php?message=yes"
      </script>';
?>