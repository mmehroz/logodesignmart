
<?php 
require_once('config.php');
include('includes/header.php'); ?>

<div class="thankyoupage">

<div class="banr ppolicy">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="page-head">

            <h1>Stripe Payment</h1>

        </div>

      </div>

    </div>

  </div>

</div>
  </div>
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <?php
  

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $stripe_price = $_POST['stripe_price'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => $stripe_price,
      'currency' => 'usd',
  ]);

  echo '<h1 class="response">Successfully charged</h1>';
?>

</div></div></div>



<?php include('includes/footer.php'); ?>