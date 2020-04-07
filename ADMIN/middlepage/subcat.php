
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog3</li>
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
		<!---728x90--->

			<h3 class="tittle">Blog Posts</h3>
			<!---728x90--->
			<div class="inner-sec">
				<!--left-->
				<div class="left-blog-info-w3layouts-agileits text-left">
					<div class="row">
						<?php

                       
                       	$sel="select * from `sub_category` where category_id='".$_REQUEST['category_id']."'";
					  $qry=mysqli_query($con,$sel);
				while($rw=mysqli_fetch_Assoc($qry)){



						?>
						<div class="col-lg-4 card">
							<a href="single.html">
								<img src="images/7.jpg" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title">
									<a href="single.html"><?php echo $rw['name']?></a>
								</h5>
								<!-- <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p> -->
								<a href="single.html" class="btn btn-primary read-m">View More</a>
							</div>
						</div>
					<?php }?>
						
						<!-- <nav aria-label="Page navigation example">
							<ul class="pagination justify-content-left mt-4">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav> -->
					</div>
					<!--//left-->
				</div>
			</div>
		</div>
	</section>
	<!--//main-->
	<!---728x90--->
	<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
					<div class="read">
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Latest Posts</h3>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/4.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/5.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/6.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter your email..." required="">
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>
							<div class="clearfix"> </div>
						</div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2018 Weblog. All Rights Reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>

				</div>
			</div>

			<!-- //footer -->


		</div>
	</footer>
	<!---->

