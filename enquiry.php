<?php
/* sets email functions */
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Enquiry form @ IPCS Global Landing page Machine test";
$to = "alanshaju26@gmail.com";

if(mail($to, $subject, $message)){
    echo "mail send";
}
else{
    echo "error";
}
?>