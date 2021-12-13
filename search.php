<?php
session_start();
include 'dbconnect.php';

$s = $_POST['Search'];
?>
<!DOCTYPE html>
<html>
<head>
<title>HIGH n JAR' - Pencarian</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tokopekita, Richard's Lab" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<style>
	.navbar-default {
    background: none;
	background-color: #d1b398;
    border: none;
    text-align: center;}

	.navigation-agileits {
	background-color: #d1b398 !important;}

	.w3_footer_grid ul.address li i {
    color: #e6d9c9;
    border: 1px solid #e6d9c9;
    padding: 0.5em;
    margin-right: 1em;
	}

	button.btn.btn-default.search {
    background: #d1b398;
    padding: 11px 12px 11px;
    float: right;
    outline: none;
    border: none;
	}

	html, body{
    font-size: 100%;
	font-family: 'Open Sans', sans-serif;
	background:#ece7deee;
	}

	.breadcrumbs {
    padding: 1.5em 0;
    background: #ece7deee;
	}
	.breadcrumb1 li a {
    color: #d0b298;
    text-decoration: none;
	}
	.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #ece7deee;
    border-radius: 4px;}

	.top-brands h2:after, .newproducts-w3agile h3:after, .login h2:after, .register h2:after, .faq-w3agile h3:after, .brands h3:after {
    content: '';
    background: #d0b298;
    height: 2px;
    width: 15%;
    position: absolute;
    bottom: 0%;
    left: 43%;
	}

	.snipcart-details input.button {
	font-size: 14px;
    color: #fff;
    background: #d0b298;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: 0.5em 0;
    outline: none;}

	.agile_top_brand_left_grid:hover .snipcart-details input.button,.snipcart-details input.button:hover{
    background: #e6d9c9;
	}

	.w3_footer_grid ul.address li i {
    color: #e6d9c9;
    border: 1px solid #e6d9c9;
    padding: 0.5em;
    margin-right: 1em;}

	.ul.multi-column-dropdown h6 {
    font-size: 20px;
    color: #d0b298;
    margin: 0 0 0em;
    padding-bottom: 1em;
    border-bottom: 1px solid #E4E4E4;
    text-transform: capitalize;}

	.snipcart-details input.button {
    font-size: 14px;
    color: #fff;
    background: #d0b298;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: 0.5em 0;
    outline: none;
	}

	.w3ls_logo_products_left h1 a {
    font-size: 40px;
    color: #d1b398;
    text-decoration: none;
    text-transform: uppercase;
    display: block;
    line-height: 1;
	}

	.login p a {
    color: #d1b398;
    text-decoration: none;
    font-size: 1.2em;
    padding: 0 0.5em;
	}

	.login p a {
    color: #d1b398;
    text-decoration: none;
    font-size: 1.2em;
    padding: 0 0.5em;
	}

	.login-form-grids input[type="submit"] {
    outline: none;
    border: none;
    padding: 10px 0;
    font-size: 1em;
    color: #fff;
    display: block;
    width: 100%;
    background: #d1b398;
    margin: 1.5em 0 0;}

	.login-form-grids input[type="submit"]:hover{
	background:#e6d9c9};

	.register-home a {
    padding: 8px 45px;
    background: #e6d9c9;
    color: #fff;
    font-size: 1em;
    text-decoration: none;	}

	.register-home a{
	padding: 8px 45px;
    background: #e6d9c9;
	color:#fff;
	font-size:1em;
	text-decoration:none;}

	.register-home a:hover{
	background:#d1b398;}

	.timetable_sub th {
    background: #e6d9c9;
    color: #fff !important;
    text-transform: capitalize;
    font-size: 13px;
    border-right: 1px solid #e6d9c9;
	}

	.checkout-left-basket h4 {
    padding: 1em;
    background: #d1b398;
    font-size: 1.1em;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin: 0 0 1em;
	}

	.checkout h2 span {
    color: #d1b398;
	}


</style>	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			</div>
			<div class="agile-login">
				<ul>
				<?php
				if(!isset($_SESSION['log'])){
					echo '
					<li><a href="registered.php"> Daftar</a></li>
					<li><a href="login.php">Masuk</a></li>
					';
				} else {
					
					if($_SESSION['role']=='Member'){
					echo '
					<li style="color:white">Halo, '.$_SESSION["name"].'
					<li><a href="logout.php">Keluar?</a></li>
					';
					} else {
					echo '
					<li style="color:white">Halo, '.$_SESSION["name"].'
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					';
					};
					
				}
				?>
					
				</ul>
			</div>
			<div class="product_list_header">  
					<a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""></button>
					 </a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami : (+62) 812 3456 78992</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">HIGH n JAR'</a></h1>
			</div>
		<div class="w3l_search">
			<form action="search.php" method="post">
				<input type="search" name="Search" placeholder="Cari produk...">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Produk<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Kategori</h6>
														
														<?php 
														$kat=mysqli_query($conn,"SELECT * from kategori order by idkategori ASC");
														while($p=mysqli_fetch_array($kat)){

															?>
														<li><a href="kategori.php?idkategori=<?php echo $p['idkategori'] ?>"><?php echo $p['namakategori'] ?></a></li>
																				
														<?php
																	}
														?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li><a href="cart.php">Keranjang Saya</a></li>
									<!-- <li><a href="konfirmasi.php">Daftar Order</a></li> -->
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php">Home</a></li>
				<li class="active">Kategori</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">
						
						
						<?php 
														$kat=mysqli_query($conn,"SELECT * from kategori order by idkategori ASC");
														while($p=mysqli_fetch_array($kat)){

															?>
														<li><a href="kategori.php?idkategori=<?php echo $p['idkategori'] ?><?php echo $p['namakategori'] ?></a></li>
																				
														<?php
																	}
														?>
							
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="agile_top_brands_grids">
				
				
				<?php 
					$brgs=mysqli_query($conn,"SELECT * from produk where namaproduk like '%$s%' or deskripsi like '%$s%' order by idproduk ASC");
					$x = mysqli_num_rows($brgs);
					
					if($x>0){
					while($p=mysqli_fetch_array($brgs)){
					?>
						
						<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/sale.png" alt=" " class="img-responsive" />
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><img src="<?php echo $p['gambar']?>" width="200px" height="200px"></a>		
												<p><?php echo $p['namaproduk'] ?></p>
												<h4>Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<fieldset>
													<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
												</fieldset>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
						<?php
							}
					} else {
						echo "Data tidak ditemukan, coba kata kunci lainnya";
					}
						?>
					
						<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- beverages --->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<h3>Hubungi Kami</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>DKI Jakarta.</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@email">info@email</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>(+62) 812 3456 78992</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2021 HIGH n JAR'</p>
			</div>
		</div>
		
	</div>	
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>