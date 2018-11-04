@extends('welcome')
@section('content')
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
<p class="alert-success">
                        <?php 
                        $message=Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message', NULL);
                        }
                        ?>
                    </p>    

<h2 class="title text-center"  style="color:#016773">Features Items</h2>
   <?php  foreach($data as $v_search_product) { ?>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
    <img src="{{URL::to($v_search_product->product_image)}}" style="height:300px; border:1px solid #F0F0E9"  alt="" />
                                            <h2  style="color:#016773">{{$v_search_product ->product_price}} -Tk</h2>
                                            <p>{{$v_search_product ->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
         <div class="product-overlay">
         <div class="overlay-content">
        <h2>{{$v_search_product ->product_price}} -Tk</h2>
         <p>{{$v_search_product ->product_name}}</p>
         <a href="{{URL::to('/view_product/'.$v_search_product->product_id)}}" class="btn btn-default add-to-cart" style="border:1px solid black"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                    {{--             <div class="choose">
             <ul class="nav nav-pills nav-justified">
             <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>{{$v_published_product ->manufacture_name}}</a></li>
             <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
<?php
 } ?>                
      </div><!--features_items-->

@endsection