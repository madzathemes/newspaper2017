<div class="footer-wrap">
	<?php $option = get_option("newspaper2017_theme_options");
	if ( false == get_theme_mod( 't_o_about_us', false ) ) { $t_o_about_us = esc_html__("About Us", "newspaper2017");  } else { $t_o_about_us = get_theme_mod( 't_o_about_us' ); }
	if ( false == get_theme_mod( 't_o_follow_us', false ) ) { $t_o_follow_us = esc_html__("Follow Us", "newspaper2017");  } else { $t_o_follow_us = get_theme_mod( 't_o_follow_us' ); }
	if ( false == get_theme_mod( 't_o_contact_us', false ) ) { $t_o_contact_us = esc_html__("Contact Us:", "newspaper2017");  } else { $t_o_contact_us = get_theme_mod( 't_o_contact_us' ); }
	?>
	<?php if(!empty($option['footer_page'])){ ?>
		<?php $footer_page = $option['footer_page']; ?>
		<?php $footer = new WP_Query("page_id=$footer_page"); while($footer->have_posts()) : $footer->the_post(); ?>
			<div class="container footer-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php } ?>
	<?php if(!empty($option['footer_top']) or !empty($option['footer_bottom'])){ ?>
		<div class="footer">
			<?php if  (!empty($option['footer_top'])) {  ?>
				<?php if  ($option['footer_top'] == '1') {  ?>
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-md-3 footer-logo">
									<?php

		              // Fix for SSL
		              if(!empty($option['footer_logo'])) {
		            		$footer_logo = esc_url($option['footer_logo']);
		            		if(is_ssl() and 'http' == parse_url($footer_logo, PHP_URL_SCHEME) ){
		            		    $footer_logo = str_replace('http://', 'https://', $footer_logo);
		            		}
		            	}

		              $footer_logo2 = "";
		              if(!empty($option['footer_logox2'])) {
		            		$footer_logo2 = esc_url($option['footer_logox2']);
		            		if(is_ssl() and 'http' == parse_url($footer_logo2, PHP_URL_SCHEME) ){
		            		    $footer_logo2 = str_replace('http://', 'https://', $footer_logo2);
		            		}
		            	}

		              ?>
									<?php if(!empty($option['footer_logo'])) { ?>
										<img src="<?php echo esc_url($footer_logo); ?>" srcset="<?php echo esc_url($footer_logo); ?> 1x, <?php echo esc_url($footer_logo2); ?> 2x"  alt="<?php echo the_title(); ?>"  />
									<?php } else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
									<?php } ?>
								</div>
								<div class="col-md-4 footer-about">
									<h2><?php echo esc_html($t_o_about_us); ?></h2>
									<p><?php echo html_entity_decode(get_theme_mod('newspaper2017_footer_about_us', 'Donec eu tellus convallis, vehicula neque sed, mattis elit. Praesent ornare, ligula in efficitur egestas, massa lacus vulputate enim')); ?> </p>
									<p><?php echo esc_html($t_o_contact_us); ?> <a class="mail" href="mailto:<?php echo esc_html(get_theme_mod('newspaper2017_footer_about_us_mail', 'info@newspaper2017.com')); ?>" target="_top"><?php echo esc_html(get_theme_mod('newspaper2017_footer_about_us_mail', 'info@newspaper2017.com')); ?></a></p>
								</div>
								<div class="col-md-5 footer-social">
									<h2><?php echo esc_html($t_o_follow_us); ?></h2>
									<?php newspaper2017_socials(); ?>
									<p><?php echo html_entity_decode(get_theme_mod('newspaper2017_footer_follow_us', 'Donec eu tellus convallis, vehicula neque sed')); ?></p>
								</div>
							</div>
							<a href="#" class="footer-scroll-to-top-link"></a>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if  (!empty($option['footer_bottom'])) { ?>
				<?php if  ($option['footer_bottom'] == '1') { ?>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-6 footer-copyright">
									<p><?php echo html_entity_decode(get_theme_mod('newspaper2017_copyright_text', 'Copyright 2017. Powered by WordPress Theme. By Madars Bitenieks')); ?></p>
								</div>
									<div class="col-md-6">
										<?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'footer-nav', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?>
									</div>
								</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	<?php } ?>

	</div>
	</div>
<a href="#" class="footer-scroll-to-top"></a>

<?php wp_footer(); ?>

</body>
</html>
