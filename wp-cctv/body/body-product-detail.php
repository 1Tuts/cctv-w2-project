<section class="product-detail cover">
	<div class="nav cover ">
		<a href="product-index.php">محصولات</a>
		<span></span>
		<a class="next-link" href="#">معرفی محصولات</a>
	</div>
	<div class="info-pro cover">
		<div class="slide-pro right">
			<div class="title">محصولات</div>
			<div class="slider">
				<div class="slideshow-pro">
					<div class="scroll">
					
					<?php
						if( have_posts() ) {
							the_post();
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
					if(count($meta['pic'])>0){
						foreach ($meta['pic'] as $pic_id) {
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
					?>
				</div>
				<span><a class="btnlink" href="http://127.0.0.1/wp-cctv/wordpress/%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%AA%D8%AE%D8%B5%D8%B5%DB%8C/%D9%85%D9%82%D8%A7%D9%84%D9%87-3/">برو به سوی</a></span>
			</div>
			
		</div>
	</div>
	<div class="bottom-pic"></div>
</section>
