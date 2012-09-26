<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<link type="text/css" rel="stylesheet" href="slide-product.css" />

	<script type="text/javascript" src="scripts/zepto.js" ></script>
	<script type="text/javascript" src="scripts/slide-product.js" ></script>

</head>

<body style="background-color:#555;">

<div class="container">
    <div class="slide">
		<div class="scroll">
			<div class="train">
				<?php
					$path = 'images/name-product/slide';
					$files = scandir($path);
					$len = 0;
					foreach($files as $file){
						$type = explode('.',$file);
						$type = strtolower(end($type));
						if($type ==  'jpg'){
							echo "<div ><img src='$path/$file' />";
							echo '</div>';
							$len++;
						}
					}
				?>
			</div>
			
			<ul class="btn">
				<?php
					for($i = 0; $i<$len; $i++){
						echo "<li></li>";
					}
				?>
			</ul>
		</div>
	</div>
</div>

</body>
</html>