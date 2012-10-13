<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a href="#">پرسش و پاسخ  </a>
		<a class="next-link" href="#"> ما</a>
	</div>
	<div class="content-pr cover">
		<nav class="content-pr-nav"></nav>
				<div class="info left cover">
                	<div class="footer-note">در این بخش شما می توانید سوال های خود را در زمینه های زیر بپرسید</div>
                    <div class="content-attr  pt1 pr1 pl1">
                    <?php
						wp_nav_menu(array(
							'theme_location'  => 'Question menu',
							'container'       => false, 
							'container_class' => '', 
							'menu_class'      => '', 
							'before'          => '<div class="bg-green">',
							'after'           => '</div>',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
						));
					?>
                    <!--	<ul>
                        	<li><a href="./select-product.php">
                            	<div class="bg-green">پرسش های اطلاعات فنی</div>
                                <div class="bg-end"></div>
                                </a>
                            </li>
                            <li>
                            	<div class="bg-green">واسط های / پورتها</div>
                                <div class="bg-end"></div>
                            </li>
                            <li>
                            	<div class="bg-green">واسط های / پورتها</div>
                                <div class="bg-end"></div>
                            </li>
                            <li>
                            	<div class="bg-green">واسط های / پورتها</div>
                                <div class="bg-end"></div>
                            </li>
                            <li>
                            	<div class="bg-green">واسط های / پورتها</div>
                                <div class="bg-end"></div>
                            </li>
                        </ul>-->
                    </div>
                    
                    <div class="bottom-bg"></div>
				</div>
				
			</div>
			
		</section>
