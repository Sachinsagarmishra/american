<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$to = "sachinsagarmishra@gmail.com";
$subject = "Mail From americandebtrefile.info";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n phone =" . $number;

$headers = "From: noreply@americandebtrelif.info" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>