<?php
	add_theme_support('menus');
	
	register_nav_menu('main menu', "Main Menu");
	register_nav_menu('footer menu', "Footer Menu");
	register_nav_menu('footer right menu', "Footer Right Menu");
	register_nav_menu('products menu', "Products Menu");
	register_nav_menu('download products menu', "Download Products Menu");
	register_nav_menu('Question menu', "Question Menu");
	register_nav_menu('left menu', "left Menu");
	register_nav_menu('catalog menu', "Catalog Menu");
	register_nav_menu('top product menu', "Top Product Menu");
	
	register_sidebar(array(
		'name' => 'Sidebar Left',
		'id' => 'sidebar-l',
		'description' => 'Left panel ...',
		'before_widget' => '<div class="pro %2$s" id="desc1">',
		'after_widget' => "</div>\n",
		'before_title' => '',
		'after_title' => ''
	));
		
	/****************************** ADD PLUGIN PRODUCT **********************/
	add_theme_support('post-thumbnails');
	
	add_action('init', 'product_init'); // add init event
	  
	function product_init (){
	  
	  	$labels = array(
	  		'name' => _x('محصولات', 'post type general name'),
	  		'singular_name' => _x('Product', 'post type singular name'),
	  		'add_new' => _x('اضافه کردن', 'product'),
	  		'add_new_item' => __('اضافه کردن یک کالا جدید'),
	  		'edit_item' => __('ویرایش کالا'),
	  		'new_item' => __('کالا جدید'),
	  		'view_item' => __('پیش نمایش صفحه'),
	  		'search_items' => __(' جستجو کالا'),
	  		'not_found' =>  __('کالا وجود ندارد'),
	  		'not_found_in_trash' => __('هیچ کالایی در زباله دان وجود ندارد'),
	  		'parent_item_colon' => '',
	  		'menu_name' => 'محصولات'
	  	);
	  
	  	$args = array(
	  		'labels' => $labels,
	  		'public' => true,
	  		'publicly_queryable' => true,
	  		'show_ui' => true,
	  		'show_in_menu' => true,
	  		'query_var' => true,
	  		'rewrite' => true,
	  		'capability_type' => 'post',
	  		'has_archive' => true,
	  		'hierarchical' => false,
	  		'menu_position' => 5,
	  		//'menu_icon' => get_bloginfo('template_url') . '/images/product_icon.png', // 16x16
	  		'supports' => array('title','editor','author','thumbnail','custom-fields','excerpt','comments')
			
	  	);
	  
	  	register_post_type ('product',$args);
		//register_taxonomy_for_object_type('category', 'product');
		
		//register_taxonomy_for_object_type('post_tag', 'product');
		
	  }
	  /*********************************** AD META BOX IN PLUDIN PRODUCT ***************************/
	add_action('add_meta_boxes', 'product_add_custom_box');

	function product_add_custom_box(){
		add_meta_box('product_priceid', 'متن پایین هر تصویر', 'product_price_box', 'product', 'side');
	}

	function product_price_box(){
		$price = 0;
		if ( isset($_REQUEST['post']) ) { // after first post save
			$price = get_post_meta($_REQUEST['post'],'product_price',true);
		}
		echo "<label for='product_price_text'>متن عکس</label>";
		echo "<textarea  id='product_price_text' class='widefat' name='product_price_text' rows='4' cols='30'   >$price</textarea>";
	}

	add_action('save_post','product_save_meta');

	function product_save_meta($post_id){
		if ( is_admin() ) {
			if ( isset($_POST['product_price_text']) ) {
				update_post_meta($post_id,'product_price',$_POST['product_price_text']);
			}
		}
	}
	
	
	add_shortcode('products', 'product_list');

function product_list($args){
	if(!@$args['cat']) $args['cat'] = '';

	$products = new WP_Query(array(
		'post_type' => 'product',
		'category_name' => $args['cat']
	));

	$html = '<h3>Product List</h3>';

	$html .= '<ul>';

	while($products->have_posts()){
		$products->the_post();

		$title = get_the_title();
		$url = get_permalink();

		$html .= "<li><a href='$url'>$title</a></li>";
	}

	$html .= '</ul>';

	return $html;
}
?>