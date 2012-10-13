<div class="div-home">
	<section class='slideshow'>
  		<section class="backimg">
        
			<script type="text/javascript">
				document.write('<div class="slideshow " id="bgimg1" style="background-image :url(images/gallery/1.png);"></div>');
				document.write('<div class="slideshow " id="bgimg2" style="background-image :url(images/gallery/2.png);"></div>');
				document.write('<div class="slideshow " id="bgimg3" style="background-image :url(images/gallery/3.png);"></div>');
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
                        $path="images/gallery/footer-gallery/footer";
                        $scan=scandir($path);
						$len = 0;
                        foreach($scan as $img){
                            $exp=explode('.',$img);
                            $type=end($exp);
                            if($type=='png'){
                                echo "<div style=\"background-image:url('$path/$img');\"></div>";
								$len++;
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
        	<p>Quick Links</p>
            <nav class="nav-qlink left">
            	<?php
					wp_nav_menu(array(
						'theme_location'  => 'footer right menu',
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
            	<!--<ul>
                	<li><a href="#">Drivers & Downloads</a></li>
                    <li><a href="#">Drivers & Downloads</a></li>
                    <li><a href="#">Drivers & Downloads</a></li>
                </ul>-->
            </nav>
            <div class="img-about"></div>
        </div>
    </div>
</div>