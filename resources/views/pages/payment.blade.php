@extends('welcome')
@section('content')
<style>
</style>
<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
                     $contents=Cart::content();

				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style="background: #016773">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image)}}" height="80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price" >
								<p >{{$v_contents->price}} </p>
							</td>
							<td class="cart_quantity">
							<div class="cart_quantity_button">
								<form action="{{url('/update-cart')}}" method="post">
									{{ csrf_field()}}
									<input class="cart_quantity_input" type="text" name="qty" value="{{$v_contents->qty}}" autocomplete="off" size="2">
									<input  type="hidden" name="rowId" value="{{$v_contents->rowId}}"  >
									{{-- <input type="submit" name="submit" value="update" class="btn btn-sm btn-default"> --}}
								</form>
							</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}} Tk</p>
							</td>
							<td class="cart_delete">

								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                       <?php }?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<section id="do_action">
<style>	
.method{
	height:82px;
	width:152px;
	border:1px solid black;
}
.method .visa{
	background: red!important;
}
.paymentMethod{
	margin-top: 50px;
	margin-left: 100px;
} 
.btn-success{
	margin-left: 310px!important;
	margin-top: 20px;
	width: 100px;
	border-radius: 0!important;
	border:1px solid black;
}
.active{
	border:1px solid skyblue;
	border-radius: 0!important;
}
</style>
	<div class="container col-sm-10">
	<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center">Please Select Your Payment Method</h3>
								<hr>		
						</div>
						<div class="paymentWrap">
		         <form action= "{{URL::to('/order-place')}}" method="post">
								{{csrf_field()}}
						<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">

					     <label class="btn paymentMethod "><span><b>Hand Cash</b></span>
					        <div class="method visa" class="cash"><img src="{{URL::to('/frontend/images/home/tk.jpg')}}"></div>
					   <input type="radio" name="payment_gateway"  value="HandCash" checked> 
					            </label>
					            <label class="btn paymentMethod" ><span><b>Bkash</b></span>
					            <div class="method master-card"><img src="{{URL::to('/frontend/images/home/bksh.jpg')}}"></div>
					              <input type="radio" name="payment_gateway" value="Bkash"> 
					            </label>

					         <label class="btn paymentMethod"><span><b>Master Card</b></span>
				            <div class="method amex"><img src="{{URL::to('/frontend/images/home/master.jpg')}}"></div>
					        <input type="radio" name="payment_gateway" value="master_card">
					            </label>

					            <label class="btn paymentMethod"><span><b>Paypal</b></span>
				            	<div class="method amex"><img src="{{URL::to('/frontend/images/home/paypal.png')}}"></div>
					                <input type="radio" name="payment_gateway" value="Paypal">
					            </label>
					         </div>
				
					          {{--  
							  <div class="btn btn-success">Done</div>
						       </div> --}}
					 <div class="footerNavWrap clearfix">
					<input type="submit" name="submit" class="btn btn-success" >
						   </div>
				</form>
{{-- 
<form action="{{URL::to('/order-place')}}" method="post">
	{{csrf_field()}}
	<input type="radio" name="payment_gateway" value="handcash">Handcash<br>
	<input type="radio" name="payment_gateway" value="Bkash">Bkash<br>
	<input type="radio" name="payment_gateway" value="paypal">Paypal<br>
<input type="submit" name="" value="Done">
</form>
 --}}

















							
						    
						    
						   
					</div>
	</div>
</div>

@endsection