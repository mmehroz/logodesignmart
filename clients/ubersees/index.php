<?php
    $msg="";
    if(isset($_POST['submit_btn']))
    {
        $date= $_POST['date'];
        $duration= $_POST['duration'];
        $country= $_POST['country'];
        $city= $_POST['city'];
        $address= $_POST['address'];
        $offer_price= $_POST['offer_price'];
        
        
        $to = 'ghulamali.mangrio@yahoo.com';

        $subject = 'ubersees.de Form Submit';
        
        $headers = "From: Ubersees<info@ubersees.de> \r\n";
        $headers .= "Reply-To: info@ubersees.de \r\n";
       // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        $message = "<table>
        <tr><td><b>Date</b></td><td>$date</td></tr>
        <tr><td><b>Duration</b></td><td>$duration</td></tr>
        <tr><td><b>Country</b></td><td>$country</td></tr>
        <tr><td><b>City</b></td><td>$city</td></tr>
        <tr><td><b>Accommodation Address</b></td><td>$address</td></tr>
        <tr><td><b>Offer Price For Holiday</b></td><td>$offer_price</td></tr>
        </table>";
        
        
        if(mail($to, $subject, $message, $headers))
        {
            
            $msg="S";
        }
        else
        {
            $msg="F";
        }
    }
    
    
    if(isset($_POST['submit_newsletter']))
    {
        $email= $_POST['email'];
        
        
        $to = 'ghulamali.mangrio@yahoo.com';

        $subject = 'ubersees.de Newsletter Form Submit';
        
        $headers = "From: info@ubersees.de";
       // $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
       // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        $message = "<table>
        <tr><td><b>Email</b></td><td>$email</td></tr>
        </table>";
        
        
        if(mail($to, $subject, $message, $headers))
        {
            $msg="S";
        }
        else
        {
           
            $msg="F";
        }
    }
    
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ubersees</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>
<body>
    
    
<div id="wrapper">
  <header>
    <div class="logo text-center"> <a href="index.html"> <img src="images/logo.png" alt="" /> </a> </div>
    <h1>Wir unterbieten Ihr Angebot</br>
      für Ihren Urlaub.</h1>
    <img class="banner" src="images/banner.png" alt="" /> </header>
  <section class="main">
    <div class="middle-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Sie bezahlen mit 99%iger Wahrscheinlichkeit zu viel für Ihren Urlaub. Falls Ihr Angebot aus einem Reisebüro stammt, versprechen Wir Ihnen ein günstigeres Angebot. Wir gehen bei der Auswahl auf Ihre Ansprüche und Ihre Bedingungen ein.</p>
          </div>
        </div>
      </div>
    </div>
    
   <div class="container">
   <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
 
    <form class="formbox" action="" method="post">
     <h2>Unser/Mein Urlaub findet statt am/in</h2>
     <label>Datum</label>
     <input type="date" name="date" id="" value="" required />
     <label>Dauer (in Tagen)</label>
     <input type="text" name="duration" id="" value="" required />
     <label>Land</label>
     <input type="text" name="country" id="" value="" required />
     <label>Stadt</label>
     <input type="text" name="city" id="" value="" required />
     <label>Unterkunftsadresse</label>
     <input type="text" name="address" id="" value="" required />
     <label>Ihr Angebotspreis für Ihren Urlaub</label>
     <input type="text" name="offer_price" id="" value="" required>
     <input type="submit" name="submit_btn" id="" value="Submit" />
    </form>
  
   </div>
   </div>
   </div>
  </section>
  <footer>
  <div class="container">
  <div class="row">
  <div class="col-lg-9 col-md-9 col-sm-9 col-xl-9">
  <p>Unser Angebot erhalten Sie innerhalb von 12 Stunden unverbindlich an Ihre E-mail Adresse.</p>
  </div><div class="col-lg-3 col-md-3 col-sm-3 col-xl-3">
  <form class="newsletter" action="" method="post">
  <input type="email" class="email" name="email" id=""  placeholder="Enter your email" required />
  <input type="submit" name="submit_newsletter" value="Send"/>
  </form>
  </div>
  </div>
  </div>
  
  <?php
  if(isset($msg) && !empty($msg))
  {
      ?>
      <script>
      <?php 
      if($msg=="S")
      {
          echo "alert('Email Successfully Sent');";
      }
      else if($msg=="F")
      {
          echo "alert('Couldnt Send Email');";
      }
      ?>
      </script>
      
      
      <?php
  }
  ?>
  </footer>
</div>
</body>
</html>