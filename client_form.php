<?php 
  include('includes/header.php');
  include('includes/db.php');

  $order_unique=$_GET['order'];

  if($_GET['order']==''){
?>
   <script type="text/javascript">  window.location = "https://www.logodesignmart.com/custom_payment.php" </script>
   <?php
}


  $query="SELECT * FROM custom_order  WHERE order_unique = '$order_unique' ";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($run);


 ?>

<style type="text/css">
.radio-val {
    text-align: center;
}
.s-bar {
    display: none !important;
}
button.rq-fm,
.container.contact-bar {
    display: none;
}
button.rq-fm
.radio-val input {
    width: 20px !important;
    height: 20px !important;
}
.radio-val label {
    display: inline-block;
    max-width: 100%;
    font-weight: 700;
    font-size: 26px !important;
    margin: 0 13px 21px 0 !important;
}
.submit-process {
    display: table;
    background: #c91e71;
    cursor: pointer;
    color: #fff;
    padding: 10px 20px;
    border-radius: 20px;
    width: 300px;
    text-align: center;
    font-size: 20px;
    margin: 13px auto 0;
}
.pbx {
    display: inline;
    padding: 0;
    border-radius: 10px;
    margin: 0 0 12px 0;
    font-size: 45px;
    font-weight: bold;
    color: #c91e71;
}
.radio-val input {
    width: initial !important;
    cursor: pointer;
}
.radio-val {
    float: left;
    width: 100%;
}
 .fotrsect2{
    display: none;
  }
  .dollar {
    text-align: center;
}
.dollar input {
    width: initial !important;
}
input.package_name {
    width: 100% !important;
}
input.package_price {
    color: #c91e71;
    font-weight: bold;
}
  .dollar input.package_price {
    border: 0 !important;
    font-size: 45px;
}
sup {
   color: #c91e71;
    font-size: 30px;
}

  form.payment {
    display: block;
}
.payment-methad {
    float: none;
    display: table;
    margin: 173px auto;
    max-width: 500px;
}

.payment-methad .pmthd input {
    display: inline;
    padding: 5px;
    border-radius: 10px;
    margin: 0 7px 12px 0;
    width: 48.2%;
    border: 2px solid #999999;
    /* border-color: initial; */
}
.payment-methad .pmthd input.paysub {
    border: 0;
    margin: -66px auto 0;
    display: table;
    max-width: 117px;
}
h2{
      text-align: center;
    color: #1e1e1e;
    font-weight: 700;
    font-size: 32px;
    margin:12px 0px 14px;
}
.footercont{
  display: none;
}
.footer-wrapper{
  background: #fff;
  padding: 0; 
}
footer.landing-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
}
@media all and (max-width: 767px) and (min-width: 240px){
  .payment-methad .pmthd input{
    width: 100%;
  }
  .payment-methad{
    max-width: 260px;
        display: inherit;
    margin-top: 135px;
  }
  .payment-methad .pmthd input.paysub {
    border: 0;
    margin: 0px auto 0;
    display: table;
    max-width: 117px;
}
.dollar input.package_price {
    border: 0 !important;
    font-size: 40px;
    width: 97px !important;
    display: inline-block !important;
}
}
</style>
<div class="paymnt-main">
  <?php
     print_r($order_id);
  ?>
  <div class="payment-methad">
    <h2>Payment Process</h2>
    <form class="payment pmthd">
        <input type="text" class="buyer_name" readonly="true"  value="<?php echo $row['order_name'] ?>">
  <input type="text"  class="buyer_email" readonly="true"  value="<?php echo $row['order_email'] ?>">
  <input type="text" class="package_name" readonly="true" value="<?php echo $row['order_pakcge'] ?>" >
   <div class="radio-val">
    <h2>Please Select Payment Method</h2>
    <div class="dollar"><sup>$</sup><div class="pbx"> <?php echo $row['order_price'] ?> </div></div>
 <input type="radio" name="payment_process" value="Paypal" id="Paypal-checked" value="paypal"><label for="Paypal-checked">Paypal</label> <input type="radio" name="payment_process"  id="Stripe-checked" value="stripe"> <label for="Stripe-checked">Stripe</label> </div>
    
   
<div class="submit-process">Submit</div>
    </form>
  <form class="payment pmthd" action="https://www.paypal.com/cgi-bin/webscr" method="post"  style="display: none !important;">
    
      <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="majidmrmsoft@gmail.com">
   <input type="hidden" name="hosted_button_id" value="KMNDKCFYWFFCU">
  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">
  
  <!-- Specify details about the item that buyers will purchase. -->

  <input type="text" name="first_name" class="buyer_name"  value="<?php echo $row['order_name'] ?>">
  <input type="text" name="email" class="buyer_email"  value="<?php echo $row['order_email'] ?>">
  <input type="text" name="item_name" class="package_name" readonly="true" value="<?php echo $row['order_pakcge'] ?>" >
    <div class="dollar"><sup>$</sup><input type="text" name="amount" class="package_price" value="<?php echo $row['order_price'] ?>" readonly="true"></div>
  <input type="hidden" name="currency_code" value="USD">
  
  <!-- Display the payment button. -->
  <input class="paysub" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now">
  <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">

  </form>
  </div>
</div>



<form action="charge.php" method="POST" class="custom-checkout" style="display: none !important;">

  <input name="stripe_price" value="<?php echo $row['order_price'] ?>00">

  <script

    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

    data-key="pk_live_7wvmVttDzRYbZUKo12Nay8tf"

    data-amount="<?php echo $row['order_price'] ?>00"

    data-name="<?php echo $row['order_pakcge'] ?>"

    data-image="images/fav.jpg"

    data-locale="auto"

    data-zip-code="true">

  </script>

</form>

<script src="https://js.stripe.com/v3/"></script>



<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function(){

jQuery('.submit-process').on('click',function(){
var radioValue = jQuery("input[name='payment_process']:checked").val();

        console.log(radioValue);
console.log('radioValue');
         if('stripe' == radioValue){

            jQuery('.stripe-button-el').trigger('click');

           }else{

             jQuery('.paysub').trigger('click');             

             }
           });
  });
</script>