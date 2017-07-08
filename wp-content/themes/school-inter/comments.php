<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	get_template_part( 'template-parts/comment', 'form' );
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title"> Все комментарии
			<?php if (false):
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'school-inter' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
				endif;
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			$comments =     get_comments(array(
				'number' => $get_comments_number_approved,
				'status' => 'approve',
				'post_id' => 41,
				'orderby' => 'comment_date_gmt',
				'order' => 'DESC'
			));
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
					'per_page' => 5,
				),$comments );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation"><?php paginate_comments_links() ?></div>
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'school-inter' ); ?></p>
	<?php
	endif;
	
	
	?>

</div><!-- #comments -->
