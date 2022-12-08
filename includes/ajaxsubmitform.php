<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';

require '../PHPMailer/src/SMTP.php';

require '../PHPMailer/src/Exception.php';





/*Home page Order form email */



if($_POST['sender_name'] == "" && $_POST['sender_email'] == "" && $_POST['sender_phone'] == "" && $_POST['sender_packege'] == "" && $_POST['sender_price'] == "" && $_POST['business_name'] == "" && $_POST['brief'] == "" && $_POST['refernce_ideas'] == "" && $_POST['target'] == "")

  { 

    // header("Location: https://www.logodesignmart.com/");

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

    $mail->AddCC('support@digizel.com', 'Support Logo Design Mart');

    $mail->AddCC('info@logodesignmart.com', 'Info Logo Design Mart');

    $sender_name = $_POST['sender_name'];

    $sender_email = $_POST['sender_email'];

    $sender_phone = $_POST['sender_phone'];

    $sender_price = $_POST['sender_price'];

    $sender_packege = $_POST['sender_packege'];

    $business_name = $_POST['business_name'];

    $brief = $_POST['brief'];

    $reference_ideas = $_POST['refernce_ideas'];

    $target = $_POST['target'];

    $payment_method =  $_POST['pyament_method'];
    $ord_id = "Order ID: ".uniqid();


 

    $formcontent .= "Order ID: ".uniqid();

    $formcontent .= "<br />";

    $formcontent .= "Name: ".$sender_name;

    $formcontent .= "<br />";

    $formcontent .= "Email: ".$_POST['sender_email'];

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

    $formcontent .= "<br />";

    $formcontent .= "This is a confirmation receipt of your Order. You will be contacted soon by our Accounts Management Team to proceed further.";

    // $formcontent .= "File Attached: ".$file_attached;

    // $formcontent .= "<br />";

     // $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']); 

    $mail->isHTML(true);      

                            // Set email format to HTML

    $mail->Subject = 'Thank you for your Order!';

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

    $mail->addAddress($_POST['sender_email']);     // Add a recipient

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content



    $name = $_REQUEST['sender_name'];

    $email = $_REQUEST['sender_email'];

    $number = $_REQUEST['sender_phone'];

    $user_price = $_REQUEST['sender_price'];

    $user_packege = $_REQUEST['sender_packege'];

    $business_name = $_REQUEST['business_name'];

    $brief = $_REQUEST['brief'];

    $reference_ideas = $_REQUEST['refernce_ideas'];

    $file_attached = $_REQUEST['file_attached'];

  // $data=array($name,$email,$number,$pakagesname,$pricings);
    $msg = '<style type="text/css">     
    @media screen {
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 300;
      src: local("Lato Light"), local("Lato-Light"), url(https://fonts.gstatic.com/s/lato/v13/dPJ5r9gl3kK6ijoeP1IRsvY6323mHUZFJMgTvxaG2iE.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 300;
      src: local("Lato Light"), local("Lato-Light"), url(https://fonts.gstatic.com/s/lato/v13/EsvMC5un3kjyUhB9ZEPPwg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 400;
      src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v13/UyBMtLsHKBKXelqf4x7VRQ.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 400;
      src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v13/1YwB1sO8YE1Lyjf12WNiUA.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 700;
      src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v13/ObQr5XYcoH0WBoUxiaYK3_Y6323mHUZFJMgTvxaG2iE.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 700;
      src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v13/H2DMvhDLycM56KNuAtbJYA.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 900;
      src: local("Lato Black"), local("Lato-Black"), url(https://fonts.gstatic.com/s/lato/v13/R4a6fty3waPci7C44H8AjvY6323mHUZFJMgTvxaG2iE.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: normal;
      font-weight: 900;
      src: local("Lato Black"), local("Lato-Black"), url(https://fonts.gstatic.com/s/lato/v13/tI4j516nok_GrVf4dhunkg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 300;
      src: local("Lato Light Italic"), local("Lato-LightItalic"), url(https://fonts.gstatic.com/s/lato/v13/XNVd6tsqi9wmKNvnh5HNEBJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 300;
      src: local("Lato Light Italic"), local("Lato-LightItalic"), url(https://fonts.gstatic.com/s/lato/v13/2HG_tEPiQ4Z6795cGfdivFtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 400;
      src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v13/YMOYVM-eg6Qs9YzV9OSqZfesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 400;
      src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v13/PLygLKRVCQnA5fhu3qk5fQ.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 700;
      src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v13/AcvTq8Q0lyKKNxRlL28RnxJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Lato";
      font-style: italic;
      font-weight: 700;
      src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v13/HkF_qI1x_noxlxhrhMQYEFtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTa-j2U0lmluP9RWlSytm3ho.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTZX5f-9o1vgP2EXwfjgl7AY.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTRWV49_lSm1NYrwo-zkhivY.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTaaRobkAwv3vxw3jMhVENGA.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTf8zf_FOSsgRmwsS7Aa9k2w.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTT0LW-43aMEzIO6XUTLjad8.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 300;
      src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/K88pR3goAWT7BTt32Z01mxJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/RjgO7rYTmqiVp7vzi-Q5URJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/LWCjsQkB6EMdfHrEVqA1KRJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/xozscpT2726on7jbcb_pAhJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSq-j2U0lmluP9RWlSytm3ho.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSpX5f-9o1vgP2EXwfjgl7AY.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNShWV49_lSm1NYrwo-zkhivY.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSqaRobkAwv3vxw3jMhVENGA.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSv8zf_FOSsgRmwsS7Aa9k2w.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSj0LW-43aMEzIO6XUTLjad8.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 600;
      src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzK-j2U0lmluP9RWlSytm3ho.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzJX5f-9o1vgP2EXwfjgl7AY.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzBWV49_lSm1NYrwo-zkhivY.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzKaRobkAwv3vxw3jMhVENGA.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzP8zf_FOSsgRmwsS7Aa9k2w.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzD0LW-43aMEzIO6XUTLjad8.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: normal;
      font-weight: 700;
      src: local("Open Sans Bold"), local("OpenSans-Bold"), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhgVThLs8Y7ETJzDCYFCSLE.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxpiMaisvaUVUsYyVzOmndek.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxrBAWGjcah5Ky0jbCgIwDB8.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxv14vlcfyPYlAcQy2UfDRm4.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqfJul7RR1X4poJgi27uS4w.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqvyPXdneeGd26m9EmFSSWg.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 300;
      src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxko2lTMeWA_kmIyWrkNCwPc.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjTOQ_MqJVwkKsUn0wKzc2I.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjUj_cnvWIuuBMVgbX098Mw.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBkbcKLIaa1LC45dFaAfauRA.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBmo_sUJ8uO4YLWRInS22T3Y.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBr6up8jxqWt8HVA3mDhkV_0.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBiYE0-AqJ3nfInTTiDXDjU4.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 400;
      src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBo4P5ICox8Kq3LLUNMylGO4.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmgpAmOCqD37_tyH_8Ri5MM.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxsPNMTLbnS9uQzHQlYieHUU.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgyhumQnPMBCoGYhRaNxyyY.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhUVAXEdVvYDDqrz3aeR0Yc.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxlf4y_3s5bcYyyLIFUSWYUU.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxnywqdtBbUHn3VPgzuFrCy8.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 600;
      src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxl2umOyRU7PgRiv8DXcgJjk.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxp6iIh_FvlUHQwED9Yt5Kbw.woff2) format("woff2");
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxi_vZmeiCMnoWNN9rHBYaTc.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxiFaMxiho_5XQnyRZzQsrZs.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgalQocB-__pDVGhF3uS2Ks.woff2) format("woff2");
      unicode-range: U+0370-03FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmhQUTDJGru-0vvUpABgH8I.woff2) format("woff2");
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxujkDdvhIIFj_YMdgqpnSB0.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Open Sans";
      font-style: italic;
      font-weight: 700;
      src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxolIZu-HDpmDIZMigmsroc4.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      @font-face {
      font-family: "Playfair Display";
      font-style: normal;
      font-weight: 400;
      src: local("Playfair Display"), local("PlayfairDisplay-Regular"), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CUR-13DsDU150T1bKbJZejI.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      @font-face {
      font-family: "Playfair Display";
      font-style: normal;
      font-weight: 400;
      src: local("Playfair Display"), local("PlayfairDisplay-Regular"), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CfoVn-aGdXvQRwgLLg-TkDk.woff2) format("woff2");
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
      }
      @font-face {
      font-family: "Playfair Display";
      font-style: normal;
      font-weight: 400;
      src: local("Playfair Display"), local("PlayfairDisplay-Regular"), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1Cdhy5e3cTyNKTHXrP9DO-Rc.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
      }
      }
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
                                                    <td align="center" valign="top" style="padding-bottom:20px;"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/logo.png" width="170" height="" alt="logodesignmart" border="0" style="display:block; font-size:18px; line-height:22px; color:#76798a; font-weight:bold;"/></a></td>
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
                                                          <td align="right" class="em_center" style="font-size:16px; line-height:20px; color:#76798a; font-weight:300; padding-bottom:5px;"><span class="em_header">CONTACT US</span></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right" class="em_center"  style="font-size:20px; line-height:18px; color:#b71d68; font-weight:bold;"><span class="em_header"><a href="tel:+18553444935" style="text-decoration:none; color:#b71d68;">855-344-4935</a></span></td>
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
                                      <td align="center" class="em_font1" style="padding-bottom:35px; font-size:60px; line-height:60px; color:#b71d68;
                                        font-weight:bold;"><span class="em_blk">Thank you for your order</span></td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_font1" style="padding-bottom:15px; font-size:30px; line-height:30px; color:#98999b;
                                        font-weight:bold;"><span class="em_blk">'.$sender_name.'</span></td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_p1" style="padding-bottom:0px; padding-top:20px;  font-size:22px; line-height:30px; color:#98999b; font-weight:300;">
                                      <span class="em_gray">'.$ord_id.'</span></td>
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
                    <td align="center" valign="top" bgcolor="#fafafa">
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="580">
                        <tr>
                          <td align="center" valign="top" width="580">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="max-width:480px;">
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:20px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Price</strong></span></td>
                                <td align="left" width="55%" class="em_p1" style="padding-bottom:0px; padding-top:20px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">'.$sender_price.'</span></td>
                              </tr>
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Package</strong></span></td>
                                <td align="left" width="55%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">'.$sender_packege.'</span></td>
                              </tr>
                              
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Project Detail</strong></span></td>
                                <td align="left" width="55%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">Business Name: '.$business_name.'</span></td>
                              </tr>
                              
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Brief</strong></span></td>
                                <td align="left" width="55%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">'.$brief.'</span></td>
                              </tr>
                              
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Reference Ideas</strong></span></td>
                                <td align="left" width="55%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">'.$reference_ideas.'</span></td>
                              </tr>
                              
                              <tr>
                                <td align="left" width="40%" class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray"><strong>Targeted Audience</strong></span></td>
                                <td align="left" width="55%"  class="em_p1" style="padding-bottom:0px; padding-top:0px;  font-size:15px; line-height:30px; color:#98999b; 
                                font-weight:300;"><span class="em_gray">'.$target.'</span></td>
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
                                      <td align="center" class="em_p1" style="padding-bottom:20px; padding-top:20px;  font-size:22px; line-height:30px; color:#98999b; font-weight:300;"><span class="em_gray">This is a confirmation receipt of your Order. You will also receive a call or an email by our Accounts Management team who will be actively catering all your design needs.</span></td>
                                    </tr> 
                                    <tr>
                                      <td align="center" class="em_p1" style="padding-bottom:20px; padding-top:20px;  font-size:22px; line-height:30px; color:#98999b; font-weight:300;"><span class="em_gray">For any query or concern, feel free to contact us.</span></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="em_blk2" valign="top" style="padding-bottom:0px; font-size:50px; line-height:60px; color:#c91e71;
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
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/fb.png" width="31" height="32" alt="Facebook" border="0" style="display:block; font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/tw.png" width="31" height="32" alt="Twitter" border="0" style="display:block; font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/yt.png" width="32" height="32" alt="Pinterest" border="0" style="display:block; font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                            <td width="9">&nbsp;</td>
                                            <td align="center" valign="top"><a href="#" target="_blank" style="text-decoration:none;"><img src="https://www.logodesignmart.com/template-images/gp.png" width="31" height="32" alt="Instagram" border="0" style="display:block; font-size:9px; line-height:22px; color:#ffffff;"/></a></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" class="em_wht" style="font-size:13px; line-height:22px; color:#ffffff;">Copyright © 2021 Logo Design Mart<br><a style=" color:#ffffff;" href="mailto:info@logodesignmart.com">info@logodesignmart.com</a><br>
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
                                      <td align="center" class="em_gray2" style="font-size:12px; line-height:18px; color:#9da0b1;"><strong>Customised Solutions To Cater Your Business Needs Specifically:</strong> With a pinch of ability and pint of colours, we have a tendency to produce appealing styles that enrapture the audience. We have the foremost intimate with graphic designers and professional developers in our team that will assure you to produce the best and unique work as far as customers need are concerned.</td>
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

    $mail->Subject = 'Thank you for your Order!';

    $mail->Body    = "$msg";

    $mail->send();

    // echo 'Message has been sent';

    die();



} catch (Exception $e) {



}







  }











?>