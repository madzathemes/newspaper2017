<?php function newspaper2017_single_media() {

  $images = get_post_meta( get_the_ID(), 'magazin_post_gallery_images', 1 );
  $videos = get_post_meta(get_the_ID(), "magazin_video_url", true);
  $allowed_html = array('iframe' => array( 'id' => array(),'width' => array(), 'allowfullscreen' => array(), 'height' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array(), 'target' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));

  $video = "";
  if($videos!=""){
  	$video = apply_filters('the_content', "[embed]".$videos."[/embed]");
  }

  if(has_post_format("gallery")) { ?>

    <div class="post-gallery-wrap">
      <div class="post-gallery">
        <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
            <div class="item" data-hash="img-<?php echo esc_attr($attachment_id); ?>">
            <?php echo wp_get_attachment_image( $attachment_id, 'large' ); ?>
          </div>
        <?php } ?>
      </div>

      <div class="post-gallery-nav">
        <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
            <a class="button secondary url" href="#img-<?php echo esc_attr($attachment_id); ?>"><?php echo wp_get_attachment_image( $attachment_id, 'thumbnail' ); ?></a>
        <?php } ?>
      </div>
    </div>

  <?php }

  else if(has_post_format("video")) {

    if($video!=""){
      echo wp_kses($video, $allowed_html );
    }

  } else { ?>

    <?php  if ( has_post_thumbnail() ) { ?>
			<div class="post-img">
        <a class="lightbox" href="<?php echo get_the_post_thumbnail_url(get_the_ID(),"full"); ?>">
				<?php echo get_the_post_thumbnail(get_the_ID(),"large"); ?>
        </a>
			</div>
		<?php } ?>

  <?php } ?>

<?php } ?>
<?php add_filter('newspaper2017_single_media','newspaper2017_single_media'); ?>
