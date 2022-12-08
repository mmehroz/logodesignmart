 <?php



 if(isset($_POST['submit'])){

$name = $_POST['first_name'];

$email = $_POST['your_email'];

$phone = $_POST['phone'];

$comments = $_POST['comments'];

if($name & $email & $phone & $comments ){



$to = "adeelk73@gmail.com";
$subject = "Lp 3 Contact Form";
$formcontent = "name: ".$name;

$formcontent .= "<br />";

$formcontent .= "email: ".$_POST['your_email'];

$formcontent .= "<br />";

$formcontent .= "Phone: ".$phone;

$formcontent .= "<br />";


$formcontent .= "<br />";

$formcontent .= "comments: ".$comments;
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$formcontent,$headers);
}else{
	 echo 'contact form sending failed';
	}
 }
?>