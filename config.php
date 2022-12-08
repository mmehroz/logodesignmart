<?php
require_once('.//stripe/init.php');

$stripe = [
  "secret_key"      => "sk_live_HNaQXI7nTAvA3g9v37LQPtQ4",
  "publishable_key" => "pk_live_7wvmVttDzRYbZUKo12Nay8tf",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>