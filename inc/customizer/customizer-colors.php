<?php
function newspaper2017_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'newspaper2017'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'newspaper2017'),
    'panel'  => 'colors_settings'
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
    'title'    	=> esc_html__('General', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('newspaper2017_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'newspaper2017'),
      'section'  => 'general_style_settings',
      'settings' => 'newspaper2017_theme_options[colors_default]',
    )));


  $wp_customize->add_setting('newspaper2017_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'newspaper2017_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'newspaper2017'),
      'section'  => 'general_style_settings',
      'settings' => 'newspaper2017_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'mt_colors_header', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header',
    'label'       => esc_attr__( 'Header', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'link'   => esc_attr__( 'Link', 'newspaper2017' ),
        'hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
       'label'       => esc_attr__( 'Header Icons', 'newspaper2017' ),
       'section'     => 'colors_menu',
       'option_type' => 'option',
       'priority'    => 1,
       'choices'     => array(
           'latest'    => esc_attr__( 'Latest', 'newspaper2017' ),
           'popular'   => esc_attr__( 'Popular', 'newspaper2017' ),
           'hot'  => esc_attr__( 'Hot', 'newspaper2017' ),
           'trending'  => esc_attr__( 'Trending', 'newspaper2017' ),
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
     'label'       => esc_attr__( 'Time', 'newspaper2017' ),
     'section'     => 'colors_menu',
     'option_type' => 'option',
     'priority'    => 1,
     'choices'     => array(
         'clock'    => esc_attr__( 'Clock', 'newspaper2017' ),
         'seconds'   => esc_attr__( 'Seconds', 'newspaper2017' ),
         'date'  => esc_attr__( 'Date', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Header Button', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'newspaper2017' ),
        'text_hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'background'  => esc_attr__( 'Background', 'newspaper2017' ),
        'background_hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Menu Background', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'in'    => esc_attr__( 'In', 'newspaper2017' ),
        'out'   => esc_attr__( 'Out', 'newspaper2017' ),
    ),
    'default'     => array(
        'in'    => '',
        'out'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link',
    'label'       => esc_attr__( 'Menu Links', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'newspaper2017' ),
        'text_hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'border'  => esc_attr__( 'Border', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Menu Sub Links', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'newspaper2017' ),
        'text_hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'background'  => esc_attr__( 'Background', 'newspaper2017' ),
        'background_hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Menu Smart Button', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'newspaper2017' ),
        'text_hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'background'  => esc_attr__( 'Background', 'newspaper2017' ),
        'background_hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Menu Search', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'newspaper2017' ),
        'text_hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'background'  => esc_attr__( 'Background', 'newspaper2017' ),
        'background_hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Menu Social Icons', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Icon', 'newspaper2017' ),
        'hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
    ),
    'default'     => array(
        'text'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_mobile', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_mobile',
    'label'       => esc_attr__( 'Mobile Header', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'link'   => esc_attr__( 'Text', 'newspaper2017' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_fixed', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_fixed',
    'label'       => esc_attr__( 'Fixed Header', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 99,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'link'   => esc_attr__( 'Link', 'newspaper2017' ),
        'hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Smart Menu', 'newspaper2017' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'link'   => esc_attr__( 'Link', 'newspaper2017' ),
        'hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
        'out'  => esc_attr__( 'Out', 'newspaper2017' ),
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
    'title'    	=> esc_html__('Footer Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'mt_colors_footer_top', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_top',
    'label'       => esc_attr__( 'Footer Top Colors', 'newspaper2017' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'title'   => esc_attr__( 'Title', 'newspaper2017' ),
        'text'   => esc_attr__( 'Text', 'newspaper2017' ),
        'link'  => esc_attr__( 'Link', 'newspaper2017' ),
        'hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Footer Social Icons', 'newspaper2017' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'icon'    => esc_attr__( 'Icon', 'newspaper2017' ),
        'hover'   => esc_attr__( 'Hover', 'newspaper2017' ),
        'background'   => esc_attr__( 'Background', 'newspaper2017' ),
        'background_hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Footer Bottom Colors', 'newspaper2017' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'newspaper2017' ),
        'border'   => esc_attr__( 'Border', 'newspaper2017' ),
        'text'   => esc_attr__( 'Text', 'newspaper2017' ),
        'link'  => esc_attr__( 'Link', 'newspaper2017' ),
        'hover'  => esc_attr__( 'Hover', 'newspaper2017' ),
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
    'title'    	=> esc_html__('Other Colors', 'newspaper2017'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'colors_post_share', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_share',
    'label'       => esc_attr__( 'Post Share Count', 'newspaper2017' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'newspaper2017' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'newspaper2017' ),
        'icon'   => esc_attr__( 'Icon', 'newspaper2017' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Post View Count', 'newspaper2017' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'newspaper2017' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'newspaper2017' ),
        'icon'   => esc_attr__( 'Icon', 'newspaper2017' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'newspaper2017' ),
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
    'label'       => esc_attr__( 'Post List Category', 'newspaper2017' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'newspaper2017' ),
        'background'   => esc_attr__( 'Background', 'newspaper2017' ),
        'only_text'   => esc_attr__( 'Only Text', 'newspaper2017' ),
    ),
    'default'     => array(
        'text'    => '',
        'background'    => '',
        'only_text'    => '',
    ),
  ));




}

add_action('customize_register', 'newspaper2017_customize_colors');
?>
