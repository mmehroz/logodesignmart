<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Load composer's autoloader
// require 'PHPMailer/src/PHPMailer.php';
if (isset($_POST['order_submit'])) {

	 if( $_POST['name'] == "" && $_POST['email'] == "" && $_POST['number'] == "" && $_POST['country'] == "")
 { 

   echo "<script>alert('Something Wrong');</script>";
    // header('Location: /checkout.php');
    //  exit;

}
else{


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'faheemrecall@gmail.com';                 // SMTP username
    $mail->Password = 'fah@recall';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('faheemrecall@gmail.com', 'Faheem Bhuj');
    $mail->addAddress('infoconceptrecall@gmail.com', 'Joe User');     // Add a recipient
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
}


}

}

?>