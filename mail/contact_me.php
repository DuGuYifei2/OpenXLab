<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$type = strip_tags(htmlspecialchars($_POST['type']));   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'umarsubhanmalhi@outlook.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from AiToB.ai contact form.\n\n"."Here are the details:\n\nType: $type\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: anyhelper@anyhelper.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
if(mail($to,$email_subject,$email_body,$headers)){
return true;         
}
else {
    return false;
}
?>