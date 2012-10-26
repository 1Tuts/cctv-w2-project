<div class="div-home">
	<section class='slideshow'>
  		<section class="backimg">
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
		                	$img_larg = wp_get_attachment_image_src($img->ID,'middel');
		                	echo "<div class='slideshow' style='background-image :url($img_larg[0])'></div>";
						}
	        		}else echo 'تصویر وجود ندارد';
			?>
			<script type="text/javascript">
				$('.backimg > div.slideshow').fadeLoop();
			</script>
		</section>
	</section>
   	<div style="min-height:500px"></div>
    <div class="footer-home cover" >
    	<div class="footer-left w9 left cover">
        	<p>Hight Light</p>
            <div class="slide"> 
                <div class="train"> 
                    <?php
							$len=0;
							$meta = get_post_custom();
							if(count($meta['img'])>0 ){
								foreach ($meta['img'] as $img_id){
									$img_small = wp_get_attachment_image_src($img_id,'thumbnail'); 
									echo "<div style='background:url($img_small[0]) no-repeat;'></div>";
									$len++;
							  	}						
							}
						}
					?>
                </div>                                          
            </div>         
	        <div class="gallery-thumbs ">
	             <ul class="button">
	                <?php                         
	                    for($i=0;$i<$len;$i++){
	                       echo "<li></li>";
	                    }
	                ?> 
	            </ul>        
	        </div> 
        </div>
        <div class="footer-right right">
        	<p>BRANDS</p>
            <nav class="nav-qlink left">
            	<?php
					wp_nav_menu(array(
						'theme_location'  => 'footer right menu',
						'container'       => false, 
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
					));
				?>
            </nav>
            <div class="img-about"></div>
        </div>
    </div>
</div>