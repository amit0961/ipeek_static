<?php
//get data from form  

$email= $_POST['email'];
$to = "support@lpeek.com";
$subject = "Mail From Newsletter";
$txt =" Email = " . $email . "\r\n ";
$headers = "From: ".$email . "\r\n";
"CC: vas.operation@arena.com.bd";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:newsletter.html");
?>