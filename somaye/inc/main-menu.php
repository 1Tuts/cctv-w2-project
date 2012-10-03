<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function () { 

		$('#nav li').hover(
			function () {
			$('ul', this).slideDown(400);
		},function () {
				$('ul', this).slideUp(400);
			}
		);
	});
</script>
<nav class="mainmenu">
	<ul id="nav">
		<li><a href="#">محصولات</a>
			<ul>
				<li><a href="product-index.php">محصولات</a></li>
				<li><a href="#">اطلاعات خرید</a></li>
				<li><a href="#">پشتیبانی</a></li>
			</ul>	
		</li>
		<li><a href="#"> پشتیبانی</a>
			<ul>
				<li><a href="#">محصولات</a></li>
				<li><a href="#">اطلاعات خرید</a></li>
			</ul>
		</li>
		<li><a href="#">ارتباط با ما</a></li>
	</ul>
</nav>
			