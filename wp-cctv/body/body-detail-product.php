<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a href="#">دوربین  </a>
		<a class="next-link" href="#"> ما</a>
	</div>
	<div class="content-pr cover">
		<nav class="content-pr-nav">
         	<?php get_template_part('/inc/top-product-menu'); ?>
	    </nav>
        <section class="detail-pr cover">
            <article class="txt-detail-pr">
               <?php
                    if( have_posts() ) {
                        the_post(); 
                ?>
                    <p><?php the_content(); ?></p>
            </article>
            <a href="http://127.0.0.1/wp-cctv/wordpress/مشخصات-محصول/">
                <?php
                    $meta = get_post_custom();
                    if(count($meta['img'])>0){
                        foreach ($meta['img'] as $img_id) {
                            $img_small = wp_get_attachment_image($img_id,'large'); 
                            echo "$img_small";
                        }
                    }
                ?>
             </a>
        </section>
        <div class="info left cover">
           <?php
				$argus=array(
		          'numberposts' =>'4',
		          'orderby '=> 'menu_order', // This ensures images are in the order set in the page media manager  
		          'order'=> 'ASC',  
		          'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
		          'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
		          'post_status' => null, 
		          'post_type' => 'attachment'
		          ); 
				$images = get_children($argus);
				if($images){
	          		foreach ($images as $img) {
	                	echo "<div class='share-property'>";
	                    	$img_small = wp_get_attachment_image($img->ID,'thumbnail');
	                    //$img_full_src=wp_get_attachment_image_src($img->ID,'large');
						 	echo "$img_small";
						 	echo "<h3>$img->post_title</h3>";
	                    	echo "$img->post_content";
	                	echo "</div>";
					}
        		}else echo 'not';
      }
  ?>
        <div class="bottom-bg"></div>
        </div>		
	</div>			
</section>
