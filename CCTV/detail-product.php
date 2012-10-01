<?php
	global $product;
	include 'inc/header.php';
	include "inc/detail-product-menu.php";
	if ($product === 'mazaya'){	
		include 'inc/body-detail-product.php';
		
	}elseif($product === 'gallery'){
		include 'detail-product-gallery.php';
	}
	
	include 'inc/footer.php';
?>