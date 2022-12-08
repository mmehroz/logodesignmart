<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

require 'PHPMailer/src/Exception.php';


/*Home page Request form email */

if(isset($_POST['submit-logo']))

{ 

 if($_POST['first_name'] == "" && $_POST['your_email'] == "" && $_POST['country'] == "" && $_POST['state'] == "" && $_POST['phone'] == "" && $_POST['TimeToCall'] == ""  && $_POST['comments'] == "")

  { 

  header("Location: https://www.logodesignmart.com");
     exit;
}

else{  
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings

     // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP



      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

    $mail->SMTPAuth = true;                               // Enable SMTP authentication

    $mail->Username = 'digizelusa@gmail.com';                 // SMTP username

    $mail->Password = 'digizel-9315';                           // SMTP password

    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('digizelusa@gmail.com', 'Logo Design Mart');

    $mail->addAddress('digizelusa@gmail.com', 'Logo Design Mart');     // Add a recipient

    $name = $_POST['first_name'];
    $email = $_POST['your_email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $number = $_POST['phone'];
    $TimeToCall = $_POST['TimeToCall'];
    $message = $_POST['comments'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['your_email'];

    $formcontent .= "<br />";

     $formcontent .= "Country: ".$country;

    $formcontent .= "<br />";

    $formcontent .= "State: ".$state;

    $formcontent .= "<br />"; 

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Time To Call: ".$TimeToCall;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$message;

    $formcontent .= "<br />";


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Logo Request Form';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';

} catch (Exception $e) {



}

    // $formcontent .= "comments: ".$message;

    //$formcontent=" From: $name \n Phone: $phone \n country: $country \n comments: $comments";



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {

    //Server settings

                               // Enable verbose debug output



    $mail->isSMTP();                                      // Set mailer to use SMTP

       $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

    $mail->SMTPAuth = true;                               // Enable SMTP authentication

    $mail->Username = 'digizelusa@gmail.com';                 // SMTP username

    $mail->Password = 'digizel-9315';                           // SMTP password

    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients



    $mail->setFrom('digizelusa@gmail.com', 'Logo Design Mart');

    $mail->addAddress($_POST['your_email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['name'];

  $email = $_REQUEST['your_email'];

  $number = $_REQUEST['phone'];

  $message = $_REQUEST['comments'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Logo Request Form';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}

  }



}


/*Home page Request form email */

if(isset($_POST['submit-con']))

{ 

 if($_POST['con-name'] == "" && $_POST['con-email'] == "" && $_POST['con-phone'] == ""  && $_POST['con-comments'] == "")

  { 

  header("Location: https://www.logodesignmart.com");
     exit;
}

else{  
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings

     // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP



      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

    $mail->SMTPAuth = true;                               // Enable SMTP authentication

    $mail->Username = 'digizelusa@gmail.com';                 // SMTP username

    $mail->Password = 'digizel-9315';                           // SMTP password

    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('digizelusa@gmail.com', 'Logo Design Mart');

    $mail->addAddress('digizelusa@gmail.com', 'Logo Design Mart');     // Add a recipient

    $name = $_POST['con-name'];
    $email = $_POST['con-email'];
    $number = $_POST['con-phone'];
    $message = $_POST['con-comments'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['con-email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$message;

    $formcontent .= "<br />";


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Logo Submit Form';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';

} catch (Exception $e) {



}

    // $formcontent .= "comments: ".$message;

    //$formcontent=" From: $name \n Phone: $phone \n country: $country \n comments: $comments";



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {

    //Server settings

                               // Enable verbose debug output



    $mail->isSMTP();                                      // Set mailer to use SMTP

       $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

    $mail->SMTPAuth = true;                               // Enable SMTP authentication

    $mail->Username = 'digizelusa@gmail.com';                 // SMTP username

    $mail->Password = 'digizel-9315';                           // SMTP password

    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients



    $mail->setFrom('digizelusa@gmail.com', 'Logo Design Mart');

    $mail->addAddress($_POST['con-email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['con-name'];

  $email = $_REQUEST['con-email'];

  $number = $_REQUEST['con-phone'];

  $message = $_REQUEST['con-comments'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Logo Submit Form';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}

  }



}



?>