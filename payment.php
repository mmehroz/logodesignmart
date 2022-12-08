<?php include('includes/header.php'); ?>
<style type="text/css">
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
    margin: 30px 0px 25px;
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
<div class="payment-methad">
  <h2>Payment Process</h2>
<form class="payment pmthd" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="majidmrmsoft@gmail.com">
   <input type="hidden" name="hosted_button_id" value="KMNDKCFYWFFCU">
  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">
  
  <!-- Specify details about the item that buyers will purchase. -->

  <input type="text" name="first_name" class="buyer_name" value="Ali">
  <input type="text" name="email" class="buyer_email" value="saaea93@gmai.com">
  <input type="text" name="item_name" class="package_name" readonly="true" value="Professional Web Package">
    <div class="dollar"><sup>$</sup><input type="text" name="amount" class="package_price" value="599" readonly="true"></div>
  <input type="hidden" name="currency_code" value="USD">
  
  <!-- Display the payment button. -->
  <input class="paysub" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now">
  <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
</div>




  <?php include('includes/footer-web.php'); ?>
