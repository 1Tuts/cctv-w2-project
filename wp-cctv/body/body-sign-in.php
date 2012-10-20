<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a class="next-link" href="#"> <?php the_title(); ?></a>
	</div>
	<div class="content-pr cover">
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
