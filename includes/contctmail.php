<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

require 'PHPMailer/src/Exception.php';





/*Contact page form email */



if(isset($_POST['submit']))



{



 if($_POST['con-name'] == "" && $_POST['con-email'] == "" && $_POST['con-number'] == "" && $_POST['con-country'] == ""&& $_POST['con-message'] == "")

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



    $mail->setFrom('digizelusa@gmail.com', 'logodesignmart');

    $mail->addAddress('digizelusa@gmail.com', 'logodesignmart');     // Add a recipient

    $name = $_POST['con-name'];

    $email = $_POST['con-email'];

    $number = $_POST['con-number'];

    $interested = $_POST['con-interested'];

    $budget = $_POST['con-budget'];

    $country = $_POST['con-country'];

    $message = $_POST['con-message'];



    $message = $_REQUEST['con-message'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['con-email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Interested In: ".$interested;

    $formcontent .= "<br />";

    $formcontent .= "Budget: ".$budget;

    $formcontent .= "<br />";

    $formcontent .= "Country: ".$country;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$message;

    $formcontent .= "<br />";

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Contact Form';

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



    $mail->setFrom('digizelusa@gmail.com', 'Logo Design Mart USA');

    $mail->addAddress($_POST['con-email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['con-name'];

  $email = $_REQUEST['con-email'];

  $number = $_REQUEST['con-number'];

  $interested = $_REQUEST['con-interested'];

  $budget = $_REQUEST['con-budget'];

  $country = $_REQUEST['con-country'];

  $message = $_REQUEST['con-message'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Contact Form';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}







  }







}





/*Home page footer form email */

if(isset($_POST['f-submitt']))



{ 



 if($_POST['f-name'] == "" && $_POST['f-email'] == "" && $_POST['f-number'] == "" && $_POST['f-link'] == ""&& $_POST['f-message'] == "")

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

    $name = $_POST['f-name'];

    $email = $_POST['f-email'];

    $number = $_POST['f-number'];

    $link = $_POST['f-link'];

    $message = $_POST['f-message'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['f-email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Link: ".$link;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$message;

    $formcontent .= "<br />";

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Footer Contact';

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

    $mail->addAddress($_POST['f-email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['f-name'];

  $email = $_REQUEST['f-email'];

  $number = $_REQUEST['f-number'];

  $link = $_REQUEST['f-link'];

  $message = $_REQUEST['f-message'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}







  }







}







/*Home page Request form email */

if(isset($_POST['schedule']))



{ 



 if($_POST['name2'] == "" && $_POST['email2'] == "" && $_POST['number2'] == "" && $_POST['message2'] == "")

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

    $name = $_POST['name2'];

    $email = $_POST['email2'];

    $number = $_POST['number2'];

    $message = $_POST['message2'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['email2'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$message;

    $formcontent .= "<br />";

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Request Form Contact';

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

    $mail->addAddress($_POST['email2']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['name2'];

  $email = $_REQUEST['email2'];

  $number = $_REQUEST['number2'];

  $message = $_REQUEST['message2'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}







  }







}















/*Custom Order form email */

if(isset($_GET['ordercustm']))



{ 



 if($_GET['cpack-name'] == "" && $_GET['cpack-email'] == "" && $_GET['cpack-phone'] == "" && $_GET['cpack-cost'] == "" && $_GET['cpack-dataaa'] == "")

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

    $name = $_GET['cpack-name'];

    $email = $_GET['cpack-email'];

    $phone = $_GET['cpack-phone'];

    $cost = $_GET['cpack-cost'];

    $dataaa = $_GET['cpack-dataaa'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_GET['cpack-email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$phone;

    $formcontent .= "<br />";

    $formcontent .= "Cost: ".$cost;

    $formcontent .= "<br />";

    $formcontent .= "Data: ".$dataaa;



    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Custom Package';

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

    $mail->addAddress($_POST['email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['name'];

  $email = $_REQUEST['email'];

  $Phone = $_REQUEST['phone'];

  $Country = $_REQUEST['country'];

  $Cost = $_REQUEST['cpack-cost'];

  $Data = $_REQUEST['cpack-dataaa'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Custom Package';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}







  }







}









/*Custom Order form email */

if(isset($_POST['lan-submit']))



{ 



 if($_POST['lan-name'] == "" && $_POST['lan-number'] == "" && $_POST['lan-email'] == "" && $_POST['lan-cate'] == "" && $_POST['lan-message'] == "")

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

    $name = $_POST['lan-name'];

    $email = $_POST['lan-email'];

    $phone = $_POST['lan-number'];

    $Catagories = $_POST['lan-cate'];

    $Message = $_POST['lan-message'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['lan-email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$phone;

    $formcontent .= "<br />";

     $formcontent .= "Catagories: ".$Catagories;

    $formcontent .= "<br />";

    $formcontent .= "Message: ".$Message;





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart Landing page Footer';

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

    $mail->addAddress($_POST['lan-email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['lan-name'];

  $email = $_REQUEST['lan-email'];

  $Phone = $_REQUEST['lan-number'];

  $Catagories = $_REQUEST['lan-cate'];

  $Message = $_REQUEST['lan-message'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);





    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart';

    $mail->Body    = "$formcontent";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}



  }

}





/*Home page Order form email */

if(isset($_GET['order']))



{



 if($_GET['name'] == "" && $_GET['email'] == "" && $_GET['number'] == "" && $_GET['price'] == "" && $_GET['package'] == "")

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

    $name = $_GET['name'];

    $email = $_GET['email'];

    $number = $_GET['number'];

    $package = $_GET['package'];

    $price = $_GET['price'];

    $formcontent .= "Name: ".$name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_GET['email'];

    $formcontent .= "<br />";

    $formcontent .= "Phone: ".$number;

    $formcontent .= "<br />";

    $formcontent .= "Package: ".$package;

    $formcontent .= "<br />";

    $formcontent .= "Price: ".$price;

    $formcontent .= "<br />";

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Order Form 1st Step';

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

    $mail->addAddress($email);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



  $name = $_REQUEST['name'];

  $email = $_REQUEST['email'];

  $Phone = $_REQUEST['number'];

  $package = $_REQUEST['package'];

  $price = $_REQUEST['price'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);


  $msg='<style type="text/css">
      /* FONTS */
      /* CLIENT-SPECIFIC STYLES */
      body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
      table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
      img { -ms-interpolation-mode: bicubic; }
      /* RESET STYLES */
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
      table { border-collapse: collapse !important; }
      body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
      /* iOS BLUE LINKS */
      a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
      }
    .em_preheader a {
    color:#9da0b1;
    text-decoration:none;
    }
    .em_header a {
    color:#76798a;
    text-decoration:none;
    }
    .em_blk a {
    color:#333333;
    text-decoration:none;
    }
    .em_blk2 a {
    color:#000000;
    text-decoration:none;
    }
    .em_gray a {
    color:#98999b;
    text-decoration:none;
    }
    .em_gray2 a {
    color:#9da0b1;
    text-decoration:none;
    }
    .em_red a {
    color:#dd2b0d;
    text-decoration:none;
    }
    .em_wht a {
    color:#ffffff;
    text-decoration:none;
    }
      @media screen and (min-width: 601px) {
      .container {
      width: 600px !important;
      }
      }
      /* MOBILE STYLES */
      @media screen and (max-width:600px){
      .em_wrapper {
      width:100% !important;
      }
      .em_pad {
      padding:40px 10px 40px 10px !important;
      }
      .em_p1 {
      padding-bottom:15px !important;
      }
      .em_font1 {
      font-size:40px !important;
      line-height:43px !important;
      }
      .em_brk {
      display:block !important;
      }
      .em_hide {
      display:none !important;
      }
      .em_center {
      text-align:center !important;
      }
      }
      /* ANDROID CENTER FIX */
      div[style*="margin: 14px 0;"] { margin: 0 !important; }
    </style>
  </head>
  <body style="background-color: #ffffff; margin: 0 !important; padding: 0 !important;">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
      &nbsp;
    </div>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
      <!-- LOGO -->
      <tr>
        <td align="center" valign="top">
          <!--[if (gte mso 9)|(IE)]>
          <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
              <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                  <tr>
                    <td align="center" valign="top">
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                          <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                              <tr>
                                <td align="center" valign="top" style="font-size:0; padding-top:20px;">
                                  <!--[if (gte mso 9)|(IE)]>
                                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                    <tr>
                                      <td align="left" valign="top" width="440">
                                        <![endif]-->
                                        <div style="display:inline-block; float:left; max-width:370px; vertical-align:top; width:100%;">
                                          <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:370px;">
                                            <tr>
                                              <td align="left" valign="top">
                                                <table width="196" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper">
                                                  <tr>
                                                    <td align="center" valign="top" style="padding-bottom:20px;"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/logo.png" width="170" height="" alt="logodesignmart" border="0" style="display:block;  font-size:18px; line-height:22px; color:#76798a; font-weight:bold;"/></a></td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                        <!--[if (gte mso 9)|(IE)]>
                                      </td>
                                      <td align="left" valign="top" width="160">
                                        <![endif]-->
                                        <div style="display:inline-block; float:right; max-width:180px; vertical-align:top; width:100%; text-align:left;">
                                          <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;">
                                            <tr>
                                              <td align="left" valign="top">
                                                <table width="160" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper">
                                                  <tr>
                                                    <td align="center" valign="top" style="padding-bottom:20px;">
                                                      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                          <td align="right" class="em_center" style=" font-size:16px; line-height:20px; color:#76798a; font-weight:300; padding-bottom:5px;"><span class="em_header">CONTACT US</span></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right" class="em_center"  style=" font-size:20px; line-height:18px; color:#b71d68; font-weight:bold;"><span class="em_header"><a href="tel:+18553444935" style="text-decoration:none; color:#b71d68;">855-344-4935</a></span></td>
                                                        </tr>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                        <!--[if (gte mso 9)|(IE)]>
                                      </td>
                                    </tr>
                                  </table>
                                  <![endif]-->
                                </td>
                              </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                          </td>
                        </tr>
                      </table>
                      <![endif]-->
                    </td>
                  </tr>
                  <tr>
                    <td align="center" valign="top" bgcolor="#fafafa">
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="580">
                        <tr>
                          <td align="center" valign="top" width="580">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:580px;">
                              <tr>
                                <td align="center" valign="top" style="padding:40px 10px;" class="em_pad">
                                  <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                      <td align="center" class="em_font1" style="padding-bottom:15px;  font-size:60px; line-height:60px; color:#b71d68;
                                        font-weight:bold;"><span class="em_blk">Welcome Aboard</span></td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_p1" style="padding-bottom:20px; padding-top:20px;  font-size:22px; line-height:30px; color:#98999b; font-weight:300;"><span class="em_gray">We are so excited to welcome you to the Logo Design Mart family! Every single one of us is here to help you reach new heights with your brand. You will also receive a call or an email by our representative who will be actively catering all your design needs. Drop us a line anytime at
                                      <a href="mailto:info@logodesignmart.com" style="color:#b71d68;">info@logodesignmart.com</span></td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_p1" style="padding-bottom:20px; padding-top:20px;  font-size:22px; line-height:30px; color:#98999b; font-weight:300;"><span class="em_gray">For any query or concern, feel free to call us.</span></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="em_blk2" valign="top" style="padding-bottom:0px;  font-size:50px; line-height:60px; color:#c91e71;
                                        font-weight:bold; text-decoration:none;">
                                        <a style=" color:#c91e71; text-decoration:none;" href="tel:+18553444935">855-344-4935</a>
                                        </td>
                                      </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                          </td>
                        </tr>
                      </table>
                      <![endif]-->

                    </td>
                  </tr>
                  
                  
                  
                  <tr>
                    <td align="center" valign="top" bgcolor="#333333">
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                          <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                              <tr>
                                <td align="center" valign="top" style="padding:30px 15px;">
                                  <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                      <td align="center" valign="top" style="padding-bottom:15px;">
                                        <table align="center" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/fb.png" width="31" height="32" alt="Facebook" border="0" style="display:block;  font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/tw.png" width="31" height="32" alt="Twitter" border="0" style="display:block;  font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/yt.png" width="32" height="32" alt="Pinterest" border="0" style="display:block;  font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/gp.png" width="31" height="32" alt="Instagram" border="0" style="display:block;  font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_wht" style=" font-size:13px; line-height:22px; color:#ffffff;">Copyright © 2021 Logo Design Mart<br><a style=" color:#ffffff;" href="mailto:info@logodesignmart.com">info@logodesignmart.com</a><br>
                                        All Rights Reserved &nbsp; | &nbsp; <a href="https://www.logodesignmart.com/" target="_blank" style="text-decoration:underline; color:#ffffff;">View Online</a><span class="em_brk"></span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                          </td>
                        </tr>
                      </table>
                      <![endif]-->
                    </td>
                  </tr>
                  <tr>
                    <td align="center" valign="top">
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                          <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                              <tr>
                                <td align="center" valign="top" style="padding:15px;" class="em_pad">
                                  <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                      <td align="center" class="em_gray2" style=" font-size:12px; line-height:18px; color:#9da0b1;"><strong>Customised Solutions To Cater Your Business Needs Specifically:</strong> With a pinch of ability and pint of colours, we have a tendency to produce appealing styles that enrapture the audience. We have the foremost intimate with graphic designers and professional developers in our team that will assure you to produce the best and unique work as far as customers need are concerned.</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                          </td>
                        </tr>
                      </table>
                      <![endif]-->
                    </td>
                  </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
              </td>
            </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>';


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Logo Design Mart';

    $mail->Body    = "$msg";

    $mail->send();

    // echo 'Message has been sent';



} catch (Exception $e) {



}



  }

}







/*Order page form email */

// if(isset($_POST['order-mail']))



// {



 



// }



?>