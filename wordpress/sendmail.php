<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">
		body {
			background-color: #F4F4F4;
		}

		.ok {
			color:#23B3AB;
			text-align: center;
		}

		.err {
			color:#BD5B3D;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin          = 'somaieh.soodmand@gmail.com';
		$name           = $_POST['name'];
		$email          = $_POST['email'];
		$text           = $_POST['txt'];
		$numberfactor   = $_POST['numberfactor'];
		$model          = $_POST['model'];
		$numbergarantee = $_POST['numbergarantee'];
		$tell           = $_POST['tell'];


		if( strlen($name)>=3 && strlen($email)>=7 && strlen($numberfactor)>=5 && strlen($text)>=10 && strlen($model)>=3 && strlen($numbergarantee)>=5 && strlen($tell)>=7 ){
			if( @mail (
					$admin,
					"soudmand.ir contact : فرم گارانتی",
					"From:$name <$email",
					"tell : $tell",
					"شماره گارانتی : $numbergarantee",
					"مدل : $$model",
					"شماره فاکتور : $numberfactor",
					$text
				)
			){
				echo '<h2 class="ok">Information sent</h2>';
			}else{
				echo '<h2 class="err">Error in sending Information.</h2>';
			}
		}else{
			echo '<h2 class="err">Access Restricted !</h2>';
		}
	?>
</body>
</html>