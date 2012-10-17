<nav class="left-menu right">
	<?php
		wp_nav_menu(array(
			'theme_location'  => 'left menu',
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
</nav>