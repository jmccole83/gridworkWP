<?php /* Template Name: Home Page */ get_header(); ?>


	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_field('h1_tag'); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">
                
                <!-- recent projects -->
                <div class="recentProjects">
                <h2>Recent  Projects</h2>
                	<div>
                    	<a href="<?php the_field('project_1_url'); ?>">
                        	<img src="<?php the_field('project_1_img'); ?>" alt="<?php the_field('project_1_alt_text'); ?>"/>
                        </a>
                        <span class="projectTitle"><?php the_field('project_1_alt_text'); ?></span>
                    </div>
                	<div>
                    	<a href="<?php the_field('project_2_url'); ?>">
                        	<img src="<?php the_field('project_2_img'); ?>" alt="<?php the_field('project_2_alt_text'); ?>"/>
                        </a>
                        <span class="projectTitle"><?php the_field('project_2_alt_text'); ?></span>
                    </div>
                	<div>
                    	<a href="<?php the_field('project_3_url'); ?>">
                        	<img src="<?php the_field('project_3_img'); ?>" alt="<?php the_field('project_3_alt_text'); ?>"/>
                        </a>
                        <span class="projectTitle"><?php the_field('project_3_alt_text'); ?></span>
                    </div>
                	<div>
                    	<a href="<?php the_field('project_4_url'); ?>">
                        	<img src="<?php the_field('project_4_img'); ?>" alt="<?php the_field('project_4_alt_text'); ?>"/>
                        </a>
                        <span class="projectTitle"><?php the_field('project_4_alt_text'); ?></span>
                    </div>
                    <!-- fix fully justified layout, leave this <span> tag empty and styled as is -->
                    <span style="width: 100%;display: inline-block;font-size: 0px;line-height: 0;"></span>
                </div>
                
                <!--skills section-->
                <div class="skillsSection">
                <h2>Skills &amp; Experience</h2>
                	<div class="row">
                        <div>
                            <?php the_field('graphic_design'); ?>
                        </div>
                        <div>
                            <?php the_field('web_design'); ?>
                        </div>
                        <div>
                            <?php the_field('web_development'); ?>
                        </div>
                        <div>
                            <?php the_field('wordpress'); ?>
                        </div>
                        <!-- fix fully justified layout, leave this <span> tag empty and styled as is -->
                        <span style="width: 100%;display: inline-block;font-size: 0px;line-height: 0;"></span>
					</div><!-- /.row -->
                    <div>
                    	<?php the_field('skills_link'); ?>
                    </div>
                </div>
                
                <!-- clients logos -->
                <div class="clientLogos">
                <h2>Clients</h2>
                	<div>
						<img src="<?php the_field('client_logo'); ?>" alt="<?php the_field('client_logo_alt_text'); ?>"/>
                    </div>
                	<div>
						<img src="<?php the_field('client_logo_2'); ?>" alt="<?php the_field('client_logo_alt_text_2'); ?>"/>
                    </div>
                	<div>
						<img src="<?php the_field('client_logo_3'); ?>" alt="<?php the_field('client_logo_alt_text_3'); ?>"/>
                    </div>
                	<div>
						<img src="<?php the_field('client_logo_4'); ?>" alt="<?php the_field('client_logo_alt_text_4'); ?>"/>
                    </div>
                    <!-- fix fully justified layout, leave this <span> tag empty and styled as is -->
                    <span style="width: 100%;display: inline-block;font-size: 0px;line-height: 0;"></span>
                </div>
                
                <!-- add recent posts to template page -->
                <div class="recentPosts">
                    <h2>Recent Posts</h2>
                    <ul>
                    <?php
                        $args = array( 'numberposts' => '4' );
                        $recent_posts = wp_get_recent_posts( $args );
                    
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                        }
                    ?>
                    </ul>
                </div>
                <!-- /.recentPosts -->
                
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
