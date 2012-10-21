<section class="product-camera-content txr cover">
	
	<div class="content-pr mt5 cover">
		<nav class="content-pr-nav">
        	<?php 
				get_template_part('/inc/top-product-menu');
				if( have_posts() ) {
				the_post(); 
			 ?>
	    </nav>
        <div class="info cover"> 
            <div class="container">
                <div class="content-slide">
                <div class="gallery-product mh40 cover">
                    <div class="img-top"></div>
                    <div class="img-center">
                        <div class="slide"> 
                            <div class="train">
	                             <?php
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
                                            $img_larg = wp_get_attachment_image_src($img->ID,'middel');
                                            echo "<div style='background:url($img_larg[0]) no-repeat;'></div>";
                                        }
                                    }else echo 'تصویر وجود ندارد';
								?>
                            </div>                                          
                       </div> 
                    </div>
                    <div class="img-bottom"></div>
                </div>
                <div class="gallery-nav">
                    <div class="prv"></div>
                    <div class="next"></div>
                </div>
                </div>
                <div class="gallery-thumbs ">
                     <ul class="button">
                        <?php
                            if($images){
                                foreach ($images as $img) {
                                    $img_small = wp_get_attachment_image_src($img->ID,'thumbnail');
                                    echo "<li><img  src='$img_small[0]'></li>";
                                }
                            }else echo 'تصویر وجود ندارد';
                            }                       
                        ?> 
                    </ul>        
                </div> 
                <div class="footer-note txr">
					<?php the_content(); ?>
                </div>
                <div class="bottom-bg"></div>
                </div>
              </div>
           </div> 

        </div>

    </section>
