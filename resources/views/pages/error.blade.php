<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<style>
 .logf{
    margin-top: -5px;
    font-size: 45px;
    padding-top: -10px;
    font-family:Poiret One;
 }
 .tag{
    height:10px;
    width: 400px;
    position: absolute;
    /*background: green;*/
    margin-top: -19px;
    font-size:11px;
/*    font-weight: bold;*/
    color:gray;
    margin-left: 370px;
 }
</style>
<body>
	<div class="container text-center">
		<div class="logo-404">
			{{-- <a href="index.html"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a> --}}
  <h1 class="logf"><b style="color: #016773">Fashi<span style="font-size:30px; color:#A25016">&hearts;</span>n</b><span style="font-family:Edwardian Script ITC; color: #016773; padding-right: 5px"><b>C</b></span><b style="color: #A25016">loud</b></h1>
    <div class="tag">
     <span style="padding-left: 123px">বাংলাদেশের প্রতিশ্রুতিবদ্ধ ই-শপ</span>

  </div>

		</div>
		<div class="content-404">
			<img src="{{URL::to('frontend/images/404/404.png')}}" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="index.html">Bring me back Home</a></h2>
		</div>
	</div>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>