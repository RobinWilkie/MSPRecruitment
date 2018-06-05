<?php 
get_header();

while (have_posts()) {
	the_post(); ?>
	
	<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/laptop-phone.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Let's get you that job</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

<?php 
$theParent = wp_get_post_parent_id(get_the_ID());

if($theParent){ ?>
	<div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

<?php } ?>

    
    
    <?php  
    $testTheArray = get_pages(array(
    	'child_of' => get_the_ID()
    ));

    if($theParent or $testTheArray){ ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php 
        	if($theParent){
        		$findChildrenOf = $theParent;
        	} else {
        		$findChildrenOf = get_the_ID();
        	}

        	wp_list_pages(array(
        		'title_li' => NULL,
        		'child_of' => $findChildrenOf
        	));
         ?>
      </ul>
    </div>
    <?php } ?>


      <div class="generic-content">
       <h5 class="headline headline--small-plus text-purple">Upload your CV and our team will get to work!</h5>
      <p>By getting to know you, we can select which available posts you would be most suited to and therefore have the best chance of success. We are here to find you a job, not just any job but the right one for you. We will go to great lengths to ensure that we speak with you regularly throughout your journey with us up to and until we are satisfied that you are settled into your new position.</p>
    </div>

  </div>

  <div class="container page-section grey-bg">
    <h2 class="headline headline--small-plus t-center text-purple underline">Upload your CV</h2>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="77" title="upload-cv-main"]' ); ?>
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