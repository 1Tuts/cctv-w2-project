<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
<!--		<a href="#">دوربین  </a>-->
		<a class="next-link" href="#"> <?php the_title(); ?></a>
	</div>
	<div class="content-pr cover">
		<nav class="content-pr-nav"></nav>
			<section class="detail-pr cover">
            	<article class="txt-detail-pr">
                 	<?php
	                    if( have_posts() ) {
	                        the_post(); 
							the_content();
						
	                ?>
     <!--           	<h3>P SERIES</h3>-->
             
                </article>
                <?php
                    $meta = get_post_custom();
                    if(count($meta['img'])>0){
                        foreach ($meta['img'] as $img_id) {
                            $img_small = wp_get_attachment_image($img_id,'large'); 
                            echo "$img_small";
                        }
                    }
						}
                ?>
            </section>
				<div class="info left cover">
                	<div class="content-attr mh15  pt1 pr1 pl1">
                    	<ul>
                        	<li><a href="./select-product.php">
                            	<div class="bg-green">اطلاعات فنی</div>
                                <div class="bg-end"></div>
                                </a>
                            </li>
                            <li>
                            	<div class="bg-green">واسط های / پورتها</div>
                                <div class="bg-end"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-note">همه ارائه می دهد موضوع بدون اطلاع قبلی و یا تعهدی تغییر است و ممکن است در تمام مکان های خرده فروشی در دسترس می باشد. قیمت ذکر شده در کارخانه سازنده پیشنهاد قیمت خرده فروشی فراگیر مالیات بر ارزش افزوده ممکن است متفاوت باشد و از محل خرده فروشی است. برای قیمت گذاری و یا سایر خطاهای تایپی و یا photographical و یا حذفیات. عکسها ممکن است از پیشنهاد متفاوت است.
					</div>
                    <div class="bottom-bg"></div>
				</div>
				
			</div>
			
		</section>
