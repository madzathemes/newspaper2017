<?php
function newspaper2017_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Colors', 'newspaper2017'),
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'newspaper2017_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'newspaper2017_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'newspaper2017' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'newspaper2017_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'newspaper2017' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'newspaper2017'),
      'section'  => 'colors_general',
      'settings' => 'newspaper2017_theme_options[colors_default]',
    )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_header_objects]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_header_objects]', array(
      'label'    => esc_html__('Header Objects', 'newspaper2017'),
      'section'  => 'colors_general',
      'settings' => 'newspaper2017_theme_options[colors_header_objects]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'newspaper2017'),
      'section'  => 'colors_general',
      'settings' => 'newspaper2017_theme_options[colors_button]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_social_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_social_hover]', array(
      'label'    => esc_html__('Social Widget Hover', 'newspaper2017'),
      'section'  => 'colors_general',
      'settings' => 'newspaper2017_theme_options[colors_social_hover]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Menu Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'newspaper2017_theme_options[menu_background_width]', array(
  	'type'        => 'radio-buttonset',
  	'settings'    => 'newspaper2017_theme_options[menu_background_width]',
  	'label'       => esc_html__( 'Menu Style', 'newspaper2017' ),
  	'section'     => 'colors_menu',
  	'default'     => 'boxed',
  	'priority'    => 1,
    'option_type'           => 'option',
  	'choices'     => array(
  		'boxed'   => esc_attr__( 'Boxed', 'newspaper2017' ),
  		'full' => esc_attr__( 'Full Width', 'newspaper2017' ),
  	),
 ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_bg_left]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_bg_left]',
    'label'       => esc_html__( 'Background Left', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_bg_right]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_bg_right]',
    'label'       => esc_html__( 'Background Right', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 2,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu]',
    'label'       => esc_html__( 'Link', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 10,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_hover_text]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_hover_text]',
    'label'       => esc_html__( 'Link Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 11,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_hover]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_hover]',
    'label'       => esc_html__( 'Link Hover Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 12,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_border]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_border]',
    'label'       => esc_html__( 'Border', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 13,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub]',
    'label'       => esc_html__( 'Sub Link', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_hover]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_hover]',
    'label'       => esc_html__( 'Sub Link Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_background]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_background]',
    'label'       => esc_html__( 'Sub Link Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_hover_background]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_hover_background]',
    'label'       => esc_html__( 'Sub Link Background Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_cat]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_cat]',
    'label'       => esc_html__( 'Sub Category Link', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 16,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_cat_hover]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_cat_hover]',
    'label'       => esc_html__( 'Sub Category Link Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 17,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_cat_bg]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_cat_bg]',
    'label'       => esc_html__( 'Sub Category Link Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 18,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_sub_cat_hover_bg]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_sub_cat_hover_bg]',
    'label'       => esc_html__( 'Sub Category Link Background Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 18,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_button]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_button]',
    'label'       => esc_html__( 'Small Menu Button Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_button_background]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_button_background]',
    'label'       => esc_html__( 'Small Menu Button Hover Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_background]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_background]',
    'label'       => esc_html__( 'Small Menu Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 21,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_link]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_link]',
    'label'       => esc_html__( 'Small Menu Link', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 22,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_link_hover]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_link_hover]',
    'label'       => esc_html__( 'Small Menu Link Hover', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 23,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_small_text]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_small_text]',
    'label'       => esc_html__( 'Small Menu Text', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 24,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_random_background]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_random_background]',
    'label'       => esc_html__( 'Random Button Hover Backgrond', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 32,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_search_text]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_search_text]',
    'label'       => esc_html__( 'Search Text', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 30,
  ));

  Kirki::add_field( 'newspaper2017_theme_options[colors_menu_search]', array(
    'type'        => 'color',
    'settings'    => 'newspaper2017_theme_options[colors_menu_search]',
    'label'       => esc_html__( 'Search Backgrond', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 31,
  ));


  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_top_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_top_background]', array(
      'label'    => esc_html__('Top Footer Background', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_top_background]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_top_title]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_top_title]', array(
      'label'    => esc_html__('Top Footer Title', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_top_title]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_top_text]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_top_text]', array(
      'label'    => esc_html__('Top Footer Text', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_top_text]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_top_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_top_link]', array(
      'label'    => esc_html__('Top Footer Link', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_top_link]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_top_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_top_link_hover]', array(
      'label'    => esc_html__('Top Footer Link Hover', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_top_link_hover]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_border]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_border]', array(
      'label'    => esc_html__('Footer Border', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_border]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_bottom_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_bottom_background]', array(
      'label'    => esc_html__('Bottom Footer Background', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_bottom_background]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_bottom_text]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_bottom_text]', array(
      'label'    => esc_html__('Bottom Footer Text', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_bottom_text]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_bottom_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_bottom_link]', array(
      'label'    => esc_html__('Bottom Footer Link', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_bottom_link]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_bottom_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_bottom_link_hover]', array(
      'label'    => esc_html__('Bottom Footer Link Hover', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_bottom_link_hover]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_social_icon]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_social_icon]', array(
      'label'    => esc_html__('Social Icon', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_social_icon]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_social_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_social_background]', array(
      'label'    => esc_html__('Social Icon Background', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_social_background]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_social_icon_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_social_icon_hover]', array(
      'label'    => esc_html__('Social Icon Hover', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_social_icon_hover]',
  )));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_footer_social_background_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_footer_social_background_hover]', array(
      'label'    => esc_html__('Social Icon Hover Background', 'newspaper2017'),
      'section'  => 'colors_footer',
      'settings' => 'newspaper2017_theme_options[colors_footer_social_background_hover]',
  )));





}

add_action('customize_register', 'newspaper2017_customize_colors');
?>
