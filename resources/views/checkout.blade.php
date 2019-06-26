@extends('layout')

@section('content')

<h3>Demo based on...</h3>

<a href="https://stripe.com/docs/payments/checkout/server">https://stripe.com/docs/payments/checkout/server</a>

<script src="https://js.stripe.com/v3/"></script>

<button id="pay-with-stripe">
  Pay With Stripe
</button>

<script>
  // replace pk_test_xxx with your key...
  var stripe = Stripe('pk_test_xxx');
  document.getElementById("pay-with-stripe").addEventListener("click", function(){
    stripe.redirectToCheckout({
      // Make the id field from the Checkout Session creation API response
      // available to this file, so you can provide it as parameter here
      sessionId: '{{$session_id}}'
    }).then(function (result) {
      // If `redirectToCheckout` fails due to a browser or network
      // error, display the localized error message to your customer
      // using `result.error.message`.
    });
  });
</script>

@stop
