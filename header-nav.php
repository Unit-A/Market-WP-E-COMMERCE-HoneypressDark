<nav class="navbar navbar-expand-lg navbar-light <?php if(get_theme_mod('sticky_header_enable',false)==true):?>header-sticky<?php endif;?>">
		<div class="container">
				<?php the_custom_logo();?>
				<div class="custom-logo-link-url">
		    		<h1 class="site-title"><a class="site-title-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a></h1>
				    <?php $honeypress_dark_description = get_bloginfo( 'description', 'display' );
						if ( $honeypress_dark_description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $honeypress_dark_description; ?></p>
						<?php endif; ?>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'honeypress-dark'); ?>">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<div class="ml-auto">
								<?php $honeypress_dark_shop_button = '<ul class="nav navbar-nav mr-auto">%3$s';
								if(get_theme_mod('after_menu_btn_new_tabl',false)==true) { $honeypress_dark_target="_blank";}
		 						else { $honeypress_dark_target="_self"; }
							 	if((get_theme_mod('after_menu_btn_txt')!='') && (get_theme_mod('after_menu_multiple_option')=='menu_btn')):
						 				$honeypress_dark_shop_button .= '<li class="nav-item menu-item main-header-btn"><a target='.$honeypress_dark_target.' class="honeypress_header_btn" href='.get_theme_mod('after_menu_btn_link','').'>'.get_theme_mod('after_menu_btn_txt').'</a>';
								endif;
								if((get_theme_mod('after_menu_html')!='') && (get_theme_mod('after_menu_multiple_option')=='html')):
										$honeypress_dark_shop_button .= '<li class="nav-item html menu-item">'.get_theme_mod('after_menu_html');
								endif;
							 	if ( class_exists( 'WooCommerce' ) )
								{
						 				if((get_theme_mod('search_btn_enable',false)==true ) || (get_theme_mod('cart_btn_enable',false)==true ))
							 			{
												if(get_theme_mod('search_btn_enable',false)==true)
										 			{
										 				$honeypress_dark_shop_button .= '<li class="nav-item"><div class="header-module search-woo">';
														$honeypress_dark_shop_button .= '<div class="nav-search nav-light-search wrap"><div class="search-box-outer"><div class="dropdown"><a href="#" title="'.esc_attr__('Search','honeypress-dark').'" class="search-icon dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a><ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false"><li class="panel-outer"><div class="form-container"><form role="search" method="get" autocomplete="off" class="search-form" action="'.esc_url( home_url( '/' )).'"><label><input type="search" class="search-field" placeholder="'.esc_attr__('Search …','honeypress-dark').'" value="" name="s"></label><input type="submit" class="search-submit" value="'.esc_attr__('Search','honeypress-dark').'"></form></div></li></ul></div></div></div><div class="cart-header">';
										 			}
											 		else
										 			{
									 						$honeypress_dark_shop_button .= '<li class="nav-item"><div class="cart-header">';
									 				}
							 			}
								 		if(get_theme_mod('cart_btn_enable',false)==true)
								 		{
												global $woocommerce;
												$honeypress_dark_cart_link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
												$honeypress_dark_shop_button .= '<a class="cart-icon" href="'.esc_url($honeypress_dark_cart_link).'" >';
												if ($woocommerce->cart->cart_contents_count == 0)
												{
														$honeypress_dark_shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
												}
												else
												{
														$honeypress_dark_shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
												}
												$honeypress_dark_shop_button .= '</a>';
												$honeypress_dark_shop_button .= '<a href="'.esc_url($honeypress_dark_cart_link).'" ><span class="cart-total">'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'honeypress-dark'), $woocommerce->cart->cart_contents_count).'</span></a>';
										}
								}
								else
								{
										if(get_theme_mod('search_btn_enable',false)==true)
							 			{
								 				$honeypress_dark_shop_button .= '<li class="nav-item"><div class="header-module">';
												$honeypress_dark_shop_button .= '<div class="nav-search nav-light-search wrap"><div class="search-box-outer"><div class="dropdown"><a href="#" title="'.esc_attr__('Search','honeypress-dark').'" class="search-icon dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a><ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false"><li class="panel-outer"><div class="form-container"><form role="search" method="get" autocomplete="off" class="search-form" action="'.esc_url( home_url( '/' )).'"><label><input type="search" class="search-field" placeholder="'.esc_attr__('Search …','honeypress-dark').'" value="" name="s"></label><input type="submit" class="search-submit" value="'.esc_attr__('Search','honeypress-dark').'"></form></div></li></ul></div></div></div>';
							 			}
								}
								$honeypress_dark_shop_button .= '</ul>';
								$honeypress_dark_menu_class='';
								wp_nav_menu( array
					      (
							      'theme_location'=> 'honeypress-primary',
							      'menu_class'    => 'nav navbar-nav mr-auto '.$honeypress_dark_menu_class.'',
							      'items_wrap'    => $honeypress_dark_shop_button,
							      'fallback_cb'   => 'honeypress_fallback_page_menu',
							      'walker'        => new Honeypress_nav_walker()
					      ));
	    				?>
					</div>
			</div>
	</div>
</nav>
