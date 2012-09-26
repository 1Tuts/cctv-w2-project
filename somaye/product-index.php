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
				<div class="logo left">
			
					<h1>LOGO</h1>
				</div>
			</a>
			<nav>
			<img src="images/product/menu_background.png" /> 
				<ul>
					<li><a href="#">محصولات</a>
						<ul>
							<li><a href="#">محصولات</a></li>
							<li><a href="#">اطلاعات خرید</a></li>
							<li><a href="#">پشتیبانی</a></li>
						</ul>	
					</li>
					<li><a href="#">اطلاعات خرید</a>
						<ul>
							<li><a href="#">محصولات</a></li>
							<li><a href="#">اطلاعات خرید</a></li>
						</ul>
					</li>
					<li><a href="#">پشتیبانی</a>
						<ul>
							<li><a href="#">محصولات</a></li>
						</ul>
					</li>
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
						<li><a href='images\product\view\1.jpg' target='view-product'>نوت بوک</a></li>
						<li><a href='images\product\view\2.jpg' target='view-product'>ultrabooks</a></li>
						<li><a href='images\product\view\3.jpg' target='view-product'>نت بوک</a></li>
						<li><a href='images\product\view\4.jpg' target='view-product'>تبلت</a></li>
						<li><a href='images\product\view\5.jpg' target='view-product'>دسکتاپ</a></li>
						<li><a href='images\product\view\6.jpg' target='view-product'>مانیتور</a></li>
						<li><a href='images\product\view\7.jpg' target='view-product'>پروژکتور</a></li>
						<li><a href='images\product\view\8.jpg' target='view-product'>انتخاب</a></li>
					</ul>
				</div>
				<iframe id='view-product' src="images\product\view\1.jpg" name='view-product' frameborder="1" scrolling="no"></iframe>	
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