<?php
/*
Plugin Name: Linked Image
Plugin URI: http://wpguy.com/plugins/linked-image
Description: Links the first image in your post to the post itself
Version: 1.0
Author: Wessley Roche
Author URI: http://wpguy.com/
*/


function wpguy_linked_image($content){

	$searchfor = '/(<img[^>]*\/>)/';
	$replacewith = '<a href="'.get_permalink().'">$1</a>';

	if (is_single() === FALSE){
		$content = preg_replace($searchfor, $replacewith, $content, 1);
	}
	return $content;

}

add_filter('the_content', 'wpguy_linked_image');

?>