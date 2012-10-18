<!-- start footer -->
		<footer class="mt3 cover">
			<section class="footer-box w22 mlra">
				<div class="right-pic right"></div>
				<div class="language right">
					<span class="language-icon right"></span>
					<span class="next-icon left w1 last"></span>
					<a class="mlra" href="#">Suomi</a>	
				</div>
				<div class="left-pic left"></div>
				<a href="">
					<div class="facebook left last"></div>
				</a>
				<div class="footer-menu w15 cover">
					<nav>
                    	<?php
							wp_nav_menu(array(
								'theme_location'  => 'footer menu',
								'container'       => false, 
								'container_class' => '', 
								'menu_class'      => '', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
							));
						?>
					</nav>
				</div>
			</section>
			<div class="copyright w3 mlra cover">
				copyright 2012
			</div>
		</footer>	
	</div>
</body>
</html>