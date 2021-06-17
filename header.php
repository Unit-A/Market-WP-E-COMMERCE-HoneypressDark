<!DOCTYPE html>
<html <?php language_attributes();?> >
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
			<?php if ( is_singular() && pings_open( get_queried_object() ) ) :
		         echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
		      endif; ?>
		<?php wp_head();?>
		</head>
		<body <?php body_class(get_theme_mod('honeypress_layout_style').' '.'custom-background'.' '.'dark'); ?> >
				<?php wp_body_open(); ?>
				<div id="page" class="site">
						<a class="skip-link screen-reader-text" href="#wrapper"><?php esc_html_e( 'Skip to content', 'honeypress-dark' ); ?></a>
						<?php if(get_theme_mod('preloader_enable',false)==true):?>
						<div id="preloader">
					        <div class="hp-preloader-cube">
					        <div class="hp-cube1 hp-cube"></div>
					        <div class="hp-cube2 hp-cube"></div>
					        <div class="hp-cube4 hp-cube"></div>
					        <div class="hp-cube3 hp-cube"></div>
					    </div> </div>
						<?php endif;?>
						<?php
						get_template_part('inc/topbar-header');
						get_template_part('inc/header/header-nav');
						global $template;
						global $woocommerce;
						if(basename($template)!='template-business.php'):
							honeypress_breadcrumbs();
						endif; ?>
						<div id="wrapper">
