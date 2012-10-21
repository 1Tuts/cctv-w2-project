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
						
						$meta = get_post_custom();	
						$i=0;
						if(count(($meta['img'])>0 && ($meta['txt'])>0)){
							foreach($meta['txt'] as $txt_id){
								$ary_txt[$i] = $txt_id;
								$i++;
							}
							$i=0;
							foreach ($meta['img'] as $img_id){
								echo "<div class='detail'>";
								$img_small = wp_get_attachment_image($img_id,'small'); // default: thumbnail
								echo "$img_small";
								echo "<a href='#'>$ary_txt[$i]</a>";
								echo "</div>";
								$i++;
							}
							}
						
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
						if(count($meta['txt'])>0){
							foreach ($meta['txt'] as $txt) {
								echo "<div class='pro'><a href='#'>$txt</a></div>";
							}
						}
					?>
				</div>
			</div>
			<div class="img-desc cover">
				<div class="train">
				<?php	
					if(count($meta['img'])>0){
						foreach ($meta['img'] as $pic_id) {
							$pic_middle = wp_get_attachment_image($pic_id,'middle');
							echo "<div class='pro'><a href='#'>$pic_middle</a></div>"; 
						}
					}
				?>
				</div>
			</div>
			<div class="desc left">
				<div class="train">

					<?php	
							if(count($meta['desc'])>0){
								foreach ($meta['desc'] as $desc) {
									echo "<div class='pro'><p>$desc</p></div>";
								}
							}
						
						}
					?>
				</div>
				<span><a class="btnlink" href="/wp-cctv/wordpress/مزایا/">برو به سوی</a></span>
			</div>
			
		</div>
	</div>
	<div class="bottom-pic"></div>
</section>
