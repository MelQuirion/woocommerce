<?php
/**
 * @package Make
 */

get_header();

// Section Header
ob_start();
make_breadcrumb();
$section_header = trim( ob_get_clean() );

global $post;
?>

<?php ttfmake_maybe_show_sidebar( 'left' ); ?>

<main id="site-main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>

	<?php if ( $section_header ) : ?>
	<header class="section-header">
		<?php echo $section_header; ?>
	</header>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		/**
		 * Allow for changing the template partial.
		 *
		 * @since 1.2.3.
		 *
		 * @param string     $type    The default template type to use.
		 * @param WP_Post    $post    The post object for the current post.
		 */
		$template_type = apply_filters( 'make_template_content_archive', 'archive', $post );
		get_template_part( 'partials/content', $template_type ); ?>
	<?php endwhile; ?>

	<?php get_template_part( 'partials/nav', 'paging' ); ?>

<?php else : ?>
	<?php get_template_part( 'partials/content', 'none' ); ?>
<?php endif; ?>
</main>



<?php get_footer(); ?>
