<?php 
  session_start();
  include('includes/header.php');
  include('includes/db.php');

  if(isset($_SESSION['admin'])){
     ?>
        <script type="text/javascript">  window.location = "https://www.logodesignmart.com/custom_payment.php" </script>

    <?php
    
}  

  if (isset($_POST['paysubm']))
{ 
  $loginemail=$_POST['loginemail'];
  $loginpass=$_POST['loginpass'];
  $insert_id= mysqli_insert_id($con);
  $query="SELECT * FROM adminlogin WHERE admin_email = '".$loginemail."' AND admin_pass = '".$loginpass."' ";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($run);
  $admin_email=$row['admin_email'];
       $_SESSION['admin']=$admin_email;
  if ($run>0) {
  ?>
     <script type="text/javascript">  window.location = "https://www.logodesignmart.com/custom_payment.php" </script>
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
    width: 100%;
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
  <div class="payment-methad">
    <h2>Admin Login</h2>
  <form class="payment pmthd" action="login.php" method="post">
    
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="majidmrmsoft@gmail.com">
     <input type="hidden" name="hosted_button_id" value="KMNDKCFYWFFCU">
    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">
    
    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="payid" class="pay-id" value="">
    <input type="text" name="loginemail" class="buyer_email" placeholder="Email">
    <input type="password" name="loginpass" class="package_name" placeholder="Password">
    <input type="submit" name="paysubm" value="Submit">
  </form>
  </div>
</div>




  <?php include('includes/footer-web.php'); ?>
