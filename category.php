<?php get_header(); ?>

<div class="row">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_sidebar(); ?>
    
    <div class="clear"></div>

</div><!-- /.row -->

<?php get_footer(); ?>
