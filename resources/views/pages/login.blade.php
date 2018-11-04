@extends('welcome')
@section('content')
<style>
	.nur{
		border:1px solid rgba(0,0,0, 0.2)!important;
	}
	.nur:hover{
		border:1px solid #A25016!important;
	}
		.btn-default1{
					background: rgba(0,0,0, 0.1)!important;
					border:1px solid #016773!important;
					color:#A25016!important;
				}
				.btn-default1:hover{
					background: #016773!important;
					color:#fff!important;
					border:1px solid #A25016!important;
				}
				.alert-danger{
				padding-left: 20px;
				background: #9c9c;
				color:red;
				font-size: 18px;
				margin-left: 200px;
				width: 400px;	
			}
</style>
<section id="form"><!--form-->
		<div class="container">
<p class="alert-danger">
						<?php 
						$nur=Session::get('nur');
						if($nur){
						echo $nur;
						Session::put('nur', NULL);
						}
						?>
					</p>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2 style="color:#016773"><span><b>Login to your account</b></span></h2>
						<form action="{{URL('/customer-login')}}" method="post">
							{{csrf_field()}}
							<input type="email" required placeholder="Email" name="customer_email" class="nur" />
							<input type="password" name="password" placeholder="Password" class="nur"/>
							<button type="submit" class="btn btn-default1" style="background:#016773;border:1px solid #A25016">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or" style="background:rgba(0,0,0, 0.0); border:1px solid#A25016; color:#016773">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2 style="color:#016773"><span><b>New User Signup!</b></span></h2>
						<form action="{{URL('/customer-registration')}}" method="post">
							{{csrf_field()}}
							<input type="text" placeholder="Full Name" name="customer_name" required class="nur"/>
							<input type="email" placeholder="Email Address" name="customer_email" required class="nur"/>
							<input type="password" placeholder="Password" name="password" required class="nur" />
							<input type="text" placeholder="Mobile Number" name="mobile_number" required class="nur" />
							<button type="submit" class="btn btn-default1">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection