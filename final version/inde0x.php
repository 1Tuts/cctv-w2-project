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
<div class="div-home">
	<section class='slideshow'>
    	<!--<div class="logo mla mra">
				<h1>CCTV</h1>
		</div>-->
		<section class="backimg">
        
			<script type="text/javascript">
				document.write('<div class="slideshow " id="bgimg1" style="background-image :url(images/gallery/1.png);"></div>');
				document.write('<div class="slideshow " id="bgimg2" style="background-image :url(images/gallery/2.png);"></div>');
				document.write('<div class="slideshow " id="bgimg3" style="background-image :url(images/gallery/3.png);"></div>');
				$('.backimg > div.slideshow').fadeLoop();
			</script>

		</section>
	</section>
   	<div style="min-height:500px"></div>
    <div class="footer-home cover" >
    	<div class="footer-left w9 left cover">
        	<p>Hight Light</p>
            <div class="slide"> 
                <div class="train">
                    <?php
                        $path="images/gallery/footer-gallery/footer";
                        $scan=scandir($path);
						$len = 0;
                        foreach($scan as $img){
                            $exp=explode('.',$img);
                            $type=end($exp);
                            if($type=='png'){
                                echo "<div style=\"background-image:url('$path/$img');\"></div>";
								$len++;
                            }
                        }
                    ?>
                </div>                                          
            </div>         
	        <div class="gallery-thumbs ">
	             <ul class="button">
	                <?php                         
	                    for($i=0;$i<$len;$i++){
	                       echo "<li></li>";
	                    }
	                ?> 
	            </ul>        
	        </div> 
	           
        </div>
        <div class="footer-right right">
        	<p>Quick Links</p>
            <nav class="nav-qlink left">
            	<ul>
                	<li><a href="#">Drivers & Downloads</a></li>
                    <li><a href="#">Drivers & Downloads</a></li>
                    <li><a href="#">Drivers & Downloads</a></li>
                </ul>
            </nav>
            <div class="img-about"></div>
        </div>
    </div>
</div>
    <?php
		include "inc/footer.php";
	?>
<!--   
 </body>
 </html>-->