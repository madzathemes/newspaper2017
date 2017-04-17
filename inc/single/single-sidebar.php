<?php function newspaper2017_single_sidebar() {?>
  <?php $allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array())); ?>
  <?php $option = get_option("newspaper2017_theme_options"); ?>
  <?php $optionz = get_option("magazin_theme_options"); ?>
  <?php if ( is_active_sidebar( 'sidebar-single-widget-area' ) ) { ?>

    <?php dynamic_sidebar( 'sidebar-single-widget-area' ); ?>

  <?php } else { ?>

    <?php if  (!empty($optionz['sidebar_ad_top'])) {  ?>
      <div class="advertise text-center">
        <?php echo html_entity_decode($optionz['sidebar_ad_top']); ?>
      </div>
    <?php } ?>

    <?php if ( shortcode_exists( 'posts_trending' ) ) { ?>
      <h2 class="heading"><span><?php echo esc_html__('Our Picks', 'newspaper2017'); ?></span></h2>
      <?php echo do_shortcode('[posts type=normal offset="3" item_nr=3]') ?>
      <?php if  (!empty($optionz['sidebar_ad_middle'])) {  ?>
        <div class="advertise text-center">
          <?php echo html_entity_decode($optionz['sidebar_ad_middle']); ?>
        </div>
      <?php } ?>
    <?php } ?>

    <?php if ( shortcode_exists( 'posts_trending' ) ) { ?>
      <h2 class="heading"><span><?php esc_html_e('Most Popular', 'newspaper2017'); ?></span></h2>
      <?php echo do_shortcode('[posts type=small item_nr=5]') ?>
      <div class="space-20"></div>
      <?php echo do_shortcode('[subscribe]') ?>
      <?php if  (!empty($optionz['sidebar_ad_bottom'])) {  ?>
        <div class="advertise text-center">
          <?php echo html_entity_decode($optionz['sidebar_ad_bottom']); ?>
        </div>
      <?php } ?>
    <?php } ?>
  <?php } ?>
<?php } ?>
