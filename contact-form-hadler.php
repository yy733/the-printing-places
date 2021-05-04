<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$massage = $_POST['message'];

$email_form = 'yit123chak@gmail.com';

$email_suject = "new Form Sfcghj"

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Uesr Message: $massage.\n";

               $to "yit123chak@gmail.com";

               $headers = "Form: $email_form \r\n";

               $headers = "Reoly-To: $visitor_email \r\n";

              mail($to,$email_suject,$email_body,$headers)  
              header("Location: index.html")

?>