<?php
/*
Template Name: Cart
*/
get_header();
?>

<style>
.entry-header{display:none;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'cart' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
</div>
<?php
get_footer();