<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a href="#">پرسش و پاسخ  </a>
		<a class="next-link" href="#"> <?php the_title(); ?></a>
	</div>
	<div class="content-pr cover">
		<nav class="content-pr-nav"></nav>
		<div class="info left cover">
           	<div class="footer-note">در این بخش شما می توانید سوال های خود را در زمینه های زیر بپرسید</div>
            <div class="content-attr  pt1 pr1 pl1">
                 <?php
					wp_nav_menu(array(
						'theme_location'  => 'Question menu',
						'container'       => false, 
						'container_class' => '', 
						'menu_class'      => '', 
						'before'          => '',
						'after'           => '',
						'link_before'     => '<div class="bg-green"></div>',
						'link_after'      => '<div class="bg-end"></div>',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
					));
				?>
            </div>
            <div class="bottom-bg"></div>
		</div>
	</div>
</section>
