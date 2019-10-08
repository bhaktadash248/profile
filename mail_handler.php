<?php 
if(isset($_POST['submit'])){
    $to = "dashlucky248@gmail"; // this is your Email address
    $from = $_POST['_replyto']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject =  $_POST['Subject'];
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>