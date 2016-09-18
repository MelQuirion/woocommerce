<?php
/**
 * @package Make
 * Template Name: Contact
 */

get_header();
global $post;
?>

<?php ttfmake_maybe_show_sidebar( 'left' ); ?>

<main id="site-main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>

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
		$template_type = apply_filters( 'make_template_content_page', 'page', $post );
		get_template_part( 'partials/content', $template_type );

		?>

		<div class="woocommerce">
			<a href="tel:<?php echo the_field('numero_de_telephone'); ?>" class="button"><?php echo the_field('numero_de_telephone'); ?></a>
			<a href="mailto:<?php echo the_field('courriel'); ?>" target="_top" class="button" ><?php echo the_field('courriel'); ?></a>
		</div>

		<?php 
 
		$map = get_field('map');
		 
		if( !empty($map) ):
		?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
		</div>
		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>
</main>

<?php ttfmake_maybe_show_sidebar( 'right' ); ?>

<?php get_footer(); ?>

