@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container col-sm-12" >
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li ><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<style>
				.btn{
					background: rgba(0,0,0, 0.1);
					border:1px solid gray;
					color:#A25016;
				}

				.btn-default1:hover{
					background: #016773!important;
					color:#fff;
					border:1px solid #A25016!important;
				}
			</style>
			<div class="table-responsive cart_info">
				<?php
				$contents=Cart::content();
				// echo "<pre>";
				// print_r($contents);
				// echo "</pre>";
				?>
				<table class="table table-condensed" >
					<thead>
						<tr class="cart_menu" style="background:rgba(0,0,0,0.1); color: black">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contents as $v_content ) { ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{$v_content->options->image}}" height="90px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>	
							</td>
							<td class="cart_price">
								<p>{{$v_content->price}}-Tk</p>
							</td>
							<td class="cart_quantity">
							<div class="cart_quantity_button">
								<form action="{{url('/update-cart')}}" method="post">	
									{{csrf_field()}}
						<input class="cart_quantity_input" type="text" name="qty" value="{{$v_content->qty}}" autocomplete="off" size="2">

						<input  type="hidden" name="rowId" value="{{$v_content->rowId}}">

					<input type="submit" name="submit" value="update" class="btn btn-sm btn-default"
					style="background: rgba(0,0,0, 0.0);border-radius: 1px; height: 28px; margin-left:1px">
								</form>

							</div>
							</td>

							<td class="cart_total">
					<p class="cart_total_price">{{$v_content->total}} <span style="color: #016773">Tk</span></p>
							</td>
							<td class="cart_delete">
		<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" >
			<i class="fa fa-times" style="background:red"></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}} -Tk</span></li>
							<li>Eco Tax <span>{{Cart::tax()}} -Tk</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total()}} -Tk</span></li>
							{{-- <a class="btn btn-default update" href="">Update</a>  --}}
					<?php $customer_id= Session::get('customer_id'); ?>
                    <?php if($customer_id !=NULL){ ?>
                    <a href="{{URL::to('/checkout')}}" class="btn btn-default">Checkout</a>
                </li>
                    <?php } else { ?>
                    <li style="background:rgba(0,0,0, 0.0); margin-left: 270px">
                    <a href="{{URL::to('/login-check')}}" class="btn btn-default1 " style="background:rgba(0,0,0, 0.0);border-radius:1px;border-color:#016773; /*color:#a25016; */font-weight: bold">Checkout</a>
                        <?php } ?>
                    </li>
                    </ul>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection