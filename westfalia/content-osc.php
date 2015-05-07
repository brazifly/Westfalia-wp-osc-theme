<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Westfalia
 * @since Westfalia 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="page-header">
			<?php if ( ! is_page_template( 'page-templates/osc-page.php' ) ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
		</div>

			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'westfalia' ), 'after' => '</div>' ) ); ?>
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'westfalia' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
