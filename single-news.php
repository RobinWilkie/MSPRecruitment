<?php 
get_header();

while (have_posts()) {
	the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/working.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  	<div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/news') ?>"><i class="fas fa-user-tie" aria-hidden="true"></i> All News</a> <span class="metabox__main">Posted on <?php the_time('j-n-y'); ?></span></p>
    </div>

  	<div class="generic-content">
  		<div class="row group">
  			<div class="one-third">
  				<?php the_post_thumbnail() ?>
  			</div>
  			<div class="two-thirds">
  				<?php the_content() ?>
  			</div>
  		</div>
  	</div>
  </div>

	<?php
}

get_footer();
 ?>
