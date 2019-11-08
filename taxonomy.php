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
<script>
   jQuery( document ).ready(function() {
      $('.woocommerce').removeClass();
   });
</script>
<div class="slider">
    <div class="slider_video_parent">
	<span></span>
        <video src="http://benefis.myihor.ru//images/video/10000000_690038651457564_3112166903667890767_n.mp4" class="videoslider" autoplay="" loop="" muted="" width="1280" height="720"></video>
    </div>
</div>
        <div class="container">
    <div class="row">
                <?php get_sidebar(); ?>
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'productsingle' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>
</div>
<?php
get_footer();
