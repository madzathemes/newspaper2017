<?php

function newspaper2017_css() {

	wp_enqueue_style('newspaper2017-style', get_stylesheet_uri());

	$custom_styles = '';
	$options = get_option("newspaper2017_theme_options");

	// Default Color
	if(!empty($options['colors_default'])){
			$custom_styles .='
			.mt-theme-text,
			.fixed-top-menu ul li a:hover,
			a:hover,
			.poster:hover h2, .poster-small:hover h4,
			.nav-single .next div:after,
			.nav-single .previous div:before { color:'. esc_attr($options['colors_default']) .'; }
			.mt-theme-background,
			button:hover,
			input[type="submit"]:hover,
			input[type="button"]:hover,
			.head-bookmark a:hover,
			.hover-menu a:hover,
			.nav-links a:hover,
			.poster-next:hover,
			.poster-prev:hover,
			.post-gallery-nav .slick-arrow.slick-prev:hover:before,
			.post-gallery-nav .slick-arrow.slick-next:hover:before,
			.single-cat-wrap .post-categories li a,
			.mt-load-more:hover,
			.mt-tabc:before,
			.mt-subscribe-footer input.mt-s-b:hover,
			.nave.df-megamenu-nav-sub .active a.mt-sub-cat-a { background: '. esc_attr($options['colors_default']) .'; }';
	 }

	 // Button Color
	 if(!empty($options['colors_button'])){
 			$custom_styles .='
			button,
			input[type="submit"],
			input[type="button"],
			.head-bookmark a,
			.mt-subscribe-footer input.mt-s-b { background:'. esc_attr($options['colors_button']) .'; }';
 	 }

	 // Background Color
	 $style = get_post_meta(get_the_ID(), "magazin_background_color", true);
	 if(!empty($style)){ $custom_styles .='.boxed-layout-on { background-color: '. esc_attr($style) .' }'; }
	 else if (!empty($options['background_color'])) { $custom_styles .='.boxed-layout-on { background-color: '. esc_attr($options['background_color']) .'; }'; }

	 // Logo Margin
	 if(!empty($options['logo_top'])){ $custom_styles .='.head-logo { padding-top: '. esc_attr($options['logo_top']) .'px }'; }
	 if(!empty($options['logo_bottom'])){ $custom_styles .='.head-logo { padding-bottom: '. esc_attr($options['logo_bottom']) .'px } '; }

	 // Social Icon
	 if(!empty($options['colors_social_hover'])){ $custom_styles .='.socials a:after { background:'. esc_attr($options['colors_social_hover']) .'!important; }'; }

	 // Header
	 $options_in = get_option("mt_colors_header");
	 if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.header-mt-container-wrap { background-color:'. esc_attr($options_in['background']) .'!important; }'; } }
	 if(!empty($options_in['link'])){if($options_in['link']!='#fffff1'){
		 $custom_styles .='.header-wrap .head-nav a{ color:'. esc_attr($options_in['link']) .'!important; }';
		 $custom_styles .='.header-wrap .head-nav a::after { background-color:'. esc_attr($options_in['link']) .'!important; }';
	 }}
	 if(!empty($options_in['hover'])){if($options_in['hover']!='#fffff1'){
		 $custom_styles .='.header-wrap .head-nav a.active, .header-wrap .head-nav a:hover { color:'. esc_attr($options_in['hover']) .'!important; }';
		 $custom_styles .='.header-wrap .head-nav a.active::after, .header-wrap .head-nav a:hover::after { background-color:'. esc_attr($options_in['hover']) .'!important; }';
	 }}

	 $options_in = get_option("mt_colors_header_fixed");
	 if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.fixed-top-menu { background-color:'. esc_attr($options_in['background']) .'!important; }'; }}
	 if(!empty($options_in['link'])){ if($options_in['link']!='#fffff1'){ $custom_styles .='.fixed-top-menu ul li a { color:'. esc_attr($options_in['link']) .'!important; }'; }}
	 if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.fixed-top-menu ul li a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; }}

	 $options_in = get_option("mt_colors_header_icons");
	 if(!empty($options_in['latest'])){ if($options_in['latest']!='#fffff1'){$custom_styles .='.mt_l_latest:before { color:'. esc_attr($options_in['latest']) .'!important; }'; }}
	 if(!empty($options_in['popular'])){ if($options_in['popular']!='#fffff1'){$custom_styles .='.mt_l_popular:before { color:'. esc_attr($options_in['popular']) .'!important; }'; }}
	 if(!empty($options_in['hot'])){ if($options_in['hot']!='#fffff1'){$custom_styles .='.mt_l_hot:before { color:'. esc_attr($options_in['hot']) .'!important; }'; }}
	 if(!empty($options_in['trending'])){ if($options_in['trending']!='#fffff1'){$custom_styles .='.mt_l_trending:before { color:'. esc_attr($options_in['trending']) .'!important; }'; }}


	 $options_in = get_option("mt_colors_header_button");
	 if(!empty($options_in['text']) and !empty($options_in['background'])){if($options_in['background']!='#fffff1'){
		 $custom_styles .='.nav-url a { color:'. esc_attr($options_in['text']) .'!important; background-color:'. esc_attr($options_in['background']) .'!important; }';
	 }}
	 if(!empty($options_in['text_hover']) and !empty($options_in['background_hover'])){if($options_in['background_hover']!='#fffff1'){
		 $custom_styles .='.nav-url a:hover { color:'. esc_attr($options_in['text_hover']) .'!important; background-color:'. esc_attr($options_in['background_hover']) .'!important; }';
	 }}

	 // Menu
	 $options_in = get_option("mt_colors_menu_bg");
	 if(!empty($options_in['in'])){ if($options_in['in']!='#fffff1'){ $custom_styles .='.sf-menu > li > a::before, div.sf-menu > ul > li > a::before { border-color:'. esc_attr($options_in['in']) .'; } .menu-background, .menu-background-left, .menu-background-right, .menu-background-mobile,.mt-header-mobile .nav-search-input input,.mt-header-mobile.search-on .nav-search-wrap:hover { background-color:'. esc_attr($options_in['in']) .'!important; }'; }}
	 if(!empty($options_in['out'])){ if($options_in['out']!='#fffff1'){$custom_styles .='.header-menu { background-color:'. esc_attr($options_in['out']) .'!important; }'; }}

	 // Menu Links
	 $options_in = get_option("mt_colors_menu_link");
	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
		 $custom_styles .='.top-nav a, .top-nav { color:'. esc_attr($options_in['text']) .'!important; }';
	 }}

	 if(!empty($options_in['text_hover'])){ if($options_in['text_hover']!='#fffff1'){
		 $custom_styles .='.sf-menu li a:hover,
		 .sf-menu > li:hover > a,
		 .sf-menu li.sfHover,
		 ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
		 ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
		 ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
		 ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
		 .sf-menu li.current_page_item::before, .sf-menu li:hover::before { color: '. esc_attr($options_in['text_hover']) .'!important}';
	 }}
		 if(!empty($options_in['text'])){ if($options_in['text']!='#fffff1'){
			 $custom_styles .='.sf-menu > li.current_page_item > a::before, .sf-menu > li > a::before { background: '. esc_attr($options_in['border']) .'!important}';
		 }}

		// Menu Links Sub
		$options_in = get_option("mt_colors_menu_link_sub");
		if(!empty($options_in)){
			 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
				 $custom_styles .='.sf-menu ul li a { color:'. esc_attr($options_in['text']) .'!important; }';
				 $custom_styles .='.megamenu-span h4 { color:'. esc_attr($options_in['text']) .'!important; }';
			 }}
			 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){ $custom_styles .='.sf-menu ul li a, .sf-menu ul li, .df-is-megamenu ul, .df-is-megamenu ul li .mega-post-in a:hover { background-color:'. esc_attr($options_in['background']) .'!important; }'; }}

		 }

		if(!empty($options_in)){
			 if(!empty($options_in['text_hover']) and !empty($options_in['background_hover'])){if($options_in['background_hover']!='#fffff1'){
				 $custom_styles .='ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
	 			ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
	 			ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
	 			ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
	 			ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover,
				.nave.df-megamenu-nav-sub .active a.mt-sub-cat-a { ';
					 if(!empty($options_in['background_hover'])){ $custom_styles .='background:'. esc_attr($options_in['background_hover']) .'!important;'; }
					 if(!empty($options_in['text_hover'])){ $custom_styles .='color:'. esc_attr($options_in['text_hover']) .'!important;'; }
				$custom_styles .='}';
			}}
	 	}

		if(!empty($options['colors_menu_sub'])){
			$custom_styles .='.megamenu-span h4 { color:'. esc_attr($options['colors_menu_sub']) .'!important; }';
		}

		$options_in = get_option("mt_colors_menu_button");
	 	 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
	 		 $custom_styles .='.nav-button{ background-color:'. esc_attr($options_in['background']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
	 		 $custom_styles .='.mt-m-cool-button-line:after, .mt-m-cool-button-line:before, .mt-m-cool-button-line{ background-color:'. esc_attr($options_in['text']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['background_hover'])){if($options_in['background_hover']!='#fffff1'){
	 		 $custom_styles .='.nav-button:hover{ background-color:'. esc_attr($options_in['background_hover']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['text_hover'])){if($options_in['text_hover']!='#fffff1'){
	 		 $custom_styles .='.nav-button:hover .mt-m-cool-button-line:after, .nav-button:hover .mt-m-cool-button-line:before, .nav-button:hover .mt-m-cool-button-line{ background-color:'. esc_attr($options_in['text_hover']) .'!important; }';
	 	 }}

	 	 $options_in = get_option("mt_colors_menu_search");
	 	 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
	 		 $custom_styles .='.nav-search-wrap{ background-color:'. esc_attr($options_in['background']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
	 		 $custom_styles .='.nav-search::after, .mt-header-mobile .nav-search-input:before, .search-close:before, .nav-search-input input{ color:'. esc_attr($options_in['text']) .'!important; }';
			 $custom_styles .='
			 .nav-search-input input,.nav-search-input:before { color:'. esc_attr($options_in['text']) .'!important; }
			 .nav-search-input input::-webkit-input-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
			 .nav-search-input input:-moz-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
			 .nav-search-input input::-moz-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
			 .nav-search-input input:-ms-input-placeholder { color:'. esc_attr($options_in['text']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['background_hover'])){if($options_in['background_hover']!='#fffff1'){
	 		 $custom_styles .='.nav-search-wrap:hover { background-color:'. esc_attr($options_in['background_hover']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['text_hover'])){if($options_in['text_hover']!='#fffff1'){
	 		 $custom_styles .='.nav-search-wrap:hover .nav-search::after, .nav-search-wrap:hover .mt-header-mobile .nav-search-input:before, .search-close.hover:before, .nav-search-wrap:hover .nav-search-input input{ color:'. esc_attr($options_in['text_hover']) .'!important; }';
			 $custom_styles .='
			 .nav-search-input:hover input,.nav-search-input:before { color:'. esc_attr($options_in['text_hover']) .'!important; }
			 .nav-search-input:hover input::-webkit-input-placeholder { color:'. esc_attr($options_in['text_hover']) .'!important; }
			 .nav-search-input:hover input:-moz-placeholder { color:'. esc_attr($options_in['text_hover']) .'!important; }
			 .nav-search-input:hover input::-moz-placeholder { color:'. esc_attr($options_in['text_hover']) .'!important; }
			 .nav-search-input:hover input:-ms-input-placeholder { color:'. esc_attr($options_in['text_hover']) .'!important; }';
		 }}

		 $options_in = get_option("mt_colors_menu_icon");
 	 	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
 	 		 $custom_styles .='.head-social .social a { color:'. esc_attr($options_in['text']) .'!important; }';
 	 	 }}
		 if(!empty($options_in['hover'])){if($options_in['hover']!='#fffff1'){
 	 		 $custom_styles .='.head-social .social a:hover { color:'. esc_attr($options_in['hover']) .'!important; }';
 	 	 }}

		 $options_in = get_option("mt_colors_time");
 	 	 if(!empty($options_in['clock'])){if($options_in['clock']!='#fffff1'){
 	 		 $custom_styles .='#time-live { color:'. esc_attr($options_in['clock']) .'!important; }';
 	 	 }}
		 if(!empty($options_in['seconds'])){if($options_in['seconds']!='#fffff1'){
 	 		 $custom_styles .='#time-live span { color:'. esc_attr($options_in['seconds']) .'!important; }';
 	 	 }}
		 if(!empty($options_in['date'])){if($options_in['date']!='#fffff1'){
 	 		 $custom_styles .='.time-date { color:'. esc_attr($options_in['date']) .'!important; }';
 	 	 }}


		 $options_in = get_option("mt_colors_header_mobile");
	 	 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
	 		 $custom_styles .='.mt-header-mobile, .nav-search-wrap, .nav-search-wrap:hover, .nav-mobile, .nav-mobile:hover, .mt-header-mobile .nav-search-input input { background-color:'. esc_attr($options_in['background']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['link'])){if($options_in['link']!='#fffff1'){
	 		 $custom_styles .='.nav-search::after, .mt-header-mobile .nav-search-input:before, .search-close:before, .nav-search-input input,.nav-search-wrap:hover .nav-search::after, .nav-search-wrap:hover .mt-header-mobile .nav-search-input:before, .search-close.hover:before, .nav-search-wrap:hover .nav-search-input input{ color:'. esc_attr($options_in['link']) .'!important; }';
			 $custom_styles .='.mt-header-mobile .mt-m-cool-button-line:after, .mt-header-mobile .mt-m-cool-button-line:before, .mt-header-mobile .mt-m-cool-button-line{ background-color:'. esc_attr($options_in['link']) .'!important; }';

			 $custom_styles .='
			 .nav-search-input input,.nav-search-input:before { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input input::-webkit-input-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input input:-moz-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input input::-moz-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input input:-ms-input-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input:hover input,.nav-search-input:before { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input:hover input::-webkit-input-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input:hover input:-moz-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input:hover input::-moz-placeholder { color:'. esc_attr($options_in['link']) .'!important; }
			 .nav-search-input:hover input:-ms-input-placeholder { color:'. esc_attr($options_in['link']) .'!important; }';

	 	 }}

		 $options_in = get_option("mt_colors_menu_smart");
		 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
 	 		 $custom_styles .='.mt-smart-menu { background-color:'. esc_attr($options_in['background']) .'!important; }';
 	 	 }}
 	 	 if(!empty($options_in['link'])){if($options_in['link']!='#fffff1'){
 	 		 $custom_styles .='.mt-smart-menu a, .mt-smart-menu .close:before, .mt-smart-menu .menu-item-has-children:after { color:'. esc_attr($options_in['link']) .'!important; }';
 	 	 }}
		 if(!empty($options_in['hover'])){if($options_in['hover']!='#fffff1'){
 	 		 $custom_styles .='.mt-smart-menu a:hover, .mt-smart-menu .close:hover:before { color:'. esc_attr($options_in['hover']) .'!important; }';
 	 	 }}
		 if(!empty($options_in['out'])){if($options_in['out']!='#fffff1'){
 	 		 $custom_styles .='.mobile-menu-active  .mt-smart-menu-out { background-color:'. esc_attr($options_in['out']) .'!important; }';
 	 	 }}


		// Other
		$options_in = get_option("colors_post_view");
		if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
			$custom_styles .='.post-statistic .stat-views { color:'. esc_attr($options_in['text']) .'!important; }';
		}}
		if(!empty($options_in['text_dark'])){if($options_in['text_dark']!='#fffff1'){
			$custom_styles .='.post-bgphoto .post-statistic .stat-views { color:'. esc_attr($options_in['text_dark']) .'!important; }';
		}}
		if(!empty($options_in['icon'])){if($options_in['icon']!='#fffff1'){
			$custom_styles .='.post-statistic .stat-views:before { color:'. esc_attr($options_in['icon']) .'!important; }';
		}}
		if(!empty($options_in['icon_dark'])){if($options_in['icon_dark']!='#fffff1'){
			$custom_styles .='.post-bgphoto .post-statistic .stat-views:before { color:'. esc_attr($options_in['icon_dark']) .'!important; }';
		}}
		$options_in = get_option("colors_post_share");
		if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
			$custom_styles .='.post-statistic .stat-shares { color:'. esc_attr($options_in['text']) .'!important; }';
		}}
		if(!empty($options_in['text_dark'])){if($options_in['text_dark']!='#fffff1'){
			$custom_styles .='.post-bgphoto .post-statistic .stat-shares { color:'. esc_attr($options_in['text_dark']) .'!important; }';
		}}
		if(!empty($options_in['icon'])){if($options_in['icon']!='#fffff1'){
			$custom_styles .='.post-statistic .stat-shares:before { color:'. esc_attr($options_in['icon']) .'!important; }';
		}}
		if(!empty($options_in['icon_dark'])){if($options_in['icon_dark']!='#fffff1'){
			$custom_styles .='.post-bgphoto .post-statistic .stat-shares:before { color:'. esc_attr($options_in['icon_dark']) .'!important; }';
		}}

		$options_in = get_option("mt_colors_cat");
		if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
			$custom_styles .='.df-is-megamenu ul .poster-cat, .grid-post .poster-cat span, .poster-large-cat span, .poster-info { background-color:'. esc_attr($options_in['background']) .'!important; }';
		}}
		if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
			$custom_styles .='.df-is-megamenu ul .poster-cat span, .grid-post .poster-cat span, .poster-large-cat span, .poster-info, .poster-info, .poster.size-normal .poster-cat span, .poster.trending-normal .poster-cat span, .poster.trending-carousel .poster-cat span { color:'. esc_attr($options_in['text']) .'!important; }';
		}}
		if(!empty($options_in['only_text'])){if($options_in['only_text']!='#fffff1'){
			$custom_styles .='.poster .poster-cat span { color:'. esc_attr($options_in['only_text']) .'!important; }';
		}}

		// Footer Colors
		$options_in = get_option("mt_colors_footer_top");
		if(!empty($options_in)){
			if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.footer-top { background:'. esc_attr($options_in['background']) .'!important; }'; } }
			if(!empty($options_in['title'])){ if($options_in['title']!='#fffff1'){ $custom_styles .='.footer-top h2, .footer-top h3, .footer-top h4 { color:'. esc_attr($options_in['title']) .'!important; }'; } }
			if(!empty($options_in['text'])){ if($options_in['text']!='#fffff1'){ $custom_styles .='.footer-top p { color:'. esc_attr($options_in['text']) .'!important; }'; } }
			if(!empty($options_in['link'])){ if($options_in['link']!='#fffff1'){ $custom_styles .='.footer-nav a, .footer .mail { color:'. esc_attr($options_in['link']) .'!important; }'; } }
			if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.footer-top a:hover, .footer .mail:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
		}

		$options_in = get_option("mt_colors_footer_bottom");
		if(!empty($options_in)){
			if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.footer-bottom { background:'. esc_attr($options_in['background']) .'!important; }'; } }
			if(!empty($options_in['text'])){ if($options_in['text']!='#fffff1'){ $custom_styles .='.footer-bottom p { color:'. esc_attr($options_in['text']) .'!important; }'; } }
			if(!empty($options_in['link'])){ if($options_in['link']!='#fffff1'){ $custom_styles .='.footer-bottom a { color:'. esc_attr($options_in['link']) .'!important; }'; } }
			if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.footer-bottom a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
			if(!empty($options_in['border'])){ if($options_in['border']!='#fffff1'){ $custom_styles .='.footer-bottom { border-top: 1px solid '. esc_attr($options_in['border']) .'!important; }'; } }
		}

		$options_in = get_option("mt_colors_footer_social");
		if(!empty($options_in)){
			if(!empty($options_in['icon'])){ if($options_in['icon']!='#fffff1'){ $custom_styles .='.footer .social li a { color:'. esc_attr($options_in['icon']) .'!important; }'; } }
			if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.footer .social li a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
			if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.footer .social li a { background:'. esc_attr($options_in['background']) .'!important; }'; } }
			if(!empty($options_in['background_hover'])){ if($options_in['background_hover']!='#fffff1'){ $custom_styles .='.footer .social li a:hover { background:'. esc_attr($options_in['background_hover']) .'!important; }'; } }
		}

		$options_in = get_option("mt_colors_footer_icons");
		if(!empty($options_in['latest'])){ if($options_in['latest']!='#fffff1'){$custom_styles .='.footer .mt_l_latest:before { color:'. esc_attr($options_in['latest']) .'!important; }'; }}
		if(!empty($options_in['popular'])){ if($options_in['popular']!='#fffff1'){$custom_styles .='.footer .mt_l_popular:before { color:'. esc_attr($options_in['popular']) .'!important; }'; }}
		if(!empty($options_in['hot'])){ if($options_in['hot']!='#fffff1'){$custom_styles .='.footer .mt_l_hot:before { color:'. esc_attr($options_in['hot']) .'!important; }'; }}
		if(!empty($options_in['trending'])){ if($options_in['trending']!='#fffff1'){$custom_styles .='.footer .mt_l_trending:before { color:'. esc_attr($options_in['trending']) .'!important; }'; }}


	 if ( $custom_styles != '' ) {
	  $css = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $custom_styles);
		wp_add_inline_style( 'newspaper2017-style', $css );
	}

}
add_action( 'wp_enqueue_scripts', 'newspaper2017_css');


