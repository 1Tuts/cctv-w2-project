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
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
				));
			?>
		</div>
		<div class="view-pro cover">
			<div class="scroll">
            <?php
				if( have_posts() ) {
					the_post(); 
					 
					$argus=array(
			          'numberposts' =>'-1',
			          'orderby '=> 'menu_order',  
			          'order'=> 'ASC',  
			          'post_mime_type' => 'image', 
			          'post_parent' => $post->ID, 
			          'post_status' => null, 
			          'post_type' => 'attachment'
			        ); 
					$images = get_children($argus);
					if($images){
		          		foreach ($images as $img) {
		                	$img_larg = wp_get_attachment_image($img->ID,'middel');
		                	echo "<div class='pro'><a href='#'>$img_larg</a></div>";
						}
	        		}else echo 'تصویر وجود ندارد';
				}
			?>
			</div>
		</div>
	</div>
</section>
