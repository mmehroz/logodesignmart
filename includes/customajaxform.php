<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';


/*Home page Order form email */

if($_POST['custm_name'] == "" && $_POST['custm_email'] == "" && $_POST['custm_phone'] == "" && $_POST['custm_packege'] == "" && $_POST['custm_price'] == "" && $_POST['custm_business'] == "" && $_POST['custm_ideas'] == "" && $_POST['custm_brief'] == "" && $_POST['custm_target'] == "")
  { 
    // header("Location: https://www.logozel.mrm-soft.com/");
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
    // $mail->AddCC('digizelusa@gmail.com', 'Logozel USA');
    // $mail->AddCC('info@logodesignmart.com', 'Info Logo Design Mart');
    $sender_name = $_POST['custm_name'];
    $sender_email = $_POST['custm_email'];
    $sender_phone = $_POST['custm_phone'];
    $sender_price = $_POST['custm_price'];
    $sender_packege = $_POST['custm_packege'];
    $business_name = $_POST['custm_business'];
    $brief = $_POST['custm_brief'];
    $reference_ideas = $_POST['custm_ideas'];
    $target = $_POST['custm_target'];
    $payment_method =  $_POST['pyament_method'];

 
    $formcontent .= "Order ID: ".uniqid();
    $formcontent .= "<br />";
    $formcontent .= "Name: ".$sender_name;
    $formcontent .= "<br />";
    $formcontent .= "Email: ".$_POST['custm_email'];
    $formcontent .= "<br />";
    $formcontent .= "Phone: ".$sender_phone;
    $formcontent .= "<br />";
    $formcontent .= "Price: ".$sender_price;
    $formcontent .= "<br />";
    $formcontent .= "Package: ".$sender_packege;
    $formcontent .= "<br />";
    if ($business_name) {
           $formcontent .= "Business Name: ".$business_name;
    $formcontent .= "<br />";
    }
   
     if ($brief) {
    $formcontent .= "Brief: ".$brief;
    $formcontent .= "<br />";
}
if ($reference_ideas) {
     $formcontent .= "Reference Ideas: ".$reference_ideas;
    $formcontent .= "<br />";
}
if ($target) {
       $formcontent .= "Targeted Audience: ".$target;
    $formcontent .= "<br />";
}
      $formcontent .= "Payment Method: ".$payment_method;
    $formcontent .= "<br /><br />";
     
    $formcontent .= "This is a confirmation receipt of your Order. You will be contacted soon by our Accounts Management Team to proceed further.";
    // $formcontent .= "File Attached: ".$file_attached;
    // $formcontent .= "<br />";
     // $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']); 
    $mail->isHTML(true);      
                            // Set email format to HTML
    $mail->Subject = 'Custom Order Completed';
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

    $mail->setFrom('digizelusa@gmail.com', 'Logozel');
    $mail->addAddress($_POST['custm_email']);     // Add a recipient
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //Content

    $name = $_REQUEST['custm_name'];
    $email = $_REQUEST['custm_email'];
    $number = $_REQUEST['custm_phone'];
    $user_price = $_REQUEST['custm_price'];
    $user_packege = $_REQUEST['custm_packege'];
    $business_name = $_REQUEST['custm_business'];
    $brief = $_REQUEST['custm_brief'];
    $reference_ideas = $_REQUEST['custm_ideas'];
    $file_attached = $_REQUEST['custm_target'];
  // $data=array($name,$email,$number,$pakagesname,$pricings);


    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thank you for your Order!';
    $mail->Body    = "$formcontent";
    $mail->send();
    // echo 'Message has been sent';
    die();

} catch (Exception $e) {

}



  }





?>