<?php 
get_header();

while (have_posts()) {
	the_post(); ?>
	
	<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/client.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Let's work together</p>
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
      <h5 class="headline headline--small-plus text-purple">If you are looking for the right person to fill a role in your business, we can help</h5>
      <p>Searching for a suitable candidate on your own can take up valuable time that could otherwise be spent managing your business and generating income. We already have many prospective candidates on our books and can easily arrange a shortlist of those who meet your requirements: all you need to do is interview those few to find your ideal candidate.</p>
    </div>

  </div>

 

<div class="container page-section all-text grey-bg">
  <h2 class="headline t-center underline">Looking for the right candidate?</h2>
  <div class="two-cols">
    <p class="t-center col">Together we have over 70 years of combined print and packaging recruitment experience across our team: we have been on your side of the table interviewing candidates, and we have successfully placed 1,000’s of interview candidates on the other. We use this experience, combined with our recruiting know-how to match suitable candidates to jobs in companies from small independents to large multinationals. Our ethos is one of openness and approachability. We will take the time to get to know you and to find out exactly what style of candidate you are searching for. </p>

    <p class="t-center col">Our search criteria will match your requirements with registered job seekers and search and selection prospects.You can be confident that we will only present carefully matched candidates for interview. Our sole purpose is to secure high calibre, professionally selected candidates to fill your vacancies. Simply submit your job brief to us or, if you prefer, you can call, email us or request a callback and we will be in touch as quickly as possible.</p>
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