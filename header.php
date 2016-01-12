<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="Web Design Glasgow"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-310x310.png" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
        <?php echo get_theme_mod('font_link'); ?>
		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
     
        <!-- nav -->
		<nav class="<?php
			$custom_nav_class = get_theme_mod( 'custom_nav' );
			if( $custom_nav_class != '' ) {
				switch ( $custom_nav_class ) {
					case 'custom':
						// Do nothing.
						break;
					case 'static-nav':
						echo 'static-nav';
						break;
					case 'slide-left':
						echo 'slide-left';
						break;
					case 'slide-right':
						echo 'slide-right';
						break;
					case 'under-left':
						echo 'under-left';
						break;
					case 'under-right':
						echo 'under-right';
						break;
					case 'fade-in':
						echo 'fade-in';
						break;
				}
			}
		?>
		
		
		<?php echo get_theme_mod('main_nav'); ?> 
		<?php if( get_theme_mod( 'fixed_nav') == '') { ?> 
			<?php echo '' ?> 
            	<?php } else { ?> 
		<?php echo 'fixed-nav' ?> <?php } // end if ?>" role="navigation">
        <!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo ( get_theme_mod( 'custom_logo' ) ); ?>" alt="<?php wp_title(''); ?> - Logo" class="logo-img">
				</a>
			</div>
		<!-- /logo -->
                <?php html5blank_nav(); ?>
                
		<div class="nav_btn">
			<div></div>
			<div></div>
			<div></div>
		</div>
        
		</nav>
		<!-- /nav -->