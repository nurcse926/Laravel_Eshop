<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{URL::to('backend/img/favicon.png')}}">
	<!-- end: Favicon -->
			<style type="text/css">
			body { background: url({{URL::to('backend/img/bg-login.jpg')}})!important; }
			body{
				background-color:gray;
			}
			.form-horizontal{
				background-color:#445268;
			}
			.login-box{
				background: #445268;
				border-radius: 3px;
				border:1px solid #9c9;
			}
			.login-box h2{
				color:#fff;
				margin-left: 120px;
			}
			.btn{
				margin-left: -200px;
				background-color:rgba(0,0,0,0.1);
				border-radius: 3px!important;
				border:1px solid #000;
			}
			.lgimg{
				background:url('{{URL::to('backend/img/logimg.jpg')}}')!important;
				width: 50px;
				height: 50px;
				border-radius:50%;
				margin-left: 45%;
				margin-top: 5px;
				border:1px solid #000;
			}
			.icons{
				color:red;
				text-align: center;
				opacity:0px;
			}
			/*.user{
			background-color:green;
			opacity: 0px;
			}*/
			.input-prepend{
				background: #445268!important;
				width: 410px;
				margin-left: -5px;
			}
			.input-large{
				background:#445268!important;

			}
			.alert-danger{
				padding-left: 50px;
				background: #2F4F4F;
				font-weight: bold;
				color:red;
			}
			.add-on{
				background:#445268!important;
			}
		</style>
</head>
<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="lgimg"></div>
					<div class="icons">
						<a href="#"><i class="halflings-icon home" style="opacity:100"></i></a>
						<a href="#"><i class="halflings-icon cog" style="opacity: 100"></i></a>
					</div>	
					<h2 style="color:#000; font-weight: bold">Login to admin panel</h2>
					<p class="alert-danger">
					<?php 
					$message= Session::get('message');
					if($message){
						echo $message;
						Session::put('message', null);
					}
					?>
				</p>
					<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">

						{{csrf_field()}}

						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on" style="border-color: #000!important"><i class="halflings-icon user" style="opacity:100" ></i></span>
								<input class="input-large span10" style="border-color:#000!important" name="admin_email" type="text" placeholder="Admin Email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on" style="border-color: #000!important"><i class="halflings-icon lock" style="opacity: 100"></i></span>
								<input class="input-large span10" name="admin_password" style="border-color:#000!important" type="password" placeholder="Admin password"/>
							</div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row-->
	</div><!--/.fluid-container-->
		</div><!--/fluid-row-->
	<!-- start: JavaScript-->
		<script src="{{asset('backend /js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('backend /js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend /js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery.cookie.js')}}"></script>
		<script src="{{asset('backend /js/fullcalendar.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend /js/excanvas.js')}}"></script>
	    <script src="{{asset('backend /js/jquery.flot.js')}}"></script>
	    <script src="{{asset('backend /js/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery.chosen.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('backend /js/jquery.imagesloaded.js')}}"></script>
		<script src="{{asset('backend /js/custom.js')}}"></script>
	<!-- end: JavaScript-->
</body>
<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>
