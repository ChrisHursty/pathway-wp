<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="">
		<!-- Custom fonts for this theme -->
		<!-- Theme CSS -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body id="page-top" class="<?php echo implode(' ', get_body_class()); ?>">
		<?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg bg-primary text-capitalize fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt=""></a>
				<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<?php _e( 'Menu', 'pathway_wp' ); ?>
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<?php wp_nav_menu( array(
							'menu'        => 'primary',
							'menu_class'  => 'navbar-nav ml-auto',
							'menu_id'     => 'primary-nav',
							'container'   => '',
							'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
							'walker'      => new wp_bootstrap4_navwalker()
					) ); ?>
				</div>
			</div>
		</nav>