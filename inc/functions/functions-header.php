<?php function newspaper2017_header() {
$allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
$option = get_option("newspaper2017_theme_options");
$optioz = get_option("magazin_theme_options");
$page_option = get_post_meta(get_the_ID(), "magazin_menu_background_width", true);
if(!empty($page_option)) {
	if($page_option=="2") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
}
else if(!empty($option['menu_background_width'])) {
	if($option['menu_background_width']=="full") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
} else {
	$menu_full =  '';
	$menu_boxed =  'menu-background';
}
$menu_mobile = "";
if(!empty($option['mobile_header_type'])) {
	if($option['mobile_header_type']=="2") {
		$menu_mobile =  'hide-mobile';
	}
}
?>
<?php if(!empty($option['mobile_header_type'])) { if($option['mobile_header_type']=="2") { ?>
<div class="mt-header-mobile menu-background hide-desktop top-nav">
	<div class="nav-mobile pointer pull-left">
		<div class="mt-m-cool-button">
			<span class="mt-m-cool-button-line"></span>
		</div>
	</div>
	<div class="mt-mobile-logo"><?php newspaper2017_logo_mobile(); ?></div>
	<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
		<div class="nav-search-wrap pull-right">
			<div class="nav-search pointer"></div>
			<div class="nav-search-input">
				<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
					<input type="text" placeholder="<?php esc_html_e( 'Type and hit enter to search ...', 'newspaper2017' ); ?>"  name="s" >
				</form>
			</div>
		</div>
	<?php } } ?>
</div>
<div class="mt-header-space hide-desktop"></div>
<?php } } ?>
<div class="header-wrap  <?php echo esc_html($menu_mobile); ?>">
	<div class="header-mt-container-wrap">
		<div class="container mt-header-container">
			<div class="row">
				<div class="col-md-12">
					<div class="head container-fluid">
						<div class="head-logo"><?php newspaper2017_logo(); ?></div>
						<?php if  (!empty($option['menu_top_ad'])) {  ?>
							<?php if  ($option['menu_top_ad']=="ad") {  ?>
								<div class="top-ad">
									<?php if  (!empty($optioz['header_ad_top'])) {  ?>
								    <div class="text-right">
								      <?php echo html_entity_decode($optioz['header_ad_top']); ?>
								    </div>
								  <?php } ?>
								</div>
							<?php } else { echo newspaper2017_top_content(); } ?>
						<?php } else { echo newspaper2017_top_content(); } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-menu mt-header-container <?php echo esc_attr($menu_full); ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-nav <?php echo esc_attr($menu_boxed); ?> container-fluid">

						<div class="nav-button pointer pull-left <?php if(empty($option['menu_small_on'])) { ?>hide-desktop<?php } ?>">
							<div class="mt-m-cool-button">
								<span class="mt-m-cool-button-line"></span>
							</div>
						</div>

						<div class="nav pull-left">
							<?php newspaper2017_nav(); ?>
						</div>
						<?php if(!empty($option['header_link_url'])) { if($option['menu_random']=="1") { ?>
							<div class="nav-random pull-right">
								<a class="nav-random-btn pull-right" href="<?php echo esc_url($option['header_link_url']);  ?>" <?php if(!empty($option['header_link_blank'])) { if($option['header_link_blank']=="1") {?>target="_blank" <?php }} ?>>
									<span><?php echo balanceTags(get_theme_mod('newspaper2017_header_link_name', 'Download newspaper2017')); ?></span>
								</a>
							</div>
						<?php } } ?>
						<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
							<div class="nav-search-wrap pull-right">
								<div class="nav-search pointer"></div>
								<div class="nav-search-input">
									<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
										<input type="text" placeholder="<?php esc_html_e( 'Type and hit enter to search ...', 'newspaper2017' ); ?>"  name="s" >
									</form>
								</div>
							</div>
						<?php } } ?>
					</div>
				</div>
				<div class="hover-menu-wrap">
					<div class="hover-menu">
						<div class="row hide-mobile">
							<?php if ( is_active_sidebar( 'menu-column-1' ) and is_active_sidebar( 'menu-column-2' ) and is_active_sidebar( 'menu-column-3' ) ) { ?>

								<div class="col-md-4"><?php dynamic_sidebar( 'menu-column-1' ); ?></div>
								<div class="col-md-4"><?php dynamic_sidebar( 'menu-column-2' ); ?></div>
								<div class="col-md-4"><?php dynamic_sidebar( 'menu-column-3' ); ?></div>

							<?php } else if ( is_active_sidebar( 'menu-column-1' ) and is_active_sidebar( 'menu-column-2' ) ) { ?>

								<div class="col-md-4"><?php dynamic_sidebar( 'menu-column-1' ); ?></div>
								<div class="col-md-4"><?php dynamic_sidebar( 'menu-column-2' ); ?></div>

							<?php } else if ( is_active_sidebar( 'menu-column-1' ) ) { ?>

								<div class="col-md-12"><?php dynamic_sidebar( 'menu-column-1' ); ?></div>

							<?php } ?>
						</div>
						<?php if(!empty($option['mobile_header_type'])) { if($option['mobile_header_type']=="2") { } else { ?>
							<div class="row hide-desktop">
								<div class="col-md-12"><?php newspaper2017_nav_mobile(); ?></div>
							</div>
						<?php } } else { ?>
							<div class="row hide-desktop">
								<div class="col-md-12"><?php newspaper2017_nav_mobile(); ?></div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } add_filter('newspaper2017_header','newspaper2017_header');


