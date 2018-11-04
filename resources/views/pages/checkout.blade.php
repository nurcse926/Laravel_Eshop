@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="register-req">
				<p><h4>Please Fill up at this form</h4></p>
			</div><!--/register-req-->
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						
					</div>
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Product Shipping Medhod</p>
							<div class="form-one">
			<form action="{{url('/save-shipping-details')}}" method="post">
						{{csrf_field()}}
	<input type="text" name="shipping_email"         placeholder="Email*" required>
	<input type="text" name="shipping_first_name"    placeholder="First Name*" required>
	<input type="text" name="shipping_last_name"     placeholder="Last Name*" required>
	<input type="text" name="shipping_address"       placeholder="Address*" required="">
	<input type="text" name="shipping_mobile_number" placeholder="Mobile Number*" required>
	<input type="text" name="shipping_city"          placeholder="City*" required>
	<input type="submit" value="Done" class="btn btn-default">	
				</form>
							</div>
							</div>
						</div>
					</div>
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection