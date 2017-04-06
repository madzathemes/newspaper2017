<?php function post_style_1(){ ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">
        <?php newspaper2017_single_cat(); ?>
        <?php newspaper2017_single_title(); ?>
        <?php newspaper2017_single_social(); ?>
        <?php newspaper2017_single_media(); ?>
        <?php newspaper2017_single_top(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } add_filter('post_style_1','post_style_1'); ?>
<?php function post_style_2(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">

        <?php newspaper2017_single_media(); ?>
  			<?php newspaper2017_single_cat(); ?>
        <?php newspaper2017_single_title(); ?>
        <?php newspaper2017_single_social(); ?>
        <?php newspaper2017_single_top(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_3(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
  			<?php newspaper2017_single_cat(); ?>
        <?php newspaper2017_single_title(); ?>
        <?php newspaper2017_single_social(); ?>
        <?php newspaper2017_single_top(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_4(){ ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-media-wrap">
  <div class="container">
    <div class="single-media-top"><?php newspaper2017_single_media(); ?></div>
  </div>
</div>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
  			<?php newspaper2017_single_cat(); ?>
        <?php newspaper2017_single_title(); ?>
        <?php newspaper2017_single_social(); ?>
        <?php newspaper2017_single_top(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php function post_style_5(){ ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-10 col-md-offset-1">
  			<?php newspaper2017_single_cat(); ?>
        <?php newspaper2017_single_title(); ?>
      </div>
    </div>
    <div class="row">
      <div class="single-content col-md-12">
        <div class="single-media-top"><?php newspaper2017_single_media(); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="single-content col-md-8 col-md-offset-2">
        <?php newspaper2017_single_social(); ?>
        <?php newspaper2017_single_top(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_6(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap">
      <div class="container">
      	<div class="single-media-top single-image-gradient">
      		<?php echo get_the_post_thumbnail(get_the_ID(),"full"); ?>
      		<div class="single-media-title">
      			<div class="col-md-9">
      				<?php newspaper2017_single_cat(); ?>
      	      <?php newspaper2017_single_title(); ?>
      			</div>
      			<div class="col-md-12">
      			  <?php newspaper2017_single_social(); ?>
      			</div>
      		</div>
        </div>
      </div>
    </div>
	<?php } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
        <?php newspaper2017_single_top(); ?>
  			<div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_7(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap">
      <div class="single-media">
        <div class="single-media-wrap lazyload" data-bg="<?php echo get_the_post_thumbnail_url(get_the_ID(),"full"); ?>">
      	<div class="single-image-gradient">
    			<div class="single-media-title">
            <div class="container">
              <div class="row">
        				<div class="col-md-9">
        					<?php newspaper2017_single_cat(); ?>
        		      <?php newspaper2017_single_title(); ?>
        				</div>
        				<div class="col-md-12">
        				  <?php newspaper2017_single_social(); ?>
        				</div>
              </div>
            </div>
    			</div>
    		</div>
      </div>
    </div>
  </div>
	<?php } ?>
  <div class="post-content-wrap mt-content-container">
    <div class="container">
      <div class="row">
        <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
          <?php newspaper2017_single_top(); ?>
    			<div class="entry-content"><?php the_content(); ?></div>
          <?php newspaper2017_single_bottom(); ?>
        </div>
        <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
          <?php newspaper2017_single_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php function post_style_8(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap">
    </div>
    	<div class="single-media-top single-image-gradient">
  			<div class="single-media-title">
  				<div class="col-md-9">
  					<?php newspaper2017_single_cat(); ?>
  		      <?php newspaper2017_single_title(); ?>
  				</div>
  				<div class="col-md-12">
  				  <?php newspaper2017_single_social(); ?>
  				</div>
  			</div>
  		</div>
	<?php } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
        <?php newspaper2017_single_top(); ?>
  			<div class="entry-content"><?php the_content(); ?></div>
        <?php newspaper2017_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
        <?php newspaper2017_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_9(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("newspaper2017_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() )  { ?>
  	<div class="single-media-top single-image-gradient">
			<div class="single-media-title">
				<div class="col-md-9">
					<?php newspaper2017_single_cat(); ?>
		      <?php newspaper2017_single_title(); ?>
				</div>
				<div class="col-md-12">
				  <?php newspaper2017_single_social(); ?>
				</div>
			</div>
		</div>
	<?php } ?>
  <div class="row">
    <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
      <?php newspaper2017_single_top(); ?>
			<div class="entry-content"><?php the_content(); ?></div>
      <?php newspaper2017_single_bottom(); ?>
    </div>
    <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar">
      <?php newspaper2017_single_sidebar(); ?>
    </div>
  </div>
<?php } ?>
