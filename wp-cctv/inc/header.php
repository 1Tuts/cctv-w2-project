<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title><?php bloginfo('name'); wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>\1styles.css" rel="stylesheet" type="text/css">
<!--	<link rel="stylesheet" type="text/css" href="1styles.css" />-->
    <link href="<?php bloginfo('template_url'); ?>\styles.less" rel="stylesheet/less" type="text/css">
<!--    <link rel="stylesheet/less" type="text/css" href="styles.less" />-->
    
    <link href="<?php bloginfo('template_url'); ?>\style.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" type="text/css" href="style.css" /><!--css fro cueslider-->
    
    <link href="<?php bloginfo('template_url'); ?>\favicon.ico" rel="shortcut icon" type="image/x-icon">
<!--    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />-->

  	<link href="<?php bloginfo('template_url'); ?>\slide-gallery-product.css" rel="stylesheet" type="text/css">
<!--        <link rel="stylesheet" type="text/css" href="slide-gallery-product.css" /><!--css for slide page gallery product -->

	<link href="<?php bloginfo('template_url'); ?>\style.less" rel="stylesheet/less" type="text/css">
<!--  	<link rel="stylesheet/less" type="text/css" href="style.less" />-->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/less.js"></script>
<!--    <script type="text/javascript" src="scripts/less.js"></script>-->

	
	<script type="text/javascript">
		document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script><!--change-->
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/script.js"></script>
<!--	<script type="text/javascript" src="scripts/script.js"></script>-->
	<!--[if IE]>
		<script type="text/javascript" src="scripts/html5.js"></script>
	<![endif]-->
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/zepto.js"></script>
<!--	<script type="text/javascript" src="scripts/zepto.js"></script>-->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/scripts.js"></script>
<!--	<script type="text/javascript" src="scripts/scripts.js"></script>-->
	
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/cueslider.js"></script>
<!--	<script type="text/javascript" src="scripts/cueslider.js"></script>-->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\scripts/slide-gallery-product.js"></script>
<!--    <script type="text/javascript" src="scripts/slide-gallery-product.js"></script>-->
    
</head>
<body>
	<div class="container">
		<!-- start Header -->
		<header class="cover">
			<a href="./index.php">
				<div class="logo left ">
					<h1>LOGO</h1>
				</div>
			</a>
			<?php
				//include('inc/main-menu.php');
				get_template_part('inc/main-menu');
			?>
		</header>