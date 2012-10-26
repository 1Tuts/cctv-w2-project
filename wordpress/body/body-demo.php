<?php
	if( have_posts() ) {
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
		$img_list = array();
		$i=0;
		$images = get_children($argus);
		if($images){
			foreach ($images as $img) {
				$img_larg = wp_get_attachment_image($img->ID,'middel');
				$img_title[$i] = $img->post_title;
				$img_list[$i]=$img_larg;
				$i++;
			}
		$i=0;
		}else echo 'تصویر وجود ندارد';
	}
?>
<div class="bg-demo"></div>
<div class="container">
		<div class="banner">
			<ul>
	            <li style="left: -180px; top: 5px; opacity: 0;">
                    <?php 
						echo "$img_list[0]";
						echo "<h2>$img_title[0]</h2>";
					 ?>
                </li>
	            <li style="left: 43px; top: 0px; width: 236px; height: 253px;">
	            	 <?php 
						echo "$img_list[1]";
						echo "<h2>$img_title[1]</h2>";
					 ?>
                </li>
	            <li style="left: 175px; top: -200px; width: 290px; height: 310px;">
                	<?php 
						echo "$img_list[2]";
						echo "<h2>$img_title[2]</h2>";
					?>
	            </li>
     
	            <li style="left: 480px; top: -205px; width: 236px; height: 253px;">
                 	<?php 
						echo "$img_list[3]";
						echo "<h2>$img_title[3]</h2>";
					?>
				</li>
	            <li style="left: 196px; top: 220px; opacity: 1; width: 220px; height: 235px;">
                	<?php 
						echo "$img_list[4]";
						echo "<h2>$img_title[4]</h2>";
					?>
	            </li>
	            <li style="left: 500px; top: 210px; width: 270px; height: 295px;">
	                <?php 
						echo "$img_list[5]";
						echo "<h2>$img_title[5]</h2>";
					?>
				</li>
	            <li style="left: 609px; top: 12px; width: 245px; height: 262px;">
                	<?php 
						echo "$img_list[6]";
						echo "<h2>$img_title[6]</h2>";
					?>
				</li>
    	
	            <li style="left: 915px; top: 5px; opacity: 0; width: 236px; height: 253px;">
                	<?php 
						echo "$img_list[7]";
						echo "<h2>$img_title[7]</h2>";
					?>
				</li>
    
	        </ul>
	        <div class="next"></div>
	        <div class="back"></div>
		</div>
	<script type="text/javascript">
		$(function(){
			var cue = $('div.banner > ul li');
			cue.cueslider({
				transitionProperty : 'left top opacity width height'.split(' ')
			});
//			setInterval(cue.cuenext,1000);
		});
	</script>