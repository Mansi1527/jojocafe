<?php    
$to = "mansiy1527@icloud.com";
$subject = "form";
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$mes = $_POST["message"];
$message = "name :" .$name . "\n" . "email :" .$email . "\n" ."number :" .$number ."\n" ."message :" .$mes;
 if(mail($to,$subject, $message)){
    echo 'your msg sent';
 }
 else{
    echo 'unable to send';
 }


?>
