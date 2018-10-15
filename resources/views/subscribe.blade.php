@extends('layouts.app')

@section('post-js')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Subscribe to Monthly Plan. Get the Latest intriguing Stories around the world!</h3>

	<form action="/subscribe" method="POST">

		{{ csrf_field () }}

    <input type="text" name="coupon">
    
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_tpbYgnLNnNG6aVRCj2WynB8U"
    data-amount="3000"
    data-name="Tosin Billing"
    data-description="Subscribe to Awesome blogs"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-label="Subscribe Now"
    data-email="{{ auth()->check()?auth()->user()->email:null }}"
    data-panel-label="Pay Monthly"
    data-locale="auto">
  </script>
</form>

		</div>

	</div>

  </div>

 @endsection