<?php 
$post_id=$_GET['post_id'];
echo $post_id;
the_title();              
$model = get_post_meta($post_id, 'model', true);
echo $model;
?>
ghcfhcfg