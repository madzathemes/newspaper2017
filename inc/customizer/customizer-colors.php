<?php
function mellany_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'mellany'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'mellany'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'mellany'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'mellany_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'mellany_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'mellany' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'mellany_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'mellany_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'mellany' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General', 'mellany'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('mellany_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mellany_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'mellany'),
      'section'  => 'general_style_settings',
      'settings' => 'mellany_theme_options[colors_default]',
    )));


  $wp_customize->add_setting('mellany_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mellany_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'mellany'),
      'section'  => 'general_style_settings',
      'settings' => 'mellany_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'mellany'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'mt_colors_header', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header',
    'label'       => esc_attr__( 'Header', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'link'   => esc_attr__( 'Link', 'mellany' ),
        'hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_header_icons', array(
       'type'        => 'multicolor',
       'settings'    => 'mt_colors_header_icons',
       'label'       => esc_attr__( 'Header Icons', 'mellany' ),
       'section'     => 'colors_menu',
       'option_type' => 'option',
       'priority'    => 1,
       'choices'     => array(
           'latest'    => esc_attr__( 'Latest', 'mellany' ),
           'popular'   => esc_attr__( 'Popular', 'mellany' ),
           'hot'  => esc_attr__( 'Hot', 'mellany' ),
           'trending'  => esc_attr__( 'Trending', 'mellany' ),
       ),
       'default'     => array(
           'latest'    => '',
           'popular'    => '',
           'hot'    => '',
           'trending'    => '',
      ),
   ));

   Kirki::add_field( 'mt_colors_time', array(
     'type'        => 'multicolor',
     'settings'    => 'mt_colors_time',
     'label'       => esc_attr__( 'Time', 'mellany' ),
     'section'     => 'colors_menu',
     'option_type' => 'option',
     'priority'    => 1,
     'choices'     => array(
         'clock'    => esc_attr__( 'Clock', 'mellany' ),
         'seconds'   => esc_attr__( 'Seconds', 'mellany' ),
         'date'  => esc_attr__( 'Date', 'mellany' ),
     ),
     'default'     => array(
         'clock'    => '',
         'seconds'    => '',
         'date'    => ''
     ),
   ));


  Kirki::add_field( 'mt_colors_header_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_button',
    'label'       => esc_attr__( 'Header Button', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'mellany' ),
        'text_hover'   => esc_attr__( 'Hover', 'mellany' ),
        'background'  => esc_attr__( 'Background', 'mellany' ),
        'background_hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_bg', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_bg',
    'label'       => esc_attr__( 'Menu Background', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'in'    => esc_attr__( 'In', 'mellany' ),
        'out'   => esc_attr__( 'Out', 'mellany' ),
    ),
    'default'     => array(
        'in'    => '',
        'out'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link',
    'label'       => esc_attr__( 'Menu Links', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'mellany' ),
        'text_hover'   => esc_attr__( 'Hover', 'mellany' ),
        'border'  => esc_attr__( 'Border', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'border'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link_sub', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link_sub',
    'label'       => esc_attr__( 'Menu Sub Links', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'mellany' ),
        'text_hover'   => esc_attr__( 'Hover', 'mellany' ),
        'background'  => esc_attr__( 'Background', 'mellany' ),
        'background_hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_button',
    'label'       => esc_attr__( 'Menu Smart Button', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'mellany' ),
        'text_hover'   => esc_attr__( 'Hover', 'mellany' ),
        'background'  => esc_attr__( 'Background', 'mellany' ),
        'background_hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_search', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_search',
    'label'       => esc_attr__( 'Menu Search', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'mellany' ),
        'text_hover'   => esc_attr__( 'Hover', 'mellany' ),
        'background'  => esc_attr__( 'Background', 'mellany' ),
        'background_hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_icon', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_icon',
    'label'       => esc_attr__( 'Menu Social Icons', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Icon', 'mellany' ),
        'hover'   => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_mobile', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_mobile',
    'label'       => esc_attr__( 'Mobile Header', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'link'   => esc_attr__( 'Text', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_fixed', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_fixed',
    'label'       => esc_attr__( 'Fixed Header', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 99,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'link'   => esc_attr__( 'Link', 'mellany' ),
        'hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_smart', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_smart',
    'label'       => esc_attr__( 'Smart Menu', 'mellany' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'link'   => esc_attr__( 'Link', 'mellany' ),
        'hover'  => esc_attr__( 'Hover', 'mellany' ),
        'out'  => esc_attr__( 'Out', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => '',
        'out'    => '',
    ),
  ));


  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'mellany'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'mt_colors_footer_top', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_top',
    'label'       => esc_attr__( 'Footer Top Colors', 'mellany' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'title'   => esc_attr__( 'Title', 'mellany' ),
        'text'   => esc_attr__( 'Text', 'mellany' ),
        'link'  => esc_attr__( 'Link', 'mellany' ),
        'hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'text'    => '',
        'title'    => '',
        'link'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_footer_social', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_social',
    'label'       => esc_attr__( 'Footer Social Icons', 'mellany' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'icon'    => esc_attr__( 'Icon', 'mellany' ),
        'hover'   => esc_attr__( 'Hover', 'mellany' ),
        'background'   => esc_attr__( 'Background', 'mellany' ),
        'background_hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'icon'    => '',
        'hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_footer_bottom', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_bottom',
    'label'       => esc_attr__( 'Footer Bottom Colors', 'mellany' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'mellany' ),
        'border'   => esc_attr__( 'Border', 'mellany' ),
        'text'   => esc_attr__( 'Text', 'mellany' ),
        'link'  => esc_attr__( 'Link', 'mellany' ),
        'hover'  => esc_attr__( 'Hover', 'mellany' ),
    ),
    'default'     => array(
        'background'    => '',
        'border'    => '',
        'text'    => '',
        'link'    => '',
        'hover'    => '',
    ),
  ));


  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'mellany'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'colors_post_share', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_share',
    'label'       => esc_attr__( 'Post Share Count', 'mellany' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'mellany' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'mellany' ),
        'icon'   => esc_attr__( 'Icon', 'mellany' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));
  Kirki::add_field( 'colors_post_view', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_view',
    'label'       => esc_attr__( 'Post View Count', 'mellany' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'mellany' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'mellany' ),
        'icon'   => esc_attr__( 'Icon', 'mellany' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_cat', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_cat',
    'label'       => esc_attr__( 'Post List Category', 'mellany' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'mellany' ),
        'background'   => esc_attr__( 'Background', 'mellany' ),
        'only_text'   => esc_attr__( 'Only Text', 'mellany' ),
    ),
    'default'     => array(
        'text'    => '',
        'background'    => '',
        'only_text'    => '',
    ),
  ));




}

add_action('customize_register', 'mellany_customize_colors');
?>
