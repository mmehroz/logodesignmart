<?php 
session_start();
  include('includes/header.php');
  include('includes/db.php');
  
if(!isset($_SESSION['admin'])){
?>
   <script type="text/javascript">  window.location = "https://www.logodesignmart.com/" </script>
   <?php
}

  $query="SELECT * FROM custom_order";
  $run=mysqli_query($con,$query);

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

.page-client-data .payment-methad {
    float: none;
    margin: 173px auto;
    max-width: 786px;
    display: block;
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
.page-client-data .headlist {
       width: 100%;
    margin: 35px 0 0;
    text-align: center;
    float: left;
    padding: 0;
}
.page-client-data .headlist li h4 {
    font-size: 20px;
    color: #1e1e1e;
    padding: 0 0 12px;
}


.page-client-data .headlist li {
    padding: 5px 0;
    float: left;
    width: 20%;
    list-style: none;
}
.page-client-data ul#example {
    float: left;
    width: 100%;
    padding: 0;
    text-align: center;
}
.page-client-data ul#example li {
    float: left;
    width: 20%;
    list-style: none;
    min-height: 45px;
    font-size: 14px;
}
.page-client-data nav.paginate-pagination {
    float: left;
    width: 100%;
}

.page-client-data nav.paginate-pagination ul {
    text-align: center;
}

.page-client-data nav.paginate-pagination ul li {
    display: inline-block;
    padding: 7px 8px;
}

.page-client-data nav.paginate-pagination ul li a {
    color: #000;
    font-size: 20px;
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
  <div class="payment-methad">
    <h2>Client Data</h2>
      <ul class="headlist">
        <li><h4>Name</h4></li>
        <li><h4>Email</h4></li>
        <li><h4>Package</h4></li>
        <li><h4>Price</h4></li>
        <li><h4>Link</h4></li>
      </ul>
        
      <ul id="example">  
        <?php
            while ($row=mysqli_fetch_assoc($run)) {         
      ?>
        <li><?= $row['order_name']; ?></li>
        <li><?= $row['order_email']; ?></li>
        <li><?= $row['order_pakcge']; ?></li>
        <li><?= $row['order_price']; ?></li>
        <li><?= $row['order_unique']; ?></li>
       <?php
            }
      ?>
    </ul>

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

  <script src="/js/pagination.js"></script>
  
  <script>
 /////////////////////////////////////////
    jQuery('#example').paginate();
  </script>

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