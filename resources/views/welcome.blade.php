

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fashi&hearts;n Cloud</title>
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
<link rel="shortcut icon" href="{{URL::to('backend/img/favicon.png')}}">
<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>01636717565</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>nurcse926@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
<style>
    footer{
        background: #445268!important;
        font-color: #eaead9!important;
    }
footer-widget{
    color: red!important;
}
    .navbar-inner{
        background: #01122b!important;
    }
    #scrollUp{
        background:#016773!important;
        background: rgba(0,0,0, 0.0)!important;
        border-radius: 50%;
        border:dotted;
        color:gold!important;
        border-color:#A25016  
    }
</style>
        <div class="header-middle" ><!--header-middle-->
 <div class="container">
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
 }
</style>
        <div class="row">
         <div class="col-sm-4">
                        <div class="logo pull-left">
                            {{-- <a href="{{URL('/')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a> --}}

  <h1 class="logf"><b style="color: #016773">Fashi<span style="font-size:30px; color:#A25016">&hearts;</span>n</b><span style="font-family:Edwardian Script ITC; color: #A25016; padding-right: 5px"><b>C</b></span><b style="color: #A25016">loud</b></h1>
  <div class="tag">
     <span style="padding-left: 123px">বাংলাদেশের প্রতিশ্রুতিবদ্ধ ই-শপ</span>
  </div>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <?php $customer_id=Session::get('customer_id'); ?>
                            <?php $shipping_id=Session::get('shipping_id'); ?>
                            
                            <?php if($customer_id !=NULL && $shipping_id==NULL) { ?>
         <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <?php } if($customer_id !=NULL && $shipping_id!=NULL){ ?>
         <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>      
                <?php }else{ ?>
             <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
             <?php } ?>
         <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
             <?php $customer_id= Session::get('customer_id'); ?>
                    <?php if($customer_id!= NULL){ ?>
                <li><a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i>Logout</a></li>
                    <?php } else { ?>
                    <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i>Login</a></li>
                        <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@include('search')
@yield('search')
</div>
</div> 
 </div><!--/header-middle-->
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">

                <div class="row">
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL('/')}}" class="active">Home</a></li>
                             <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/login-check')}}">Checkout</a></li> 
                                        <li><a href="{{URL('/show-cart')}}">Cart</a></li> 
                                        <li><a href="{{URL('/login-check')}}">Login</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="{{url('/nur-blog')}}">Blog</a>
                                   {{--  <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul> --}}
                                </li> 
                                <li><a href="{{url('/error-page')}}">404</a></li>
                                <li><a href="{{url('/contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                  {{--   <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
<style>
    .carousel-control{
        background:rgba(0,0,0, .0);
        margin-left: 100px;
        width: 50px;
    }
.right-carousel{
    margin-right: -10px;
}
</style>
<?php $all_published_slider=DB::table('tbl_slider')
                            ->where('publication_status',1)
                            ->get();
                        ?>
   @yield('slider');
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2 style="color:#016773">Category</h2>

                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                               <?php 
                               $all_published_category=DB::table('tbl_category')
                                                      ->where('publication_status',1)
                                                      ->get();
                                foreach($all_published_category as $v_category) 
                                 {?>                    
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                            </div>
                                <?php } ?>
                            </div>
                        </div><!--/category-products-->
                        <div class="brands_products"><!--brands_products-->
                            <h2 style="color:#016773">Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                      <?php 
                               $all_published_manufacture=DB::table('tbl_manufacture')
                                                      ->where('publication_status',1)
                                                      ->get();
                                foreach($all_published_manufacture as $v_manufacture) 
                                 {?> 
                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right">


                                        {{($v_manufacture->manufacture_id)}}

                                    </span>{{$v_manufacture->manufacture_name}}</a></li>
                                      <?php } ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                      {{--   <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">Tk 0</b> <b class="pull-right">Tk 600</b>
                            </div>
                        </div><!--/price-range--> --}}
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{URL::to('frontend/images/home/shipping.gif')}}" alt="" /><br><br><br><br>
                               <img src="{{URL::to('frontend/images/home/shipping2.gif')}}" alt="" />
                               <br>
                               <br>
                                <br>
                               <br>
                                <img src="{{URL::to('frontend/images/home/shipping3.gif')}}" alt="" />
                        </div><!--/shipping-->
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')
                </div>
            </div>
        </div>
    </section>
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2 style="font-family: Nirmala UI">Fashi&hearts;n<span style="font-family:Edwardian Script ITC "><b>C</b></span>loud</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p style="color:#B4B1AB ">Shipping Member</p>
                                <p style="color:#B4B1AB">Anindya Nur</p>
                                <h2 style="color:#B4B1AB">24 DEC 2017</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{-- {{URL::to('frontend/images/home/iframe2.png')}} --}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p style="color:#B4B1AB ">Shipping Member</p>
                                <p style="color:#B4B1AB">Noushin Sharmin</p>
                                <h2 style="color:#B4B1AB">24 DEC 2017</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{-- {{URL::to('frontend/images/home/iframe3.png')}} --}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p style="color:#B4B1AB ">Shipping Member</p>
                                <p style="color:#B4B1AB">Rakhi Jannat</p>
                                <h2 style="color:#B4B1AB">24 DEC 2017</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{-- {{URL::to('frontend/images/home/iframe4.png')}} --}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p style="color:#B4B1AB ">Shipping Member</p>
                                <p style="color:#B4B1AB">Redoy khan</p>
                                <h2 style="color:#B4B1AB">24 DEC 2017</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{URL::to('frontend/images/home/map.png')}}" alt="" />
                            <p style="color:#B4B1AB">Gulshan-2 North Avenue, Dhaka-1212, Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget" style="color:#fff!important">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2 style="color:#B4B1AB">Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="#"><span style="color:#B4B1AB">Online Help</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Contact Us</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Order Status</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">FAQ's</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2 style="color:#B4B1AB">Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="#"><span style="color:#B4B1AB">T-Shirt</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Gift Cards</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Mens</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Electronics</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Womens</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2 style="color:#B4B1AB">Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="#"><span style="color:#B4B1AB">Terms of Use</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Privacy Poclicy</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Refund Policy</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Billing System</span></a></li>
                                <li ><a href="#"><span style="color:#B4B1AB">Ticket System</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2 style="color:#B4B1AB">About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                        <li ><a href="#"><span style="color:#B4B1AB">Company Information</span></a></li>
                        <li ><a href="#"><span style="color:#B4B1AB">Careers</span></a></li>
                        <li ><a href="#"><span style="color:#B4B1AB">Store Location</span></a></li>
                        <li ><a href="#"><span style="color:#B4B1AB">Affillate Program</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2 style="color:#B4B1AB">About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                        <button type="submit" class="btn btn-default" style="background:#016773"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p style="color:#B4B1AB">Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 Fashion Cloud. All rights reserved.</p>
                    <p class="pull-right">Developed by <span><a href="#">Anindya Nur</a></span></p>
                </div>
            </div>
        </div>
<style>
footer-widget{
    background: green!important;

}
</style>
 
    </footer><!--/Footer-->
    
    <script src="{{asset('frontend/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    
</body>
</html>