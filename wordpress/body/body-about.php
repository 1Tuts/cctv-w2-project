<!-- start About info -->
<section class="about-content cover">
	
    <div class="top-pic mt5"></div>
    <div class="about-info cover">
        <?php
            get_template_part('inc/left-menu');
			if( have_posts() ) {
        	    the_post();
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