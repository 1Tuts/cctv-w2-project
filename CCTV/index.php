<?php
	//if(!isset($_GET['debug']))  header('Location: CCTVunder-construction.html');
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>CCTV</title>
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
		<script type="text/javascript" src="scripts/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script>

	<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
	<!--<header>
	<section class="nav-container">	
		<div class="nav">
			
			<ul class="mla">
				<li><a href="./">خانه</a></li>
				<li><a href="about.php">درباره ما</a></li>
				<li><a href="document.html">گواهینامه ها</a></li>
				<li><a href="project.html">پروژه ها </a></li>
				<li><a href="#"> خدمات</a></li>
				<li><a href="#"> پیوند ها</a></li>
				<li><a href="contact.php"> تماس با ما</a></li>
			</ul>		
		</div>
				
	</section>
	</header>-->
	<section class='slideshow'>
    	<div class="logo mla mra">
				<h1>CCTV</h1>
		</div>
		<section class="backimg">
        
			<script type="text/javascript">
				for(var i=1;i<4;i++) document.write('<div class="slideshow img'+i+'" onclick="img()"  style="background-image :url(images/gallery/'+i+'.jpg);"></div>');
				$('.backimg > div.slideshow').fadeLoop();
			</script>

		</section>
	</section>
    
 </body>
 </html>