<?php
$template = 'Index Page';
	get_template_part('/inc/header');
?>
<div class="content">
	<?php
		//query_posts(array('post_type' => 'product'));
		while(have_posts()){
			the_post();
	?>
		<div style="height:150px;"></div>
			<article>
				<h1><?php the_title(); ?></h1>
			<p><?php  the_content() ?></p>
			</article>
	<?php
		};
	?>
</div>
<?php
  get_template_part('/inc/footer');
?>