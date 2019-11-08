<?php

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	}
	//wc_get_template( 'archive-product.php' );
?>

<?php
	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package benefis
	 */

	get_header();
?>
<!--    --><?php //require_once __DIR__.'/../template-parts/content-slider.php';?>

    <div class="container">
        <div class="bs-main">
			<?php get_sidebar(); ?>

			<?php do_action('woocommerce_before_main_content'); ?>

			<?php if (have_posts()): ?>

				<?php while (have_posts()): ?><?php the_post(); ?>

					<?php do_action('woocommerce_product_loop_start'); ?>

					<?php wc_get_template_part('content', 'product'); ?>

					<?php do_action('woocommerce_product_loop_end'); ?>

				<?php endwhile; ?><?php wp_reset_postdata(); ?>

			<?php else: ?>
                <h2><?php echo esc_html__( 'No products...', 'benefis' ); ?></h2>
            <?php endif; ?>


			<?php do_action('woocommerce_after_main_content'); ?>

        </div>
    </div>
<?php
	get_footer();
