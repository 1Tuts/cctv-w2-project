<!-- start div product -->
<section class="product-box w24 cover mt3">
	<div class="commerical-box">
		<div class="commerical cover">
			<a class="left" href="#">بازرگانی</a>
			<span class="left last w15"></span>	
		</div>
	</div>
	<div class="product cover">
		<div class="list-product right cover">
			<?php
				wp_nav_menu(array(
					'theme_location'  => 'products menu',
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
		</div>
		<div class="view-pro cover">
			<div class="scroll">
			<?php
				if( have_posts() ) {
					the_post();
					$meta = get_post_custom();	
					if(count($meta['img'])>0){
						foreach ($meta['img'] as $img_id) {
							$img_large = wp_get_attachment_image($img_id,'middle');
							echo "<div class='pro'><a href='#'>$img_large</a></div>"; 
						}
					}
				}
			?>
			</div>
		</div>
	</div>
</section>
