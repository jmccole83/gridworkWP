<?php /* Template Name: Portfolio Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                <!-- custom portfolio content -->
                <div class="portfolio-item">
                	<div class="portfolio-thumb">
                    	<a href="<?php the_field('portfolio_link_1'); ?>" target="_blank">
                        	<img src="<?php the_field('portfolio_img_1'); ?>" alt="<?php the_field('portfolio_alt_1'); ?>"/>
                        </a>
                    </div>
                    <div class="portfolio-text">
                    	<p>
                        	<?php the_field('portfolio_description_1'); ?>
                        </p>
                        <p>
                        	<a href="<?php the_field('portfolio_link_1'); ?>" target="_blank">View Project</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div><!-- /.portfolio-item -->
                <div class="portfolio-item">
                	<div class="portfolio-thumb">
                    	<a href="<?php the_field('portfolio_link_2'); ?>" target="_blank">
                        	<img src="<?php the_field('portfolio_img_2'); ?>" alt="<?php the_field('portfolio_alt_2'); ?>"/>
                        </a>
                    </div>
                    <div class="portfolio-text">
                    	<p>
                        	<?php the_field('portfolio_description_2'); ?>
                        </p>
                        <p>
                        	<a href="<?php the_field('portfolio_link_2'); ?>" target="_blank">View Project</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div><!-- /.portfolio-item -->
                <div class="portfolio-item">
                	<div class="portfolio-thumb">
                    	<a href="<?php the_field('portfolio_link_3'); ?>" target="_blank">
                        	<img src="<?php the_field('portfolio_img_3'); ?>" alt="<?php the_field('portfolio_alt_3'); ?>"/>
                        </a>
                    </div>
                    <div class="portfolio-text">
                    	<p>
                        	<?php the_field('portfolio_description_3'); ?>
                        </p>
                        <p>
                        	<a href="<?php the_field('portfolio_link_3'); ?>" target="_blank">View Project</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div><!-- /.portfolio-item -->
                <div class="portfolio-item">
                	<div class="portfolio-thumb">
                    	<a href="<?php the_field('portfolio_link_4'); ?>" target="_blank">
                        	<img src="<?php the_field('portfolio_img_4'); ?>" alt="<?php the_field('portfolio_alt_4'); ?>"/>
                        </a>
                    </div>
                    <div class="portfolio-text">
                    	<p>
                        	<?php the_field('portfolio_description_4'); ?>
                        </p>
                        <p>
                        	<a href="<?php the_field('portfolio_link_4'); ?>" target="_blank">View Project</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div><!-- /.portfolio-item -->
                
				<?php the_content(); ?>
                
				<br class="clear">

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

<?php get_footer(); ?>
