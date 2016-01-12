<?php /* Template Name: Contact Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
                
				<br class="clear">
                
                <div class="contactMethod" style="min-height: 200px;">
                	<h2>Alternatively&hellip;</h2>
                    <p>You can contact me on any of these other methods&hellip;</p>
                    <div class="row">
                        <div>
                        	m: <a href="tel:+447800899514">+44 (0) 7800 899 514</a>
                        </div>
                        <div>
                        	e: <a href="mailto:john@johnmccoledesign.co.uk">john@johnmccoledesign.co.uk</a>
                        </div>
                        <div>
                        	s: <a href="skype:jm_designuk?chat">jm_designuk</a>
                        </div>
                        <!--fix fully justified layout, leave this <span> tag-->
						<span style="width: 100%;display: inline-block;font-size: 0px;line-height: 0;"></span>
                    </div><!-- /.row -->
                    <p>Looking forward to hearing from you.</p>
                </div>

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
