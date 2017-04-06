<?php
function newspaper2017_customize_ads($wp_customize){

  //  =============================
  //  = AD 1 Image             =
  //  =============================
  $wp_customize->add_panel( 'newspaper2017_ads', array(
    'priority'       => 310,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Ads', 'newspaper2017'),
    'description'    => '',
  ));

  $wp_customize->add_section('sidebar_ad_top', array(
    'title'    	=> esc_html__('Sidebar top ad', 'newspaper2017'),
    'priority' => 5,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[sidebar_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[sidebar_ad_top]',
    'label'       => esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'sidebar_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('sidebar_ad_middle', array(
    'title'    	=> esc_html__('Sidebar middle ad', 'newspaper2017'),
    'priority' => 6,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[sidebar_ad_middle]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[sidebar_ad_middle]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'sidebar_ad_middle',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('sidebar_ad_bottom', array(
    'title'    	=> esc_html__('Sidebar bottom ad', 'newspaper2017'),
    'priority' => 7,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[sidebar_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[sidebar_ad_bottom]',
    'label'       => esc_html__('YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'sidebar_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('article_ad_bottom', array(
    'title'    	=> esc_html__('Article bottom ad', 'newspaper2017'),
    'priority' => 8,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[article_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[article_ad_bottom]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'article_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('footer_ad_top', array(
    'title'    	=> esc_html__('Footer top ad', 'newspaper2017'),
    'priority' => 9,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[footer_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[footer_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'footer_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_1', array(
    'title'    	=> esc_html__('Custom ad 1', 'newspaper2017'),
    'priority' => 11,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_1]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_1]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_1',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_2', array(
    'title'    	=> esc_html__('Custom ad 2', 'newspaper2017'),
    'priority' => 12,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_2]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_2]',
    'label'       => esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_2',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_3', array(
    'title'    	=> esc_html__('Custom ad 3', 'newspaper2017'),
    'priority' => 13,
    'panel'  => 'newspaper2017_ads',
  ));


  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_3]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_3]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_3',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_4', array(
    'title'    	=> esc_html__('Custom ad 4', 'newspaper2017'),
    'priority' => 14,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_4]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_4]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_4',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_5', array(
    'title'    	=> esc_html__('Custom ad 5', 'newspaper2017'),
    'priority' => 15,
    'panel'  => 'newspaper2017_ads',
  ));


  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_5]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_5]',
    'label'       => esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_5',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_6', array(
    'title'    	=> esc_html__('Custom ad 6', 'newspaper2017'),
    'priority' => 16,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_6]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_6]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_6',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_7', array(
    'title'    	=> esc_html__('Custom ad 7', 'newspaper2017'),
    'priority' => 17,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_7]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_7]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_7',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_8', array(
    'title'    	=> esc_html__('Custom ad 8', 'newspaper2017'),
    'priority' => 18,
    'panel'  => 'newspaper2017_ads',
  ));


  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_8]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_8]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_8',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_9', array(
    'title'    	=> esc_html__('Custom ad 9', 'newspaper2017'),
    'priority' => 19,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[custom_ad_9]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[custom_ad_9]',
    'label'       =>  esc_html__('YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'custom_ad_9',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));
  $wp_customize->add_section('header_ad_top', array(
    'title'    	=> esc_html__('Header Ad', 'newspaper2017'),
    'priority' => 1,
    'panel'  => 'newspaper2017_ads',
  ));

  Kirki::add_field( 'newspaper2017_theme_options[header_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'newspaper2017_theme_options[header_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'newspaper2017' ),
    'section'     => 'header_ad_top',
    'default'     => '',
    'priority'    => 1,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


}

add_action('customize_register', 'newspaper2017_customize_ads');
?>
