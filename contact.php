!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOJO Cafe</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
//variable setting
if(!empty($_POST["send"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $message=$_POST["message"];
    $toemail="mansiy1527@gmail.com";

    $mailheaders = "Name :" . $name .
"\r\n Email :" . $email .
"\r\n Number :" . $number .
"\r\n message :" . $message . "\r\n";
if(mail($toemail, $name,$mailheaders)){
  $message ="your message is received";
}



}

?>
<section class="book" id="book">

<h1 class="heading"> booking <span>reserve a table</span> </h1>

<form action="contact.php">
    <label for="name"></label>
    <input type="text" placeholder="your name" class="box" name="name">
    <label for="email"></label>
    <input type="email" placeholder="your email" class="box" name="email">
    <label for="number"></label>
    <input type="number" placeholder="your number" class="box" name="number">
    <label for="message"></label>
    <textarea name="" placeholder="your message" class="box" id="" cols="30" rows="10" name="message"></textarea>

    <input type="submit" value="Reserve" class="btn" name="send">
    <?php 
    if(!empty($message)){?>
    <div class="success">
<strong><?php echo &message; ?></strong>

    </div>

    <?php}
    ?>

</form>

</section>



</body>