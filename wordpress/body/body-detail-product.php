<section class="product-camera-content txr cover"> 
	<div class="nav cover mt2">
	<div class="content-pr mt5 cover">
		<nav class="content-pr-nav">
         	<?php get_template_part('/inc/top-product-menu'); ?>
	    </nav>
        <div id="mz">
        <section class="detail-pr cover">
            <article class="txt-detail-pr">
               <?php
					$post_id=$_GET['post_id'];
					$feature = get_post_meta($post_id, 'feature', true);

                   // if( have_posts() ) {
                     //   the_post(); 
                ?>
                <p>
					<?php 
						if(count($feature['feature']>0)) {
							echo get_post_meta(get_the_ID(),'feature',true);
							}
					?>
                </p>
            </article>
           
        </section>
        <div class="info left cover">
           <?php
				$argus=array(
		          'numberposts' =>'4',
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
	                	echo "<div class='share-property'>";
	                    	$img_small = wp_get_attachment_image($img->ID,'middle');
						 	echo "$img_small";
						 	echo "<h3 class='txc'>$img->post_title</h3>";
	                    	echo "<p>$img->post_content</p>";
	                	echo "</div>";
					}
        		}else echo 'تصویر وجود ندارد';
  	    	//  }
		  ?>
        <div class="bottom-bg"></div>
        </div>		
        </div>
	</div>			
    
	<div class="model" id="model"><?php get_template_part('/body/body-product-model'); ?></div>
</section>
<div  class="gallery" id="gallery"><?php get_template_part('/body/body-product-gallery'); ?></div>
