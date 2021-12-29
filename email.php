<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$to = "support@lpeek.com";
$subject = "Mail From Contact Us Form";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $phone. "\r\n Message =" . $subject. "\r\n Message =" . $message;
$headers = "From: ".$email . "\r\n" .
"CC: vas.manager@arena.com.bd";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>