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
    <div class="slider">
        <div class="slider_video_parent">
            <span></span>
            <video src="http://benefis.myihor.ru//images/video/10000000_690038651457564_3112166903667890767_n.mp4" class="videoslider" autoplay="" loop="" muted="" width="1280" height="720"></video>
        </div>
    </div>

    <div class="container">
        <div class="bs-main">
			<?php get_sidebar(); ?>

			<?php do_action('woocommerce_before_main_content'); ?>

			<?php
				$products = new WP_Query(['post_type' => 'product', 'posts_per_page' => 6]);
			?>

			<?php if ($products->have_posts()): ?>

				<?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

					<?php do_action('woocommerce_product_loop_start'); ?>

					<?php wc_get_template_part('content', 'product'); ?>

					<?php do_action('woocommerce_product_loop_end'); ?>

				<?php endwhile; ?><?php wp_reset_postdata(); ?>

			<?php else: ?><?php endif; ?>


			<?php do_action('woocommerce_after_main_content'); ?>

        </div>
    </div>
<?php
	get_footer();
