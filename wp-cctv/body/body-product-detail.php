<section class="product-detail cover">
	<div class="info-pro mt5 cover">
		<div class="slide-pro right">
        	<?php
						if( have_posts() ) {
							the_post();
			?>
			<div class="title"><?php the_title(); ?></div>
			<div class="slider">
				<div class="slideshow-pro">
					<div class="scroll">
                    
                    
                    
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
			                	echo "<div class='detail'>";
				                    	$img_small = wp_get_attachment_image($img->ID,'small');
									 	echo "$img_small";
										echo "<a href='#'>$img->post_title</a>";
									echo "</div>";
							}
		        		}else echo '<p>اطلاعات وارد نشده است!</p>';
		  	    	
            	?>
					</div>
					<div class="previous"></div>
					<div class="next"></div>
				</div>
			</div>
		</div>
		<div class="desc-pro">
			<div class="top-pic"></div>
			<div class="name-desc">
				<div class="train">	
					<?php	
						echo "<div class='pro'><a href='#'>$img->post_title</a></div>";
					?>
				</div>
			</div>
			<div class="img-desc cover">
				<div class="train">
				<?php	
					if($images){
			          		foreach ($images as $img) {
			                	echo "<div class='pro txc'>";
				                    	$img_small = wp_get_attachment_image($img->ID,'middle');
										echo "$img_small";
									echo "</div>";
							}
		        		}else echo '<p>اطلاعات وارد نشده است!</p>';
				?>
				</div>
			</div>
			<div class="desc left">
				<div class="train">

					<?php	
					if($images){
			          		foreach ($images as $img) {
			                	echo "<div class='pro'>";
									echo "<p>$img->post_content</p>";
								echo "</div>";
							}
		        		}else echo '<p>اطلاعات وارد نشده است!</p>';						
					}
					?>
				</div>
				<span><a class="btnlink" href="/wp-cctv/wordpress/مزایا/">برو به سوی</a></span>
			</div>
			
		</div>
	</div>
	<div class="bottom-pic"></div>
</section>
