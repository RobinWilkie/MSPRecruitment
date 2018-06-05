<?php 
get_header();

while (have_posts()) {
	the_post(); ?>
	
	<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/laptop-phone.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Let's get in touch</p>
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
      <h5 class="headline headline--small-plus text-purple">Tell us your number and we’ll call you at a time that suits you!</h5>
      <p>Our ethos is one of openness and approachability. We will take the time to get to know you and to find out exactly what style of candidate you are searching for.</p>
    </div>

  </div>

  <div class="container page-section grey-bg">
    <h2 class="headline headline--small-plus t-center text-purple underline">Request a callback</h2>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="48" title="callback"]' ); ?>
        </div>
        </div>
      </div>

        <div class="full-width-split__two">
          <div class="full-width-split__inner">
            <div class="workbox">
          <img src="<?php echo get_theme_file_uri('/images/mobile.jpg'); ?>" class="col-image" alt="A man holding an Apple iphone">
        </div>
          </div>
        </div> 
    </div>
</div>

	<?php
}
get_footer();
 ?>