<?php 
	/*
	Plugin Name: Stop Comment Form Spam
	Plugin URI: http://wpsites.net/blog/
	Description: Removes the website url field and comment form allowed tags which attract automated comment spam.
	Version: 1.1
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

//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'news_remove_comment_form_allowed_tags' );
function news_remove_comment_form_allowed_tags( $defaults ) {

	    $defaults['comment_notes_after'] = '';
		$defaults['comment_notes_before'] = '';
	return $defaults;

}


