<?php
get_template_part('/inc/header');
if(is_post_type_archive()){
 		post_type_archive_title();
 	}
 	if (have_posts()) {
			wp_nav_menu(array(
				'theme_location'  => 'products menu',
				'container'       => false, 
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
			));
 			while (have_posts()) {
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
					$i = 0;
					if($images){
		          		foreach ($images as $img) {
		                	$img_larg = wp_get_attachment_image($img->ID,'middel');
		                	//echo "<div class='pro'><a href='#'>$img_larg</a></div>";
							$arry_img[$i] =$img_larg;
							$i++;
						}
						echo "<div class='pro'><a href='#'>$arry_img[1]</a></div>";
	        		}else echo 'تصویر وجود ندارد';
				}
 		}
		get_template_part('/inc/footer');
 	
  ?>