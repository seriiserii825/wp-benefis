<?php
	/**
	 * The template for displaying product content in the single-product.php template
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce/Templates
	 * @version 3.6.0
	 */

	defined('ABSPATH') || exit;

	global $product;

	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action('woocommerce_before_single_product');

	if (post_password_required()) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
	}
?>
<script>

// razmer
// 		$('#pa_razmer').change(function () {
//
// 			var th = $(this).find(':selected').val();
// 			if (th == 'svoj-razmer') {
// 				$('#pa_razmer')
// 					.parents('.value')
// 					.append('<div class="rz_block"><div class="inprz"><label for="rz1"><span>Circumference at breast level</span> <a data-fancybox="gallery" data-caption="Circumference at breast level" href="/wp-content/themes/benefis/img/rz/1.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz1" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz2"><span>Circumference above the breast</span> <a data-fancybox="gallery" data-caption="Circumference above the breast" href="/wp-content/themes/benefis/img/rz/2.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz2" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz3"><span>Circumference below the breast</span> <a data-fancybox="gallery" data-caption="Circumference below the breast" href="/wp-content/themes/benefis/img/rz/3.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz3" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz4"><span>Circumference at waist level</span> <a data-fancybox="gallery" data-caption="Circumference at waist level" href="/wp-content/themes/benefis/img/rz/4.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz4" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz5"><span>Circumference at hip level</span> <a data-fancybox="gallery" data-caption="Circumference at hip level" href="/wp-content/themes/benefis/img/rz/5.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz5" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz6"><span>Circumference at hip level (2)</span> <a data-fancybox="gallery" data-caption="Circumference at hip level (2)" href="/wp-content/themes/benefis/img/rz/6.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz6" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz7"><span>Breast height</span> <a data-fancybox="gallery" data-caption="Breast height" href="/wp-content/themes/benefis/img/rz/7.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz7" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz8"><span>Breast center</span> <a data-fancybox="gallery" data-caption="Breast center" href="/wp-content/themes/benefis/img/rz/8.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz8" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz9"><span>Distance from nipples to the waist line</span> <a data-fancybox="gallery" data-caption="Distance from nipples to the waist line" href="/wp-content/themes/benefis/img/rz/9.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz9" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz10"><span>Front width</span> <a data-fancybox="gallery" data-caption="Front width" href="/wp-content/themes/benefis/img/rz/10.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz10" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz11"><span>Back width</span> <a data-fancybox="gallery" data-caption="Back width" href="/wp-content/themes/benefis/img/rz/11.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz11" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz12"><span>Front length</span> <a data-fancybox="gallery" data-caption="Front length" href="/wp-content/themes/benefis/img/rz/12.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz12" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz13"><span>Back length</span> <a data-fancybox="gallery" data-caption="Back length" href="/wp-content/themes/benefis/img/rz/13.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz13" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz14"><span>Slanting front length</span> <a data-fancybox="gallery" data-caption="Slanting front length" href="/wp-content/themes/benefis/img/rz/14.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz14" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz15"><span>Slanting back length</span> <a data-fancybox="gallery" data-caption="Slanting back length" href="/wp-content/themes/benefis/img/rz/15.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz15" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz16"><span>Shoulder length</span> <a data-fancybox="gallery" data-caption="Shoulder length" href="/wp-content/themes/benefis/img/rz/16.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz16" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz17"><span>Sleeve length</span> <a data-fancybox="gallery" data-caption="Sleeve length" href="/wp-content/themes/benefis/img/rz/17.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz17" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz18"><span>Circumference of the arm</span> <a data-fancybox="gallery" data-caption="Circumference of the arm" href="/wp-content/themes/benefis/img/rz/18.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz18" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz19"><span>Circumference of the wrist</span> <a data-fancybox="gallery" data-caption="Circumference of the wrist" href="/wp-content/themes/benefis/img/rz/19.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz19" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz20"><span>Circumference of the leg</span> <a data-fancybox="gallery" data-caption="Circumference of the leg" href="/wp-content/themes/benefis/img/rz/20.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz20" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz21"><span>Seat height</span> <a data-fancybox="gallery" data-caption="Seat height" href="/wp-content/themes/benefis/img/rz/21.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz21" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz22"><span>Total height of the individual</span> <a data-fancybox="gallery" data-caption="Total height of the individual" href="/wp-content/themes/benefis/img/rz/22.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz22" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz23"><span>Side distance from waist to floor</span> <a data-fancybox="gallery" data-caption="Side distance from waist to floor" href="/wp-content/themes/benefis/img/rz/23.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz23" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz24"><span>Step line</span> <a data-fancybox="gallery" data-caption="Step line" href="/wp-content/themes/benefis/img/rz/24.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz24" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz25"><span>Side distance from waist to the knees</span> <a data-fancybox="gallery" data-caption="Side distance from waist to the knees" href="/wp-content/themes/benefis/img/rz/25.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz25" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz26"><span>Circumference of the neck</span> <a data-fancybox="gallery" data-caption="Circumference of the neck" href="/wp-content/themes/benefis/img/rz/26.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz26" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz27"><span>Length of basque of tutu</span> <a data-fancybox="gallery" data-caption="Circumference of the neck" href="/wp-content/themes/benefis/img/rz/27.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz27" type="text" class="custom_rz" value="" required=""></div><div class="inprz"><label for="rz28"><span>Tutu length</span> <a data-fancybox="gallery" data-caption="Tutu length" href="/wp-content/themes/benefis/img/rz/28.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz28" type="text" class="custom_rz" value="" required=""></div><input name="_custom_option" type="hidden" class="custom_rz" id="allval" value=""></div>');
// 				//.append
// 			} else {
// 				$('.rz_block').remove();
// 			}
// 		});
//
// 		$('form.variations_form.cart').submit(function () {
// 			var name,
// 				value,
// 				allrz = '';
// 			$('.inprz').each(function () {
// 				name = $(this).find('label > span').html();
// 				value = $(this).find('input').val();
// 				allrz += name + ": " + value + "; ";
// 			});
// 			$('#allval').val(allrz);
// 		});
// 	});
</script>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_before_single_product_summary');
	?>

    <div class="summary entry-summary">
		<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action('woocommerce_single_product_summary');
		?>


    </div>
	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
