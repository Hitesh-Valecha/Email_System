<?php
session_start();
//We will send the email only when the user filled the "Email:" input box.
//Otherwise we will display the form for the user to fill out!
if (isset($_REQUEST['email']))  {

    $currentDateTime = date('Y-m-d H:i:s');
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email']; //The user email field
    $subject = $_REQUEST['subject']; //The subject field
    $comment = $_REQUEST['comment']; //The comment field

#error_reporting(E_ALL);
    require("../PHPMailer_5.2.4/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->SMTPDebug  = 3;
    $mail->From = "your_email_address";//abc@gmail.com
    $mail->FromName = $name;
    $mail->Host = "smtp.gmail.com"; // specify smtp server
    $mail->SMTPSecure= "ssl"; // Used instead of TLS(587) since port is 465
    $mail->Port = 465; // Used instead of 587 when only POP mail is selected
    $mail->SMTPAuth = true;
    $mail->Username = "your_email_address"; // SMTP username
    $mail->Password = "your_email_address's password"; // SMTP password


    $mail->AddAddress("your_email_address", "From"); //replace myname and mypassword to yours
    $mail->AddReplyTo("your_email_address", "your_name");
    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML
    $mail->Subject =  "$subject    Query mail by + $name  on $currentDateTime";
    $mail->Body = "$comment  \n\nEmail id: $email";

    if($mail->Send()) {echo "Send mail successfully";}
    else {echo "Send mail fail";}

    $mail->ClearAddresses();

    $mail->AddAddress($email, "From"); //replace myname and mypassword to yours
    $mail->AddReplyTo("your_email_address", "your_name");
    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML
    $mail->Subject = "Thank you For Contacting Us";
    $mail->Body = "Your Query is in Process. \n We will contact you soon.\n\n Thank you";

    if($mail->Send()) {echo "Send mail successfully";}
    else {echo "Send mail fail";}

    exit;
}
?>