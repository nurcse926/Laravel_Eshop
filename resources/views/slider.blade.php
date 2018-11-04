 <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">


<style>
@-webkit-keyframes blink {from , to { border-color:transparent}
50%{border-color:#016773}
}/*<!--from   ww  w  .  j a v  a2  s  .  c o m-->*/
@-moz-keyframes blink {from , to { border-color:transparent}
50%{border-color:red}}
#bor {
  width: 270px;
  height: 50px;
  border-style:dashed!important;
  border:1px solid red;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
}
</style>

                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <?php 
                            $all_published_slider=DB::table('tbl_slider')
                                                 ->where('publication_status',1) 
                                                 ->get();
                                                 $i=1;
                                        foreach ($all_published_slider as $v_slider) { 
                                        if($i==1){
                                            ?>
                            <div class="item active">
                                <?php } else { ?>

                                  <div class="item item">
                                    <?php  } ?>
                                <div class="col-sm-4">

                                    <div id="bor">
                                    <h2 style="padding-left:15px"> <span style="color: #A25016 ">Hot Offer!! 32% Off</span></h2>
                                    </div>

                                    <h2 "><span style="color:#016773">Ecstasy Online Shop</span></h2>
                                   

                                    <p>বাংলাদেশের প্রতিশ্রুতিবদ্ধ ই-শপ</p>
                                    <p>We are recommended to trendy fashion!. </p>

                               
 {{-- <button style="background: #016773; border-radius: 2px; border:1px solid #000" type="button" class="btn btn-default get">Get it now</button> --}}
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{URL::to($v_slider->slider_image)}}" class="girl img-responsive" alt=""  style="height: 350px" />
                              {{-- <img src="{{URL::to('frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>  
                            </div>
                           <?php  $i++; } ?>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/slider-->