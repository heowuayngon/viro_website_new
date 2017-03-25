<?php
//require_once('vendor/autoload.php');
require_once('stripe/init.php');
$stripe = array(
  "secret_key"      => "sk_live_X34nrZzsMvFykZ0rsjO2KUHW",
  "publishable_key" => "pk_live_By7fN3bBa3oNNAJwgY0bNVF4 "
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
