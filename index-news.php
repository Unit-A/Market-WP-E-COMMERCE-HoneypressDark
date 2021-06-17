<?php
$honeypress_dark_latest_news_section_enable = get_theme_mod('latest_news_section_enable','on');
if($honeypress_dark_latest_news_section_enable !='off')
{
?>
		<section class="section-module blog">
				<div class="container">
				<?php
				$honeypress_dark_home_news_section_title = get_theme_mod('home_news_section_title',__('Vitae Lacinia','honeypress-dark'));
				$honeypress_dark_home_news_section_discription = get_theme_mod('home_news_section_discription',__('Cras Vitae Placerat','honeypress-dark'));

				if(($honeypress_dark_home_news_section_title) || ($honeypress_dark_home_news_section_discription)!='' ) { ?>
				<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="section-header text-center">
										<div class="section-separator border-center"></div>
										<?php if($honeypress_dark_home_news_section_title) {?>
												<p class="section-subtitle">
														<?php echo esc_html($honeypress_dark_home_news_section_title); ?>
											</p>
										<?php } ?>
										<?php if($honeypress_dark_home_news_section_discription) {?>
											<h2 class="section-title">
													<?php echo esc_html($honeypress_dark_home_news_section_discription); ?>
											</h2>
										<?php } ?>
								</div>
						</div>
				</div>
			<?php } ?>

			<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 list-view">
						<?php
						$honeypress_dark_i=0;
						$honeypress_dark_args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ;
						query_posts( $honeypress_dark_args );
						if(query_posts( $honeypress_dark_args ))
						{
							while(have_posts()):the_post();
							{
									if($honeypress_dark_i%2==0) { ?>
											<article class="post media">
                      		<?php if(has_post_thumbnail()){ ?>
															<figure class="post-thumbnail mb-4">
																	<?php $honeypress_dark_thumb_class =array('class' => "img-fluid");?>
                              		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$honeypress_dark_thumb_class);?></a>
	                            </figure>
													<?php } ?>
													<div class="media-body">
															<?php
															if(get_theme_mod('blog_meta_section_enable',true)==true){
																 	$honeypress_dark_cat_list = get_the_category_list();
																	if(!empty($honeypress_dark_cat_list)) { ?>
																			<div class="entry-meta">
																					<span class="cat-links"><?php the_category(' '); ?></span>
																			</div>
															 		<?php }
															}?>
															<header class="entry-header">
																	<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
															</header>
															<?php
															if(get_theme_mod('blog_meta_section_enable',true)==true):?>
																	<div class="entry-meta">
																			<span class="author"><a <?php if (is_rtl()) { echo 'dir="rtl"'; } ?> href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html_e('By','honeypress-dark');?> <?php echo esc_html(get_the_author());?></a></span>
																			<span class="posted-on"><a <?php if (is_rtl()) { echo 'dir="rtl"'; } ?> href="<?php echo esc_url( home_url('/') ); ?><?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a></span>
																			<span class="comment-links"><a <?php if (is_rtl()) { echo 'dir="rtl"'; } ?> href="<?php the_permalink(); ?>#respond"><?php echo esc_html(get_comments_number());?></a></span>
																	</div>
															<?php endif;?>
															<div class="entry-content">
																<?php the_excerpt();?>
																<p><a href="<?php the_permalink(); ?>" class="more-link"><?php esc_html_e('Read more','honeypress-dark'); ?></a></p>
															</div>
													</div>
										</article>
									<?php
									} else {?>
										<article class="post media right">
                    		<div class="media-body">
														<?php
														if(get_theme_mod('blog_meta_section_enable',true)==true){
											 			$honeypress_dark_cat_list = get_the_category_list();
															if(!empty($honeypress_dark_cat_list)) { ?>
																	<div class="entry-meta">
																			<span class="cat-links"><?php the_category(' '); ?></span>
																	</div>
													 		<?php }
														}?>
														<header class="entry-header">
															<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
														</header>
														<?php
														if(get_theme_mod('blog_meta_section_enable',true)==true):?>
																<div class="entry-meta">
																		<span class="author"><a <?php if (is_rtl()) { echo 'dir="rtl"'; } ?> href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html_e('By','honeypress-dark');?> <?php echo esc_html(get_the_author());?></a></span>
																		<span class="posted-on"><a <?php if (is_rtl()) { echo 'dir="rtl"'; }?> href="<?php echo esc_url( home_url('/') ); ?><?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a>
																		</span>
																		<span class="comment-links"><a <?php if (is_rtl()) { echo 'dir="rtl"'; }?> href="<?php the_permalink(); ?>#respond"><?php echo esc_html(get_comments_number());?></a></span>
																</div>
														<?php endif;?>
														<div class="entry-content">
															<?php the_excerpt();?>
															<p><a href="<?php the_permalink(); ?>" class="more-link"><?php esc_html_e('Read more','honeypress-dark'); ?></a></p>
														</div>
												</div>
												<?php if(has_post_thumbnail()){ ?>
														<figure class="post-thumbnail mb-4">
														<?php $honeypress_dark_thumb_class =array('class' => "img-fluid");?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$honeypress_dark_thumb_class);?></a>
                            </figure>
												<?php } ?>
										</article>
								<?php
								}
								$honeypress_dark_i++;
							}
							endwhile; } ?>
						</div>
					</div>
				</div>
			</section>
	<div class="clearfix"></div>
<?php } ?>
