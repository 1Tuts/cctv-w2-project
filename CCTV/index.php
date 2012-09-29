<?php
	//if(!isset($_GET['debug']))  header('Location: CCTVunder-construction.html');
?>
<!--
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
	<!--<script type="text/javascript">
		document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script>

	<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>-->
<?php
	include "inc/header.php";
?>
	<section class='slideshow'>
    	<!--<div class="logo mla mra">
				<h1>CCTV</h1>
		</div>-->
		<section class="backimg">
        
			<script type="text/javascript">
				document.write('<div class="slideshow " id="img1" style="background-image :url(images/gallery/1.png);"></div>');
				document.write('<div class="slideshow " id="img2" style="background-image :url(images/gallery/2.png);"></div>');
				document.write('<div class="slideshow " id="img3" style="background-image :url(images/gallery/3.png);"></div>');
				$('.backimg > div.slideshow').fadeLoop();
			</script>

		</section>
	</section>
    <?php
		echo "<div style='min-height:630px;'></div>";
		include "inc/footer.php";
	?>
<!--   
 </body>
 </html>-->