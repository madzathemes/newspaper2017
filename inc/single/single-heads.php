<?php function newspaper2017_single_cat() {?>

  <div class="single-cat-wrap"><?php echo get_the_category_list(); ?></div>

<?php } ?>
<?php function newspaper2017_single_title() {?>

  <h1 class="single-title"><?php echo get_the_title(); ?></h1>

<?php } ?>
<?php function newspaper2017_single_social() {

/* Share Meta from Magazin framework */
$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
$shares = "";
if (function_exists('magazin_theme_setup')) {
  $shares = magazin_get_shares(get_the_ID());
}
if (!empty($share)){
	$shares = $share+$shares;
}
/* View Meta from Magazin framework */
$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
$viewes = "0";
if (!empty($view)){
	$viewes = $view;
}

$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

?>
  <div class="after-title">
    <div class="pull-left">
      <div class="author-img pull-left">
        <?php global $post; echo get_avatar( $post->post_author, 30 ); ?>
      </div>
      <div class="author-info">
        <strong><?php the_author_posts_link(); ?></strong>
        <small class="color-silver-light"><?php the_date('M d, Y'); ?></small>
      </div>
    </div>
    <div class="post-statistic pull-left">
      <span class="stat-shares color-silver-light"><?php echo esc_attr($shares); ?></span>
      <span class="stat-views"><?php if(function_exists('magazin_PostViews')){   echo esc_attr($viewes) + magazin_PostViews(get_the_ID()); } ?></span>
      <?php if (get_comments_number()!="0") { ?><span class="stat-comments color-silver-light"><?php echo get_comments_number(); ?></span><?php } ?>
    </div>
    <ul class="share top">
      <li class="share-facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share Post', 'newspaper2017'); ?></span></a></li>
      <?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
      <li class="share-twitter"><a href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Share On Twitter', 'newspaper2017'); ?></span></a></li>
      <li class="share-more">
        <a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google"></div></a>
        <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest"></div></a>
        <div class="share-more-wrap"><div class="share-more-icon">+</div></div>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>

<?php } ?>
