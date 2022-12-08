<?php include('includes/header.php'); ?>



<?php



if($_GET['name']==''){

	?>

 <script type="text/javascript">  window.location = "https://www.logodesignmart.com";</script>

 <?php

    } 



 $name = $_GET["name"]; 

 $email = $_GET["email"]; 

 $number = $_GET["number"]; 

 $package = $_GET["package"]; 

 $price = $_GET["price"]; 


	if(isset($_GET['order'])){
      $to = "info@logodesignmart.com, logodesignmart05@gmail.com";
      $subject = "Client Information | Order";
      $message = $name . "\n\n" . $email . "\n\n" . $number . "\n\n" . $package . "\n\n" . $price;
      $headers = "From:" . $email;
      mail($to,$subject,$message,$headers);
      }
?>

 

<div class="order">



<div class="banr ppolicy">



    <div class="container">



      <div class="row">



        <div class="col-lg-12">



          <div class="page-head">



            <h1>Order Information</h1>



        </div>



      </div>



    </div>



  </div>



</div>

	<section>

    <div class="container">

    <div class="row">

    <div class="col-md-8 order-center">

      <div class="directionbar">

   <div class="point point0 active-pur">Personal Detail</div>

   <div class="point point1 active-step">Provide Your business Detail</div>

   <div class="point point2">Payment Method</div>

   <div class="point point3">Thank You</div>

   </div>

     <form method="post" class="full_order">

      <div class="step1">

          <h2>Provide Your business steps</h2>  

      <input type="hidden" name="sender_name" class="halffield sender_name" placeholder="Your Name" value="<?php echo $name;?>"  required="required"/> 

      <input type="hidden" name="sender_email"  class="halffield left-field sender_email" placeholder="Your Email" value="<?php echo $email;?>" required="required" /> 

      <input type="hidden" name="sender_phone"  class="halffield sender_phone" placeholder="Phone Number" value="<?php echo $number;?>" required="required" /> 

      <input type="text" name="sender_packege"  class="halffield sender_packege active-or"  value="<?php echo $package;?>" required="required" readonly="readonly"  /> 

      <input type="text" name="sender_price"  class="halffield left-field sender_price active-or" value="<?php echo $price;?>" readonly="readonly" /> 

     <input type="text" name="business_name" placeholder="Business Name" class="halffield business_name" />

     <input type="text" name="refernce_ideas" placeholder="Reference Ideas" class="halffield left-field refernce_ideas" />

     <textarea name="brief" placeholder="Brief" class="brief"></textarea>

     <textarea name="target" placeholder="Targeted Audience" class="target_msg"></textarea>

     

     <!-- <label>Attached file if you have:</label> -->

     <!-- <input type="file" name="file" id="file" /> -->

     <div class="next-step">Continue</div>

   </div>

    <div class="step2">

     <h2>Select payment option</h2>

      <div>

       <div class="rdiostyle">

       	<div class="radoinner">

       		       	<input type="radio" class="pyament_method" name="payment_method" id="paypal-select" value="paypal">

       	<label for="paypal-select">paypal

            </label>

            <div class="check"></div>

       	</div>



           <img src="https://www.logodesignmart.com/images/or-paypal.png">

       </div> 

    <br>

   <div class="rdiostyle">

   		<div class="radoinner">

   	<input type="radio" class="pyament_method" name="payment_method" value="stripe" id="stripe-select">

   	<label for="stripe-select">Stripe

      </label>

      <div class="check"></div>

      </div>

      <img src="https://www.logodesignmart.com/images/stripelogo.png">

    </div>

    </div>

       <div class="prv-step">Previous</div>

        <input type="submit" name="order-mail" value="Order Now" id="order-mail">

     </div>



     </form>

      <p class="trem-ord">By clicking Continue, you acknowledge you have read and agreed to our <a href="https://www.logodesignmart.com/terms-of-service.php">Terms of Use</a>, <a href="https://www.logodesignmart.com/privacy-policy.php"> Privacy Policy and Refund Policy.</p>

    </div>

    </div>

    </div>

    </section>













<?php include('includes/footer.php'); ?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script> 

<form class="payment" action="https://www.paypal.com/cgi-bin/webscr" method="post">

  

  <!-- Identify your business so that you can collect the payments. -->

  <input type="hidden" name="business" value="majidmrmsoft@gmail.com">

   <input type="hidden" name="hosted_button_id" value="KMNDKCFYWFFCU">

  <!-- Specify a Buy Now button. -->

  <input type="hidden" name="cmd" value="_xclick">

  

  <!-- Specify details about the item that buyers will purchase. -->

  <input type="hidden" name="item_name" class="package_name" value="<?php echo $package;?>">

  <input type="hidden" name="amount" class="package_price" value="<?php echo trim(str_replace('$','',$price));?>">

  <input type="hidden" name="currency_code" value="USD">

  <input type="hidden" name="first_name" class="buyer_name" value="<?php echo $name;?>">

  <input type="hidden" name="email" class="buyer_email" value="<?php echo $email;?>">

  <!-- Display the payment button. -->

  <input class="paysub" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now">

  <img alt="" border="0" width="1" height="1"

  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>

<form action="charge.php" method="POST" class="stripe-checkout">

	<input name="stripe_price" value="<?php echo trim(str_replace('$','',$price));?>00">

  <script

    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

    data-key="pk_live_7wvmVttDzRYbZUKo12Nay8tf"

    data-amount="<?php echo trim(str_replace('$','',$price));?>00"

    data-name="<?php echo $package;?>"

    data-image="images/fav.jpg"

    data-locale="auto"

    data-zip-code="true">

  </script>

</form>

<script src="https://js.stripe.com/v3/"></script>



