<?php
/**
 * Getting started template
 */
?>
<div id="getting_started" class="honeypress_dark-tab-pane active">
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1 class="honeypress_dark-info-title text-center"><?php echo esc_html__('About the Honeypress Dark theme','honeypress-dark'); ?><?php if( !empty($honeypress_dark['Version']) ): ?> <sup id="honeypress_dark-theme-version"><?php echo esc_html( $honeypress_dark['Version'] ); ?> </sup><?php endif; ?></h1>
					</div>
				</div>
				<div class="row">
						<div class="col-md-6">
								<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
										<p><?php _e( 'This theme is ideal for creating corporate and business websites. Honeypress Dark is a child theme of the HoneyPress WordPress theme. The premium version has tons of features like a homepage with many sections where you can feature unlimited slides, portfolios, user reviews, latest news, services, call to action and much more. Each section in the Homepage template is carefully designed to fit to all business requirements.','honeypress-dark');?></p>
										<p>
										<?php esc_html_e( 'You can use this theme for any type of activity. Honeypress Dark is compatible with popular plugins like WPML and Polylang for the translation.', 'honeypress-dark' ); ?>
										</p>
										<h1 style="margin-top: 73px !important; font-size:2em !important; background: #0085ba;border-color: #0073aa #006799 #006799; color: #fff; padding: 10px 10px;"><?php esc_html_e( "Getting Started", 'honeypress-dark' ); ?></h1>
										<div>
												<p style="margin-top: 16px;">
														<?php esc_html_e( 'To take full advantage of all the features this theme has to offer, install and activate the SpiceBox plugin. Go to Customize and install the SpiceBox plugin.', 'honeypress-dark' ); ?>
												</p>
												<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Go to the Customizer','honeypress-dark');?></a></p>
										</div>
								</div>
						</div>
						<div class="col-md-6">
								<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
										<img src="<?php echo esc_url( HONEYPRESS_DARK_TEMPLATE_DIR_URI ) . '/admin/img/honeypress dark.png'; ?>" alt="<?php esc_attr_e( 'Honeypress Dark theme', 'honeypress-dark' ); ?>" />
								</div>
						</div>
				</div>

				<div class="row">
        		<div class="col-md-12">
								<div class="honeypress_dark-tab-center">
										<h1><?php esc_html_e( "Useful Links", 'honeypress-dark' ); ?></h1>
								</div>
            </div>
						<div class="col-md-6">
								<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
										<a href="<?php echo esc_url('https://honeypress-dark.spicethemes.com/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
										<p class="info-text"><?php echo esc_html__('Lite Demo','honeypress-dark'); ?></p></a>
										<a href="<?php echo esc_url('https://demo.spicethemes.com/?theme=honeypress-dark%20Pro'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
										<p class="info-text"><?php echo esc_html__('PRO Demo','honeypress-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/honeypress-dark'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-smiley info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Your feedback is valuable to us','honeypress-dark'); ?></p></a>
									<a href="<?php echo esc_url('https://support.spicethemes.com/index.php?p=/categories/honeypress-pro'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Premium Theme Support','honeypress-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
										<a href="<?php echo esc_url('https://spicethemes.com/honeypress-pro/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
										<p class="info-text"><?php echo esc_html__('Premium Theme Details','honeypress-dark'); ?></p></a>
								</div>
						</div>

						<div class="col-md-6">
							<div class="honeypress_dark-tab-pane-half honeypress_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/honeypress-pro/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-editor-help info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Premium Theme Help Docs','honeypress-dark'); ?></p></a>
							</div>
						</div>
				</div>
		</div>
</div>
