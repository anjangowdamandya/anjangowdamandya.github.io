
 <?php

$name = @trim(stripslashes($_POST['name'])); 
$email = @trim(stripslashes($_POST['email'])); 
$phone = @trim(stripslashes($_POST['phone'])); 
$subject = "User interested"; 


$email_from = $email;
$email_to = 'sales@eternogroups.com';//replace with your email

$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n"  .

mail($email_to,$subject,$body);

?>