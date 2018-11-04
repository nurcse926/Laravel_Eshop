@extends('welcome')
@section('content')
@include('slider')
<style>
    .product-overlay{
    background:rgba(0,0,0, .1);
    }
    .overlay-content{
        border-left:hidden;
        border-bottom:hidden;
        border-right:hidden;
       /* background:URL('image/sn.jpg');*/
      /*  background:#003666;*/
       /*  background:#ae9a64;
         background: #97824b;*/
         background:#016773;
        /* border-top:dashed; */
    }
</style>
<h2 class="title text-center"; style="color:#016773">Features Items</h2>
   <?php  foreach($all_published_product as $v_published_product) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
    <img src="{{URL::to($v_published_product ->product_image)}}" style="height:300px; border:1px solid #F0F0E9"  alt="" />
                                            <h2 style="color:#016773">{{$v_published_product ->product_price}} -Tk</h2>
                                            <p>{{$v_published_product ->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
         <div class="product-overlay">
         <div class="overlay-content">
        <h2 >{{$v_published_product ->product_price}} -Tk</h2>
         <p>{{$v_published_product ->product_name}}</p>
         <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart" style="border:1px solid black"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
             <ul class="nav nav-pills nav-justified">
             <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>{{$v_published_product ->manufacture_name}}</a></li>
             <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i><span>View Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<?php } ?>                
                    </div><!--features_items-->
                <hr>
                
                    <div class="recommended_items"><!--recommended_items-->
                      
                        <h2 class="title text-center" style="color:#016773">Upcomming items</h2>   

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">   

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">1200-Tk</h2>
                                                    <p>Argentina Jersy-2018</p>
                                                   {{--  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">21999-Tk</h2>
                                                    <p>Nokia new version-2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">1500- Tk</h2>
                                                    <p>World Cup Football-2018</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">1200-Tk</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">21000-Tk</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                                    <h2 style="color:#016773">1500- Tk</h2>
                                                    <p>World Cup Football-2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev" >
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
                    </div><!--/recommended_items-->
@endsection