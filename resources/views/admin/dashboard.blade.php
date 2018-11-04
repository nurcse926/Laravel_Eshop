@extends('admin_layout')
@section('admin_content')
<style>
.nur{
	position: absolute;
	 position: fixed;
    bottom: 300px;
    background: rgba(0, 0, 0, 0.0);
    color: #9c9;
    width:500px;
    margin-left: 300px;
    padding: 20px;
    border-bottom: hidden;
    font-family: Poiret One
}
</style>
<video autoplay loop id="video-background" muted plays-inline>
  <source src="{{URL::to('frontend/images/home/dark.mp4')}}" type="video/mp4">
</video>
<div class="nur"><span style="font-weight: bold; color:#8e3c0c; font-size:50px; padding-left:70px;padding-top:10px ">Fashi<span style="font-size: 32px">&hearts;</span>n<i style="color: green">C</i>loud</span>
<p style="margin-left: 168px">বাংলাদেশের প্রতিশ্রুতিবদ্ধ ই-শপ </p>
	<hr>
</div>
			<style>
				#content{
					background: black!important;
				}
			</style>
<div id="content"></div>
			@endsection