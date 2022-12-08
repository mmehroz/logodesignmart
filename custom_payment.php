<?php 
session_start();
  include('includes/header.php');
  include('includes/db.php');
if(!isset($_SESSION['admin'])){
?>
   <script type="text/javascript">  window.location = "https://www.logodesignmart.com/" </script>
   <?php
}

  if (isset($_POST['paysubm']))
{ 
  $payid=$_POST['payid'];
  $name=$_POST['payname'];
  $email=$_POST['payemail'];
  $pakcge=$_POST['paypakcge'];
  $price=$_POST['payprice'];
  $t=time();
  $uni_id=($t.$email);
  $order_unique=md5($uni_id);
  $query="INSERT INTO custom_order(order_name,order_email,order_pakcge,order_price,order_unique) VALUES ('".$name."','".$email."','".$pakcge."','".$price."','".$order_unique."')";
  $run=mysqli_query($con,$query);

  $insert_id= mysqli_insert_id($con);
  $query="SELECT * FROM custom_order WHERE order_id = $insert_id";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($run);
  if ($run>0) {
  ?>
     <script type="text/javascript">  window.location = "https://www.logodesignmart.com/client_form.php?order=<?php echo $row['order_unique'] ; ?>" </script>
     <?php
  }
  else{
    echo "<script>alert('something wrong');</script>"; 
  }
}


 ?>

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

.paymnt-main .payment-methad .pmthd input[type="submit"] {
    display: table;
    margin: 0 auto;
    background: #c91e71;
    border-color: #c91e71;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: capitalize;
    text-decoration: none;
    border-radius: 50px;
    padding: 12px 0;
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
    background: #fff;
    display: inline;
    padding: 10px 20px;
    border-radius: 50px;
    margin: 0 7px 20px 0;
    width: 48.2%;
    box-shadow: 0 0 4px 0px #c91e7170;
    border: 0;
    font-size: 14px;
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
<div class="paymnt-main">
  <?php
     print_r($order_id);
  ?>
  <div class="payment-methad">
    <h2>Admin Update Process</h2>
  <form class="payment pmthd" action="" method="post">
    
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="majidmrmsoft@gmail.com">
     <input type="hidden" name="hosted_button_id" value="KMNDKCFYWFFCU">
    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">
    
    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="payid" class="pay-id" value="">
    <input type="text" name="payname" class="buyer_name" placeholder="Name">
    <input type="text" name="payemail" class="buyer_email" placeholder="Email">
    <input type="text" name="paypakcge" class="package_name" placeholder="Package Name">
    <input type="number" name="payprice" class="pricing" placeholder="Price">
    <!-- <input type="hidden" name="order_unique" value="<?php uniqid(); ?>"> -->
    <input type="submit" name="paysubm" value="Submit">
      <!-- <div class="dollar"><sup>$</sup><input type="text" name="amount" class="package_price" value="599" readonly="true"></div> -->
    <!-- <input type="hidden" name="currency_code" value="USD"> -->
    
    <!-- Display the payment button. -->
    <!-- <input class="paysub" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now"> -->
    <!-- <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"> -->
  </form>
  </div>
</div>




  <?php include('includes/footer-web.php'); ?>
