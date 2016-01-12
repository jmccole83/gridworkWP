<?php get_header(); ?>

	<div class="row">
        <main role="main" class="blog-posts">
            <!-- section -->
            <section>
    
                <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
    
                <?php get_template_part('loop'); ?>
                
                <!-- fix fully justified layout, leave this <span> tag empty and styled as is -->
                <span style="width: 100%;display: inline-block;font-size: 0px;line-height: 0;"></span>
    
                <?php get_template_part('pagination'); ?>
    
            </section>
            <!-- /section -->
        </main>
    
<?php get_sidebar(); ?>
		
        <div class="clear"></div> 
	
	</div><!-- /.row -->

<?php get_footer(); ?>
