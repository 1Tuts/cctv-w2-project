<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title><?php bloginfo('name'); wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/1styles.css" rel="stylesheet" type="text/css">
    
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
    
    <link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">

  	<link href="<?php bloginfo('template_url'); ?>/slide-gallery-product.css" rel="stylesheet" type="text/css">

	<link href="<?php bloginfo('template_url'); ?>/style.less" rel="stylesheet/less" type="text/css">
    
    <link href="<?php bloginfo('template_url'); ?>/newstyle.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/less.js"></script>

	<script type="text/javascript">
		document.write('<script type="text/javascript" src=<?php bloginfo('template_url'); ?>/scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>

	<!--[if IE]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/html5.js"></script>
	<![endif]-->
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/scripts.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/cueslider.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/slide-gallery-product.js"></script>
   <script type="text/javascript">
		window.onload = function(){
			document.getElementById('loading').style.display='none';
		}
	</script>

    
</head>
<body class="preload">
	<div id="loading">
		<div class="con">
			<div class="circle"></div>
			<div class="circle1"></div>
		</div>
    </div>
	<div class="container">
		<!-- start Header -->
		<header class="cover">
			<a href="/wp-cctv/wordpress/">
				<div class="logo left ">
					<h1>LOGO</h1>
				</div>
			</a>
			<?php
				get_template_part('inc/main-menu');
			?>
		</header>