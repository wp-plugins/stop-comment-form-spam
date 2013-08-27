<?php 
	/*
	Plugin Name: Stop Comment Form Spam
	Plugin URI: http://wpsites.net/blog/
	Description: Removes the website url field and comment form allowed tags which attract automated comment spam.
	Version: 1.0
	Requires 3.6
	Author: Brad Dalton - WP Sites
	Author URI: http://wpsites.net/
	License: GPL2
	*/
	

//* Remove Comment Form Website URL Field
add_filter('comment_form_default_fields','remove_comment_url');
function remove_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}

//* Remove Comment Form Allowed Tags
function remove_comment_form_allowed_tags() {
add_filter('comment_form_defaults','wordpress_comment_form_defaults');
}
add_action('after_setup_theme','remove_comment_form_allowed_tags');
function wordpress_comment_form_defaults($default) {
	unset($default['comment_notes_after']);
	unset($default['comment_notes_before']);
	return $default;
}
