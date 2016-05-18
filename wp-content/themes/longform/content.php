<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */

global $longform_article_width;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($longform_article_width); ?>>
	<header class="entry-header">
		<?php

			if ( !is_single() && !in_array('aesop-story-front', get_body_class()) ) :

				if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && longform_categorized_blog() ) : ?>
					<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'longform' ) ); ?></span>
			<?php
				endif;

				if ( !in_array('aesop-story-front', get_body_class()) ) {
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				}
				?>
			
				<div class="entry-meta">
					<?php
						if ( 'post' == get_post_type() )
							longform_posted_on();

						if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
					?>
					<?php
						endif;
					?>
				</div><!-- .entry-meta -->

			<?php
			endif;
		?>
	</header><!-- .entry-header -->
	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<div id="entry-content-wrapper">
			<?php if ( has_excerpt() && !is_single() ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'longform' ) );
			}
			?>
		</div>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'longform' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			edit_post_link( __( 'Edit', 'longform' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->
