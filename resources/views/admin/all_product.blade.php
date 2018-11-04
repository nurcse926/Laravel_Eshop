<link rel="shortcut icon" href="{{URL::to('backend/img/favicon.png')}}">
@extends('admin_layout')
@section('admin_content')
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
     <style>
.alert-success{	
	background:#9c9;
	color:green;
	font-weight: bold;
	padding-left: 20px;
	width: 250px;
	margin-left: 200px;
}
.box-content{
	width: 950px;
	margin-left: -130px;
}
.box-header{
	width: 950px;
	margin-left: -130px;
}
.breadcrumb{
	margin-left: -135px;
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
<style>
	.box-header{
		background:#9c9;
	}
.breacrumb{
	background: green;
}
</style>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span><b>Product List</b></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Product ID</th>
								  <th>Product Name</th>
								  <th>Product Image</th>
								  <th>Product Price</th>
								  <th>Category Name</th>
								  <th>Manufacture</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  @foreach($all_product_info as $v_product)
						  <tbody>
							<tr style="background-color: red">
							<td>{{ $v_product->product_id }}</td>
							<td class="center">{{$v_product->product_name}}</td>
							<td><img src="{{URL::to($v_product->product_image)}}" style="height: 75px; width: 105px; border-radius: 1px; border: 1px solid gray">
							<td class="center">{{$v_product->product_price}}-Tk</td>
							<td class="center">{{$v_product->category_name}}</td>
							<td class="center">{{$v_product->manufacture_name}}</td>
							<td class="center">
								
								@if($v_product->publication_status==1)
								<span class="label label-success">Active
								</span>
								@else
								<span class="label label-danger">
										Unactive
								</span>

								@endif
								</td>
									<td class="center">		
							       @if($v_product->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
									<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you sure delete?')" 
									 href="{{URL::to('/delete_product/'.$v_product->product_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
						 @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
@endsection;