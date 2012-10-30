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
 
 add_action('init','create_product_type');
function create_product_type(){
	$labels_pt=array(
		'name' => 'محصولات',
		'singular_name' => 'محصولات',
		'add_new' => 'افزودن محصول',
		'add_new_item' => 'افزودن محصول جدید',
		'edit_item' => 'ویرایش محصول',
		'new_item' => 'محصول جدید',
		'view_item' => 'نمایش محصول',
		'search_items' => 'جستجوی محصول',
		'not_found' => 'محصول مورد نظر یافت نشد',
		'not_found_in_trash' => 'محصول مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'محصول',
		'menu_name' => 'محصولات'

		);
	$args_pt=array(
		'label' => 'محصولات',
		'labels' => $labels_pt,
		'description' =>'این پلاگین در حالت آزمایشی قرار دارد.',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array('title','editor','author', 'page-attributes'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'products'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('products', $args_pt);

	$labels_prdr = array(
    'name'  => 'BRANDS',
    'singular_name'  => 'تولیدکننده ها',
    'search_items'  => 'جستجوی تولیدکننده',
    'popular_items'  => 'بیشتر استفاده شده',
    'all_items'  => 'تمام تولیدکننده‌ها',
    'parent_item'  => 'مادر تولیدکننده',
    'edit_item'  => 'ویرایش تولیدکننده',
    'update_item'  => 'بروزرسانی تولیدکننده',
    'add_new_item'  => 'افزودن تولیدکننده جدید',
    'new_item_name'    => 'تولیدکننده جدید',
    'separate_items_with_commas'  => 'تولید کننده ها را با کاما جدا کنید',
    'add_or_remove_items'  => 'افزودن یا حذف تولیدکننده',
    'choose_from_most_used'  => 'انتخاب از محبوبها'
    );
	$args_tg=array(
		'label' => 'BRANDS',
		'labels' =>$labels_prdr,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'hierarchical' => true,
		'query_var' => true,
		// 'rewrite' => array('slug'=>'tag'),
		'rewrite' => array( 'slug' => 'BRANDS','hierarchical' => true),

		);
	register_taxonomy('BRANDS', 'products', $args_tg);
}
	
	add_post_type_support( 'products', 'thumbnail' );


 /**************** ADD META BOX feature*********/
 
 add_action('add_meta_boxes','add_feature_meta');
	add_action('save_post','save_feature_meta');

	function  add_feature_meta(){
		add_meta_box('feature','ویژگی های منحصربفرد','inner_feature_meta','products','advanced','default');
	}
	function inner_feature_meta($post){
		$post_id = $post->ID;
		$feature = get_post_meta($post_id, 'feature', true);
		?>
		<label for="feature">مزایا :</label>
		<textarea cols="150" rows="10" name="feature" id="feature">
        <?php 
				echo $feature;
			 ?>
        </textarea>
		<?php
	}
	

	function save_feature_meta($post_id){
	if ( is_admin() ) {
		if ( isset($_POST['feature']) ) {
			$feature = $_POST['feature'];
			update_post_meta($post_id,'feature',$feature);
		}
			}
}

	

 /**************** ADD META BOX MODEL*********/
 
 add_action('add_meta_boxes','add_model_meta');
	add_action('save_post','save_model_meta');

	function  add_model_meta(){
		add_meta_box('model',' مدل ','inner_model_meta','products','advanced','default');
	}
	function inner_model_meta($post){
		$post_id = $post->ID;
		$model = get_post_meta($post_id, 'model', true);
		?>
		<label for="model">مدل :</label>
		<input type="text"  name="model" id="model"  value="<?php echo $model;  ?>"/>
        
		<?php
	}
	

	function save_model_meta($post_id){
	if ( is_admin() ) {
		if ( isset($_POST['model']) ) {
			$model = $_POST['model'];
			update_post_meta($post_id,'model',$model);
		}
			}
}
?>