<?php
/**
 * Template part for displaying comment-list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<ol class="comment-list"><?php
	$comments = get_comments( array('post_id' => $post->ID,'number' => $get_comments_number_approved,'order' => 'DESC', 'status' => 'approve'));
	wp_list_comments( array(
		'style'      => 'ol',
		'short_ping' => true,
		'avatar_size' => 100,
		'per_page' => 3,
	),$comments );?>
</ol>