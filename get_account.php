<?php
//get data from form  
$name = $_POST['account_name'];
$phone= $_POST['account_phone'];
$email= $_POST['account_email'];
$password= $_POST['account_password'];
$message= $_POST['account_message'];
$to = "support@lpeek.com";
$subject = "::Request:: Lpeek Account Creation";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $phone. "\r\n Message =" . $subject. "\r\n Message =" . $message;
$txt ="Account Name = ". $name . "\r\n  Account Phone = " . $phone . "\r\n Account Email =" . $email. "\r\n Account Password =" . $password. "\r\n Get Account Message =" . $message;
$headers = "From: ".$email . "\r\n" .
"CC: vas.operation@arena.net.bd, vas.manager@arena.com.bd, amit.vas@arenaphonebd.net";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>