
<nav class="mainmenu">
	<ul id="nav">
    	
        <?php
			//wp_list_pages(array('title_li'=>''));
			wp_nav_menu(array(
				'theme_location'  => 'main menu',
				'container'       => false, 
				'container_class' => '', 
				'menu_class'      => '', 
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
			));
		?>
    	<!--
		<li><a href="product-index.php">محصولات</a>
			<ul>
				<li class="active"><a href='#'>مصرف کننده</a></li>
				<li><a href='product-detail.php'>نوت بوک</a></li>
				<li><a href='product-detail.php'>ultrabooks</a></li>
				<li><a href='product-detail.php'>نت بوک</a></li>
				<li><a href='product-detail.php'>تبلت</a></li>
				<li><a href='product-detail.php'>دسکتاپ</a></li>
				<li><a href='product-detail.php'>مانیتور</a></li>
				<li><a href='product-detail.php'>پروژکتور</a></li>
				<li><a href='product-detail.php'>انتخاب</a></li>
				<li class="blue"><a href='product-detail.php'>clear.fi</a></li>
			</ul>	
		</li>
		<li><a href="#"> پشتیبانی</a>
			<ul>
				<li><a href="buy-index.php">فروش</a></li>
				<li><a href="./download-index.php">دانلود دریور</a></li>
				<li><a href="#">فرم گارانتی</a></li>
                <li><a href="./question.php">پرسش و پاسخ</a></li>
			</ul>
		</li>
		<li><a href="contact-index.php">مقالات تخصصی</a>
  	        <ul>
				<li><a href="#">مقاله 1</a></li>
				<li><a href="#">مقاله 2</a></li>
				<li><a href="#">مقاله 3 </a></li>
                <li><a href="./catalog-index.php">دانلود مقالات</a></li>
			</ul>
        </li>-->
	</ul>
</nav>
			