function newspaper2017_top_content() { $option = get_option("newspaper2017_theme_options"); ?>
		<div class="head-nav">
			<?php if(!empty($option['url_latest'])) { ?><a <?php if($option['url_latest']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php esc_html_e( 'LATEST', 'newspaper2017' ); ?> <span><?php esc_html_e( 'Posts', 'newspaper2017' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_popular'])) { ?><a <?php if($option['url_popular']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php esc_html_e( 'POPULAR', 'newspaper2017' ); ?> <span><?php esc_html_e( 'Posts', 'newspaper2017' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_hot'])) { ?><a <?php if($option['url_hot']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php esc_html_e( 'HOT', 'newspaper2017' ); ?> <span><?php esc_html_e( 'Posts', 'newspaper2017' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_trending'])) { ?>	<a <?php if($option['url_trending']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php esc_html_e( 'TRENDING', 'newspaper2017' ); ?> <span><?php esc_html_e( 'Posts', 'newspaper2017' ); ?></span></a><?php } ?>
		</div>

		<?php if(!empty($option['header_time'])) { ?>
			<?php if($option['header_time']=="on") { ?>
				<div class="head-time">
					<div id="time-live">00:00<span>:00</span></div>
					<div class="time-date"><?php echo date( 'd M' ); ?></div>
				</div>
			<?php } ?>
		<?php } ?>

		<?php if(!empty($option['header_weather'])) { ?>
			<?php if($option['header_weather']=="on") { ?>
				<div class="weather-city hidden"><?php
					if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
						$ip = $_SERVER['HTTP_CLIENT_IP'];
					} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					} else {
						$ip = $_SERVER['REMOTE_ADDR'];
					}
					$query = @unserialize(wp_remote_fopen('http://ip-api.com/php/'.$ip));

						echo 'London';
					
				?></div>
				<div class="head-weather">
					<div id="weather"></div>
				</div>
			<?php } ?>
		<?php } ?>

<?php }
add_filter('newspaper2017_top_content','newspaper2017_top_content');

function newspaper2017_logo() {

	$option = get_option("newspaper2017_theme_options");

	// Fix for SSL
	if(!empty($option['header_logo'])) {
		$header_logo = esc_url($option['header_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
		    $header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['header_logox2'])) {
		$header_logo2 = esc_url($option['header_logox2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
		    $header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

 	if(!empty($option['header_logo'])) { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img <?php if(!empty($option['logo_width'])) { ?>  width="<?php echo esc_attr($option['logo_width']); ?>" <?php } if(!empty($option['logo_height'])) { ?>  height="<?php echo esc_attr($option['logo_height']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['header_logox2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}

add_filter('newspaper2017_logo','newspaper2017_logo');

function newspaper2017_logo_mobile() {

	$option = get_option("newspaper2017_theme_options"); ?>

	<?php if(!empty($option['mobile_logo'])) { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo esc_url($option['mobile_logo']); ?>" alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo-footer.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}
add_filter('newspaper2017_logo_mobile','newspaper2017_logo_mobile');

function newspaper2017_nav() {
	if(class_exists('md_walker__')) {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'walker'	=> new md_walker, 'echo' => true, 'depth' => 3));
	} else {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'echo' => true, 'depth' => 3));
	}
}
add_filter('newspaper2017_nav','newspaper2017_nav');

function newspaper2017_nav_fixed() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'fixed-menu-ul',  'echo' => true, 'depth' => 1));
}
add_filter('newspaper2017_nav_fixed','newspaper2017_nav_fixed');

function newspaper2017_nav_mobile() {
	wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mobile',  'echo' => true, 'depth' => 2));
}
add_filter('newspaper2017_nav_mobile','newspaper2017_nav_mobile');

function newspaper2017_socials() { ?>
	<ul class="social"> <?php
			$option = get_option("newspaper2017_theme_options");
			if(!empty($option['mt_icon_twitter'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_twitter']); ?>"><i class="ic-twitter"></i></a></li><?php }
			if(!empty($option['mt_icon_facebook'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_facebook']); ?>" ><i class="ic-facebook"></i></a></li><?php }
			if(!empty($option['mt_icon_intagram'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) {  if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_intagram']); ?>" ><i class="ic-instagram"></i></a></li><?php }
			if(!empty($option['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_vimeo']); ?>"><i class="ic-vimeo"></i></a></li><?php }
			if(!empty($option['mt_icon_youtube'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_youtube']); ?>"><i class="ic-youtube-play"></i></a></li><?php }
			if(!empty($option['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_linkedin']); ?>"><i class="ic-linkedin"></i></a></li><?php }
			if(!empty($option['mt_icon_gplus'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_gplus']); ?>"><i class="ic-google-plus"></i></a></li><?php }
			if(!empty($option['mt_icon_dribble'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_dribble']); ?>"><i class="ic-dribbble"></i></a></li><?php }
			if(!empty($option['mt_icon_skype'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_skype']); ?>"><i class="ic-skype"></i></a></li><?php }
			if(!empty($option['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_pinterest']); ?>"><i class="ic-pinterest"></i></a></li><?php }
			if(!empty($option['mt_icon_rss'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_rss']); ?>"><i class="ic-rss"></i></a></li><?php }
			?>
	</ul><?php
} add_filter('newspaper2017_socials','newspaper2017_socials');

function newspaper2017_header_fixed() {
	if (is_single()) {
		/* Share Meta from Magazin framework */
		$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
		$share_real = get_post_meta(get_the_ID(), "magazin_share_count_real", true);
		$shares = $share_real;
		if (!empty($share)){
			$shares = $share+$share_real;
		}
		/* View Meta from Magazin framework */
		$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
		$viewes = "0";
		if (!empty($view)){
			$viewes = $view;
		}
		$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
		?>
		<?php $option = get_option("newspaper2017_theme_options"); ?>
				<div class="fixed-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<ul class="share">
									<li class="share-facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share on Facebook', 'newspaper2017'); ?></span></a></li>
									<?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
									<li class="share-twitter"><a href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Share on Twitter', 'newspaper2017'); ?></span></a></li>
									<li class="share-more">
										<div class="share-more-wrap"><div class="share-more-icon">+</div></div>
										<a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google"></div></a>
										<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest"></div></a>
									</li>
								</ul>
								<span class="top-count stat-shares"><?php echo esc_attr($shares); ?> <?php esc_html_e('Shares', 'newspaper2017'); ?></span>
								<span class="top-count stat-views"><?php if(function_exists('magazin_PostViews')){   echo esc_attr($viewes) + magazin_PostViews(get_the_ID()); } ?> Views</span>
								<?php if (get_comments_number()!="0") { ?><span class="stat-comments top-count"><?php echo get_comments_number(); ?> Comments</span><?php } ?>
							</div>
						</div>
					</div>
				</div>
	<?php } ?>
	<div class="fixed-top-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php newspaper2017_logo(); ?>
					<?php newspaper2017_nav_fixed(); ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
<?php } add_filter('newspaper2017_header_fixed','newspaper2017_header_fixed'); ?>
