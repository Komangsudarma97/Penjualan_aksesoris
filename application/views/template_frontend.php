<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/Variasi-Velg.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SINAR BAN</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?=base_url();?>assets/index.php"><img src="<?=base_url();?>assets/img/LOGO2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?=site_url('Frontend/template_frontend');?>">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="<?=base_url();?>assets/#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?=site_url('Frontend/category');?>">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="<?=site_url('Frontend/checkout');?>">Product Checkout</a>
									</li>
									<li class="nav-item"><a class="nav-link" href="<?=base_url('Frontend/keranjang');?>">Shopping Parts</a></li>
									</li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="<?=base_url();?>assets/#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?=site_url("Frontend/login");?>">Login</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?=site_url('Frontend/kontak');?>">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
				
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Choose Your Part <br>Collection!</h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?=base_url();?>assets/img/banner/Variasi-Ban-Velg.png" alt="">
								</div>
							</div>
						</div>
				</section>
	<!-- End banner Area -->

	<!-- start product Area -->
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>PRODUCT</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php foreach($barang_id as $val){?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?=base_url('media/images/'.$val['gambar']);?>" alt="">
							<div class="product-details">
								<h6><?=$val['nama_barang'];?></h6>
								<div class="price">
									<h6><?=$val['harga'];?></h6>
								</div>
								<div class="prd-bottom">

									<a href="<?=base_url();?>assets/" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" >add to bag</p>
									</a>
									<a href="<?=base_url();?>assets/img/product/Pelek Te37.png" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		

	<!-- Start brand Area -->
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/images.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/SSR.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/Work-Wheels_logo.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/Yokohama_logo_24.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/accelera.png" alt="">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="<?=base_url();?>assets/img/brand/hsr.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
										required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
											aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
											type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="<?=base_url();?>assets/#"><i class="fa fa-facebook"></i></a>
							<a href="<?=base_url();?>assets/#"><i class="fa fa-twitter"></i></a>
							<a href="<?=base_url();?>assets/#"><i class="fa fa-dribbble"></i></a>
							<a href="<?=base_url();?>assets/#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?=base_url();?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?=base_url();?>assets/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script src="<?=base_url();?>assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.nice-select.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.sticky.js"></script>
	<script src="<?=base_url();?>assets/js/nouislider.min.js"></script>
	<script src="<?=base_url();?>assets/js/countdown.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="<?=base_url();?>assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?=base_url();?>assets/js/gmaps.min.js"></script>
	<script src="<?=base_url();?>assets/js/main.js"></script>
</body>

</html>