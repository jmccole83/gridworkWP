<?php get_header(); ?>

<div class="row">
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
                <p>Sorry, but the page you are looking for couldn't be found.</p>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

	<?php get_sidebar(); ?>
    
    <div class="clear"></div>

</div><!-- /.row -->

<?php get_footer(); ?>
