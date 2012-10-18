<!-- start About info -->
		<section class="about-content cover">

			<div class="nav cover mt2">
				<a href="#">درباره شرکت</a>
				<span></span>
                 <?php
					if( have_posts() ) {
						the_post(); 
				?>
				<a class="next-link" href="#"><?php the_title(); ?></a>

			</div>
			<div class="top-pic"></div>
			<div class="about-info cover">
				<?php
					get_template_part('inc/left-menu');
				?>

				<div class="info left">
					<p class="mt1"><?php the_content(); ?></p>
                    <?php
					$meta = get_post_custom();
	                if(count($meta['img'])>0){
						foreach ($meta['img'] as $img_id) {
							$img_small = wp_get_attachment_image($img_id,'middle'); // default: thumbnail
							echo "$img_small";
					  	}
					}	
				}
			?>
				</div>
			</div>
			<div class="bottom-pic"></div>
		</section>