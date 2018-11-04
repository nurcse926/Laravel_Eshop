@extends('welcome')
@section('content')

<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center" style="color:#016773">Welcome to Blog</h2>
						<div class="single-blog-post">
					
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i>Nur</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i><?php 
										echo date("D/M/Y");
										?></li>
								</ul>
								{{-- <span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span> --}}
							</div>
							<a href="">
								<img src="{{URL::to('frontend/images/blog/abt.png')}} " alt="" style="height: 450px; width: 380px">
							</a>
							<p>
								 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <br>

							<p>
								Excepteur sint occaecat cupidatat non proident, sunt in culpa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <br>

							<p>
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> <br>

							<p>
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							
						</div>
					</div><!--/blog-post-area-->

						
					<div class="replay-box">

						<div class="row">
							<div class="col-sm-4">
								<h2>Leave a replay</h2>
								<form>
									<div class="blank-arrow">
										<label>Your Name</label>
									</div>
									<span>*</span>
									<input type="text" placeholder="write your name...">
									<div class="blank-arrow">
										<label>Email Address</label>
									</div>
									<span>*</span>
									<input type="email" placeholder="your email address...">
									<div class="blank-arrow">
										<label>Web Site</label>
									</div>
									<input type="email" placeholder="current city...">
								</form>
							</div>
							<div class="col-sm-8">
								<div class="text-area">
									<div class="blank-arrow">
										<label>Your Name</label>
									</div>
									<span>*</span>
									<textarea name="message" rows="11"></textarea>
									<a class="btn btn-primary" href="">post comment</a>
								</div>
							</div>
						</div>
							
					</div><!--/Repaly Box-->

				</div>

			</div>

		</div>
	

	</section>
	

@endsection


