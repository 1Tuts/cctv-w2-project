<section class="product-camera-content txr cover">
	
	<div class="content-pr mt5 cover">
		<nav class="content-pr-nav">
            <?php get_template_part('/inc/top-product-menu'); ?>
	    </nav>
        <div class="info left cover">
            <div class="models">
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
			                	echo "<div class='snigle-product mh20'>";
									echo"<div class='medel-left'>";
				                    	$img_small = wp_get_attachment_image($img->ID,'small');
									 	echo "<a href='#'>$img_small</a>";
									echo "</div>";
									echo "<div class='model-right'>";
								 		echo "<h3>$img->post_title</h3>";
			                    		echo "<p>$img->post_content</p>";
			                		echo "</div>";
								echo "</div>";
							}
		        		}else echo '<p>اطلاعات وارد نشده است!</p>';
		  	    	}
            	?>
            </div>
            <div class="bottom-bg"></div>
        </div>
    </div>
</section>