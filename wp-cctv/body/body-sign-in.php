<section class="product-camera-content txr cover">
	
	<div class="content-pr mt5 cover">
        <div class="img-top"></div>
        <div class="info left cover">
        	<div class="content-sign-in">
	            <div>
                    <?php
						if( have_posts() ) {
							the_post(); 
							echo "<p>";
								the_content();
							echo "</p>";
						}
					?>	
	            </div>
            </div>
            <div class="bottom-bg"></div>
        </div>
    </div>
</section>
