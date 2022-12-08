<?php include('includes/header.php'); ?>
<?php
echo $_SESSION["name"];
?>
<?php

 $name = $_GET["name"]; 
 $email = $_GET["email"]; 
 $number = $_GET["number"]; 
 $package = $_GET["package"]; 
 $price = $_GET["price"]; 
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
    <div class="col-md-6 order-center">
    <div class="directionbar">
   <div class="point1 active-step">Provide Your business steps</div>
   <div class="point2">Payment Method</div>
   </div>
     <form method="post" class="full_order">
      <div class="step1">
          <h2>Provide Your business steps</h2>  
      <input type="hidden" name="sender_name" class="halffield sender_name" placeholder="Your Name" value="<?php echo $name;?>"  required="required"/> 
      <input type="hidden" name="sender_email"  class="halffield left-field sender_email" placeholder="Your Email" value="<?php echo $email;?>" required="required" /> 
      <input type="hidden" name="sender_phone"  class="halffield sender_phone" placeholder="Phone Number" value="<?php echo $number;?>" required="required" /> 
      <input type="text" name="sender_packege"  class="halffield sender_packege"  value="<?php echo $package;?>" required="required" readonly="readonly"  /> 
      <input type="text" name="sender_price"  class="halffield left-field sender_price" value="<?php echo $price;?>" readonly="readonly" /> 
     <input type="text" name="business_name" placeholder="Business Name" class="halffield business_name" />
     <input type="text" name="refernce_ideas" placeholder="Refernce Ideas" class="halffield left-field refernce_ideas" />
     <textarea name="brief" placeholder="Brief" class="brief"></textarea>
     <textarea name="target" placeholder="Targeted Audience" class="target_msg"></textarea>
     
     <!-- <label>Attached file if you have:</label> -->
     <!-- <input type="file" name="file" id="file" /> -->
     <div class="next-step">Next</div>
     </div><div class="step2">
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
<form action="" method="POST" class="stripe-checkout">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_Me4pjV5wSEsrJ0ooXLVbzQRQ"
    data-amount="<?php echo trim(str_replace('$','',$price));?>00"
    data-name="<?php echo $package;?>"
    data-image="images/fav.jpg"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>
<script src="https://js.stripe.com/v3/"></script>