
 <?php

$name = @trim(stripslashes($_POST['name'])); 
$email = @trim(stripslashes($_POST['email'])); 
$phone = @trim(stripslashes($_POST['phone'])); 
$subject = @trim(stripslashes($_POST['subject'])); 
$message = @trim(stripslashes($_POST['message'])); 

$email_from = $email;
$email_to = 'enquiries@eternogroups.com';//replace with your email

$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n"  . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

mail($email_to,$subject,$body);

?>