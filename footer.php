		<!-- contact CTA -->
        <?php if ( !is_page('contact-me') ) { ?>
            <div class="cta">
                <h3>contact me today</h3>
                <p>Responding to an application I made? Have an employment opportunity I might be suitable for? Have an upcoming project I might be interested in? Get in touch with me to discuss it in more detail.</p>
                <a href="contact-me">get in touch</a>
            </div>
        <?php } ?>
        
         <div class="wrapper">
            
            <!-- Skills Icons -->
			<div class="skills_icons">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('skills-icons')) ?>
			</div>
            
            <div class="row">
            	<!-- Contact Me Section -->
                <div class="contact_me">
                	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact-me')) ?>
                </div>
                
				<!-- What I Can Do Section -->
                <div class="what-i-do">
                	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('what-i-do')) ?>
                </div>
                
                <!-- Search section -->
                <div class="search">
                	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('search')) ?>
                </div>

            </div>
            
		</div><!-- .wrapper --> 
        
        <!-- footer -->
			<footer class="footer" role="contentinfo" style="background: <?php echo esc_url( get_theme_mod( 'footer_bg_colour' ) ); ?> url(<?php echo esc_url( get_theme_mod( 'footer_bg_default' ) ); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            
			<!-- copyright -->
            <div class="row">
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                </p>
				<p class="credit">
                	<span>website by:</span> <a href="<?php echo get_theme_mod('design_link'); ?>" title="<?php echo get_theme_mod('design_credit'); ?>" target="_blank"><?php echo get_theme_mod('design_credit'); ?></a>
                </p> 
                <p class="affiliate">
                	<a href="" target="_blank"><img src="" alt=""></a>
                <p>
			</div><!-- /.row -->
            
			<!-- /copyright -->

			</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>       
        
    </main>
    <!-- /.main -->   
        
		

		<!-- analytics -->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', '<?php echo get_theme_mod('analytics_code' ); ?>', 'auto');
          ga('send', 'pageview');
        
        </script>

	</body>
</html>
