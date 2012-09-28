<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Name Products</title>
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
		<script type="text/javascript" src="scripts/html5.js"></script>
	<![endif]-->

</head>
<body class="name-product">

    <div class="container mlra content-name-product cover">
    	<header class="mh12">
    		MAIN MENU
    	</header>
    	<menu class="cover">
        	<ul class="right f10">
            	<li><a href="#">محصولمحصول 1</a></li>
                <li><a href="#">محصول 2</a></li>
                <li><a href="#">محصول 3</a></li>
                <li><a href="#">محصول 4</a></li>
                <li><a href="#">محصول 5</a></li>
                <li><a href="#">محصول 6</a></li>
            </ul>
        </menu>
        
         <section class="light-box-name-product cover">
            <p class="mt2 mr1 mb2 txr">گالری</p>
        	<?php
			  include "test3.php";
			?>
        </section>
        
        <section class="slide-name-product cover">
        	<?php
				include "slide-product.php";
			?>
        </section>
       
       <?php
	    	include "inc/footer.php";
	   ?>