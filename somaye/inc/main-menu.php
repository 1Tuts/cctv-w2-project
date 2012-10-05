<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
	
/*	$(document).ready(function () { 

		$('#nav li a').mouseover(
			function () {
				$('ul', 'li').animate({
					top:"0"
				},3000);
			} 
		);
		$('#nav li').mouseout(
			function () {
				$('ul', this).animate({
					top:"-500"
				},3000);
			}
		);

	});
*/
$(document).ready(function () { 
	$('#nav li').hover(
		function () {
		$('ul', this).slideDown(600);
	},function () {
			$('ul', this).slideUp(600);
		}
	);
});

</script>
<nav class="mainmenu">
	<ul id="nav">
		<li><a href="#">محصولات</a>
			<ul>
				<li class="active"><a href='#'>مصرف کننده</a></li>
				<li><a href='#'>نوت بوک</a></li>
				<li><a href='#'>ultrabooks</a></li>
				<li><a href='#'>نت بوک</a></li>
				<li><a href='#'>تبلت</a></li>
				<li><a href='#'>دسکتاپ</a></li>
				<li><a href='#'>مانیتور</a></li>
				<li><a href='#'>پروژکتور</a></li>
				<li><a href='#'>انتخاب</a></li>
				<li class="blue"><a href='#'>clear.fi</a></li>
							</ul>	
		</li>
		<li><a href="#"> پشتیبانی</a>
			<ul>
				<li><a href="#">مزیت ایسر</a></li>
				<li><a href="#">درایور ها و دانلود</a></li>
				<li><a href="#">آپدیت نرم افزار ها</a></li>
				<li><a href="#"></a></li>
			</ul>
		</li>
		<li><a href="#">ارتباط با ما</a></li>
	</ul>
</nav>
			