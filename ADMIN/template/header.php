<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="login.php">
							<i class="fas fa-lock"> Sign In </i></a>
					</span>
					<span>
						<a href="register.php">
							<i class="far fa-user"> Register </i> </a>
					</span>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php?page=home">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?page=about">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Category
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php


									$sel="select * from `category`";
									$qry=mysqli_query($con,$sel);
									while($rw=mysqli_fetch_Assoc($qry)){



									?>
									<a class="dropdown-item" href="index.php?page=subcat&category_id=<?php echo $rw['category_id']?>"><?php echo $rw['category_name']?></a>
									
								<?php }?>
									

								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>

						</ul>
							<form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
								<button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>