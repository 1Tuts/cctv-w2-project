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
	
	add_shortcode('signin','sign_in');

	function sign_in(){
		return file_get_contents( get_template_directory() . '/signin.html');
	}

	add_shortcode('form','form_garantee');

	function form_garantee(){
		return file_get_contents( get_template_directory() . '/formgarantee.php');
	}

/***********************************************comment********************/
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	
	if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'نظر شما در انتظار تایید است.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'twentyten'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
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
	  		'hierarchical' => true,
	  		'menu_position' => 5,
	  		//'menu_icon' => get_bloginfo('template_url') . '/images/product_icon.png', // 16x16
	  		'supports' => array('title','editor','author','thumbnail','custom-fields','excerpt','comments','page-attributes')
			
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