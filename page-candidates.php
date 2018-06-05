<?php 
get_header();

while (have_posts()) {
	the_post(); ?>
	
	<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/candidate.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Looking for your next career move?</p>
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
      <!-- <?php the_content(); ?> -->
       <h5 class="headline headline--small-plus text-purple">If you are looking for the right job, we can help</h5>
      <p>It can be frustrating when you apply for a job only to be told “your skills and experience don’t match what we are looking for” or “you are over qualified”. Most professional job seekers have experienced this at least once in their career search. Contact us and we will spend time with you, taking all of your details and, more importantly finding out exactly what your need areas are, the type of role you are searching for and the skills and the experience you have to offer an employer.</p>
    </div>

  </div>


<div class="container page-section all-text grey-bg">
  <h2 class="headline t-center underline">Looking for the right job?</h2>
  <div class="two-cols">
    <p class="t-center col">In today’s business world time is a valuable commodity. Employers who turn to us for help with their recruitment don’t want to waste any time reading through application details or interviewing candidates who lack the right skills, qualifications or personality for the job. Just as you don’t want to waste your time filling in application forms or attending interviews only to come away empty-handed.</p>

    <p class="t-center col">By getting to know you, we can select which available posts you would be most suited to and therefore have the best chance of success. We are here to find you a job, not just any job but the right one for you. We will go to great lengths to ensure that we speak with you regularly throughout your journey with us up to and until we are satisfied that you are settled into your new position.</p>
  </div>
  <div class="t-center">
  <a href="<?php echo esc_url(site_url('/contact-us')); ?>" class="btn btn--purple">GET IN TOUCH</a>
  </div>
</div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/working.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&#34;</p>
        <p class="t-center">John Smith - Group MD, Printforce</p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/buildings.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&#34;</p>
        <p class="t-center">John Smith - Group MD, Printforce</p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/interview.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&#34;</p>
        <p class="t-center">John Smith - Group MD, Printforce</p>
      </div>
    </div>
  </div>
</div>

	<?php
}
get_footer();
 ?>