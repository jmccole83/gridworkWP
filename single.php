<?php get_header(); ?>

<div class="row">
	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="blogHeader">
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                <?php endif; ?>
                <!-- /post thumbnail -->
    
                <!-- post title -->
                <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
                <!-- /post title -->
            </div>

			<!-- post details -->
            <div class="blogDate">
				<span class="date"><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> <i class="fa fa-clock-o"></i> <?php the_time('g:i a'); ?></span>
            </div>
			<div class="blogAuthor"><span class="author"><?php _e( '<i class="fa fa-user"></i> Written by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
            </div>
            <!--<span class="comments"><?php //if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
			<!-- /post details -->
			<div class="blogEntry">
				<?php the_content(); // Dynamic Content ?>
			</div>
            <div class="blogTags">
				<?php the_tags( __( '<i class="fa fa-tags"></i> 
', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			</div>
				<div class="blogCategories"><?php _e( '<i class="fa fa-folder"></i>
 ', 'html5blank' ); the_category(', '); // Separated by commas ?>
 			</div>

			<!--<p><?php //_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

	<?php get_sidebar(); ?>
    
    <div class="clear"></div>

</div><!-- /.row -->

<?php get_footer(); ?>
