<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less" />

	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
		<script type="text/javascript" src="scripts/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="scripts/zepto.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>


</head>
<body>
	<div class="container">
		<!-- start Header -->
		<header class="cover">
			<a href="#">
				<div class="logo left"><a href="#">
			
					<h1>LOGO</h1>
				</div>
			</a>
			<nav class="main">
				<ul>
					<li><a href="#">محصولات</a></li>
					<li><a href="#">اطلاعات خرید</a></li>
					<li><a href="#">پشتیبانی</a></li>
				</ul>
			</nav>
		</header>
		<!-- start div product -->
		<section class="product-box w24 cover mt3">
			<div class="commerical-box">
				<div class="commerical cover">
					<a class="left" href="#">بازرگانی</a>
					<span class="left last w15"></span>	
				</div>
			</div>
			<div class="product">
				<div class="list-product right">
					<ul>
						<li><a href='#'>نوت بوک</a></li>
						<li><a href='#'>ultrabooks</a></li>
						<li><a href='#'>نت بوک</a></li>
						<li><a href='#'>تبلت</a></li>
						<li><a href='#'>دسکتاپ</a></li>
						<li><a href='#'>مانیتور</a></li>
						<li><a href='#'>پروژکتور</a></li>
						<li><a href='#'>انتخاب</a></li>
					</ul>
				</div>
				<div class="view">
					<div class="preview">
						<div class="train">
							<?php
								$path='images/product/view';
								$scan=scandir($path);
								foreach($scan as $img){
									$exp=explode('.',$img);
									$type=end($exp);
									if($type=='jpg'){
										echo "<div style=\"background-image:url('$path/$img');\"></div>";
									}
								}
							?>
						</div>
					</div>
				</div>		
				<!-- <iframe class="" id='view-product' name='view-product' src="images/product/product_banner_notebook.jpg" frameborder="1" scrolling="no"></iframe> -->
			</div>



		</section>
		<section class="box-banner w24 cover mt4">
			<a href="#">
				<div class="banner right w6"></div>
			</a>
		</section>
		<?php
			include('inc/footer.php');
		?>