<?php 
get_header();

while (have_posts()) {
	the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/laptop-phone.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  	<div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/jobs') ?>"><i class="fas fa-user-tie" aria-hidden="true"></i> All Jobs</a> <span class="metabox__main">Posted on <?php the_time('j-n-y'); ?></span></p>
    </div>

  	<div class="generic-content">
      <br>
      <p><span class="title-txt">Job Title:</span> <?php the_title(); ?></p>
      <br>
  		<?php the_content(); ?>
      <br>
      <p><span class="title-txt">Location:</span> <?php the_field('location'); ?></p>
      <p><span class="title-txt">Salary:</span> <?php the_field('salary'); ?></p>
      <p><span class="title-txt">Reference Number:</span> MSP<?php the_field('reference_number'); ?></p>
      <p><span class="title-txt">Categories:</span> <?php echo get_the_category_list(', '); ?></p>
  	</div>
  </div>

  <div class="container page-section grey-bg">
    <h2 class="headline headline--small-plus t-center text-purple underline">Apply now</h2>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <div class="contact-form">
            <?php echo do_shortcode( '[contact-form-7 id="75" title="upload-cv"]' ); ?>
          </div>
        </div>
      </div>

        <div class="full-width-split__two">
          <div class="full-width-split__inner">
            <div class="workbox">
          <img src="<?php echo get_theme_file_uri('/images/cv.jpg'); ?>" class="col-image" alt="A CV or resume next to a laptop on a table">
        </div>
          </div>
        </div> 
    </div>
</div>

	<?php
}

get_footer();
 ?>