function newspaper2017_header_script() {

		wp_enqueue_style('newspaper2017', get_stylesheet_uri());

		$option = get_option("newspaper2017_theme_options");
		if  (!empty($option['menu_top_ad'])) {
			 if  ($option['menu_top_ad']!="ad") {
				 if  (!empty($option['weather_type'])) {
		 			 if  ($option['weather_type']=="f") {
						 wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_f.js', array('jquery'), '1.0', true);
					 } else { wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
				 } else { wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
			 }
		} else {
			if  (!empty($option['weather_type'])) {
				if  ($option['weather_type']=="f") {
					wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_f.js', array('jquery'), '1.0', true);
				} else { wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
			} else { wp_enqueue_script('newspaper2017-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
		}

		wp_enqueue_script('newspaper2017_html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'newspaper2017_html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('newspaper2017_respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'newspaper2017_respondmin', 'conditional', 'lt IE 9' );
    function newspaper2017_fonts_url() {

      $theme_font = "Lato:400,900,700";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'newspaper2017' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }
    wp_enqueue_style( 'newspaper2017-fonts', newspaper2017_fonts_url(), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'newspaper2017_header_script');

function newspaper2017_admin_script() {
	wp_enqueue_style('newspaper2017-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'newspaper2017_admin_script');



add_filter('body_class','newspaper2017_class');
function newspaper2017_class($classes) {

	$body_class = "";

	$options = get_option("newspaper2017_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}

	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
