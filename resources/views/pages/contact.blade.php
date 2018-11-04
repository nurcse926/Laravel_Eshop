<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | Fashion Cloud</title>
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
<body>
  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href=""><i class="fa fa-phone"></i> +880 01636717565</a></li>
                <li><a href=""><i class="fa fa-envelope"></i> nurcse926@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->
    <style>
/* .logf{
    margin-top: -5px;
    font-size: 45px;
    padding-top: -10px;
    font-family:Bahnschrift Condensed;

 }*/
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
    font-weight: bold;
    color:gray;
 }
</style>
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              {{-- <a href="index.html"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a> --}}
{{-- 
  <h1 class="logf">Trendy<span style="color:#016773" style="margin-right: -14px"><i>E</i></span>sh<span style="font-size:35px; padding-top: 5px">&hearts;</span>p</h1>
 --}}
  <h1 class="logf"><b style="color: #016773">Fashi<span style="font-size:30px; color:#A25016">&hearts;</span>n</b><span style="font-family:Edwardian Script ITC; color: #016773; padding-right: 5px"><b>C</b></span><b style="color: #A25016">loud</b></h1>
  <div class="tag">
     <span style="padding-left: 116px">বাংলাদেশের প্রতিশ্রুতিবদ্ধ ই-শপ</span>
  </div>
          </div>     
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
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
                <li><a href="{{'/'}}">Home</a></li>
                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                    <li><a href="product-details.html">Product Details</a></li> 
                    <li><a href="{{URL::to('/login-check')}}">Checkout</a></li> 
                    <li><a href="cart.html">Cart</a></li> 
                    <li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
                <li><a href="404.html">404</a></li>
                <li><a href="contact-us.html" class="active">Contact</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header--> 
   <div id="contact-page" class="container">
      <div class="bg">
        <div class="row">       
          <div class="col-sm-12">                 
          <h2 class="title text-center">Find <strong>Us</strong></h2><script src="{{asset('frontend/js/map.js')}}"></script>   

<style>
    #map{
      height:400px;
      width:100%;
    }
  </style>
{{-- 
<div style="position: absolute; left: 1px; top: 1px; border-radius: 2px; background-color:gree; width: 280px; height: 88px;"> --}}
  <div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:12,
        center:{lat:23.777176,lng:90.399452}
      }
      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:23.797911,lng:90.414391},
        map:map,
        // icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'

        icon:"{{URL::to('backend/img/map.png')}}"
      });
      var infoWindow = new google.maps.InfoWindow({
        content:'<h4 background:"green"><span style="color:#016773">Fashi<span style="color:#A25016">&hearts;</span>n <i style="font-family:Edwardian Script ITC;padding-right:5px;color:#A25016;font-size:20px;font-weight:bold">C</i>loud</span></h4>'
      });
      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      
      // Array of markers
      var markers = [
        {
        
        },
        {
          coords:{lat:42.8584,lng:-70.9300},
          content:'<h1>Amesbury MA</h1>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];
      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });
        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }
        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>

<style>
.bt{
 border-radius: 20%;
  height:68px;
  width: 300!important;
  float: center;

  border-radius: 20px;
}
.bt1{
  margin-left: 190px;
  
}
.bt2{
  margin-right: 100px!important;
}
.btn.btn-primary.pull-right{
 width:200px;
 height: 68px;
 position: absolute;
 margin-top:0px!important;
}

.fa.fa-paper-plane{
  background: blue!important;
}

</style>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSYBvaQzr387-XTSirUoV4MofxHudZRYo&callback=initMap">
    </script> 
  <script src="{{asset('frontend/js/map.js')}}"></script>

        </div>          
      </div>   
            <hr>     
        <div class="row">   
          <div class="col-sm-8">
            <div class="contact-form">
              <h2 class="title text-center" style="color:#016773">Get In Touch</h2>
              <div class="status alert alert-success" style="display: none"></div>
              <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                    </div>                        
                    <div class="form-group col-md-12">
<div class="bt">
<i class="fa fa-paper-plane" aria-hidden="true"></i>

<img src="{{URL::to('frontend/images/home/trinder.gif')}}" alt="" class="bt1" />

                        <button type="submit" name="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button>
                        
                      </div>
                    </div>
                </form>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contact-info">
              <h2 class="title text-center" style="color:#016773">Contact Info</h2>
              <address>
                <p>Fashion Cloud</p>
              <p>House#40/1, Road#91, Gulshan-2 Avenue, Dhaka-1212</p>
              <p>Dhaka, Bangladesh</p>
              <p>Mobile: +088 1636717565</p>
              <p>Fax: 1-714-252-0026</p>
              <p>Email: nurcse926@gmail.com</p>
              </address>
              <div class="social-networks">
                <h2 class="title text-center" style="color:#016773">Social Networking</h2>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
              </div>
            </div>
          </div>          
        </div>  
      </div>  
    </div><!--/#contact-page-->
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
       /* background:#016773!important;
        border-radius: 50%;
        border:dotted;
        color:gold!important;
       border-color:#fff;*/
        background:#016773!important;
        background: rgba(0,0,0, 0.0)!important;
        border-radius: 50%;
        border:dotted;
        color:gold!important;
        border-color:#A25016   
    }
</style>
 <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2 style="font-family: Nirmala UI">Fashi&hearts;n<span style="font-family:Edwardian Script ITC "><b>C</b></span>loud</h2>
                            <p>At the mordern trendy looking e-shopping in Bangladesh we are fully
                            recommantend to you! It's established in 2018</p>
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
                                <p style="color:#B4B1AB">Md.Mamun</p>
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
                                <p style="color:#B4B1AB">Lina Hamid</p>
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
                                <p style="color:#B4B1AB">Nill Ruddro</p>
                                <h2 style="color:#B4B1AB">24 DEC 2017</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/iframe4.png')}}" alt="" />
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
                    <p class="pull-left">Copyright © 2018 NurShop. All rights reserved.</p>
                    <p class="pull-right">Designed by <span>Anindya Nur</span></p>
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