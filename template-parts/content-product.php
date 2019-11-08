<h2>Content product</h2>
<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) exit; // Exit if accessed directly
global $product, $woocommerce_loop;
// Store loop count we're currently on
if (empty($woocommerce_loop['loop']))
	$woocommerce_loop['loop'] = 0;
// Store column count for displaying the grid
if (empty($woocommerce_loop['columns']))
	$woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);
// Ensure visibility
if (!$product->is_visible())
	return;
// Increase loop count
$woocommerce_loop['loop']++;
// Extra post classes
$classes = array();
if (0 == ($woocommerce_loop['loop'] - 1) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'])
	$classes[] = 'first';
if (0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'])
	$classes[] = 'last';
?>


<?php
$price = get_post_meta(get_the_ID(), '_regular_price', true);
$image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
?>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-padd hidden-md">
    <div class="single-product">
        <div class="product-label">

        </div>
        <div class="product-img">
            <a href="<?php the_permalink(); ?>">
                <img class="primary-image" src="<?php echo $image[0]; ?>" alt=""/>
            </a>
        </div>
        <div class="product-content">
            <h2 class="product-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="price-box">
                <span class="new-price"><?php echo $price ?><?php echo get_woocommerce_currency(); ?></span>
            </div>
        </div>
        <div class="product-content2">
            <h2 class="product-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="price-box">
                <span class="new-price"><?php echo $price ?><?php echo get_woocommerce_currency(); ?></span>
            </div>
            <div class="button-container">
                <a title="В корзину" href="<?php the_permalink(); ?>" class="button cart_button">
                    <span>Подробнее</span>
                </a>
            </div>
        </div>

    </div>
</div>