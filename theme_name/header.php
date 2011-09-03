<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php if ( is_home() || is_front_page() ) {
			bloginfo( 'name' );
			if( get_bloginfo( 'description' ) )
				echo ' | ' ; bloginfo( 'description' );
            } elseif (is_404()) {
            echo '404 Not Found';
            } elseif (is_category()) {
            echo 'Category:'; wp_title('');
            } elseif (is_search()) {
            echo 'Search Results';
            } elseif ( is_day() || is_month() || is_year() ) {
            echo 'Archives:'; wp_title('');
            } else {
            echo wp_title(''); 	echo ' | ' ; bloginfo( 'name' );
            }
            ?></title>

		<meta name="description" content="<?php bloginfo('description') ?>">
	
		<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" media="print" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<!-- Internet Explorer stylesheet. You can use .i6, .ie7, .ie8, .ie9 classes to target specific versions -->
		<!--[if IE ]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css"><![endif]-->
		
		<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div class="wrapper">

		<header id="masthead">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php
				wp_nav_menu( array( 'container' => 'nav', 'container_id' => 'primary', 'theme_location' => 'primary' ) );
				get_search_form();
			?>
		</header><!-- #masthead -->