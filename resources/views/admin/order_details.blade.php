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
								 
							  </tr>
						  </thead>   
						 
						  <tbody>	
						<tr>
						<td class="center">				
								</td>
							</tr>
						  </tbody>
						
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
@endsection