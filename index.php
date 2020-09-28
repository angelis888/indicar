<?php

// Check for empty fields
if(empty($_POST['nombre'])  		||
   empty($_POST['telefono']) 		||
   empty($_POST['email']) 		||
   empty($_POST['mensaje'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];	
	
// Create the email and send the message
$to = 'informacion@indicarpublicidad.com'; // Add your email address inbetween the '' replacing informacion@indicarpublicidad.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $nombre";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $nombre\n\nEmail: $telefono\n\nPhone: $email\n\nMessage:\n$mensaje";
$headers = "From: informacion@indicarpublicidad.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>