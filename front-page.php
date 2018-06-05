<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/meeting.jpg'); ?>);"></div>

    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">MSP RECRUITMENT SOLUTIONS</h1>
      <h2 class="headline headline--medium">Delivering exceptional candidates</h2>
      <h2 class="headline headline--medium">that exceed your expectations</h2>
      <br>
      <a href="<?php echo esc_url(site_url('/contact-us')); ?>" class="btn btn--large btn--purple">GET IN TOUCH</a>
    </div>
</div>


<!-- About section -->
<div class="container page-section">
  <h2 class="headline headline--small-plus t-center text-purple underline">Welcome to MSP Recruitment Solutions</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <p class="larger-text">We are a leading print and packaging recruitment agency, matching employees to jobs within businesses of all sizes and scope, from small, independent traders to large, multi-national companies.</p>
      </div>
    </div>


      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <p class="larger-text">We are highly experienced and professional and our aim is to create long-lasting relationships between employers and employees, both of whom we value and respect.</p>
        </div>
      </div> 
  </div>
  <p class="t-center no-margin"><a href="<?php echo site_url('/about-us'); ?>" class="btn btn--orange">More about us</a></p>
</div>


<!-- Clients and Candidates section -->
<div class="container page-section purple-bg">
  <h2 class="headline t-center text-white underline">Let's Work Together</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <div class="workbox">
          <a href="<?php echo site_url('clients') ?>"><img src="<?php echo get_theme_file_uri('/icons/shakehands.png'); ?>" class="icon-medium"></a>
          <h3 class="text-white underline">Clients &amp; Employers</h3>
          <p class="text-white">All of our clients value our experience, connections and the accurate shortlist of candidates we can produce. If you are looking to recruit the top talent, we can help.</p>
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/clients')); ?>" class="btn btn--orange">HOW WE CAN WORK TOGETHER</a></p>
        </div>
      </div>
    </div>


      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="workbox">
          <a href="<?php echo site_url('candidates') ?>"><img src="<?php echo get_theme_file_uri('/icons/candidate.png'); ?>" class="icon-medium"></a>
          <h3 class="text-white underline">Candidates &amp; Applicants</h3>
          <p class="text-white">We pride ourselves on our relationships with our candidates. To ensure you are placed in the right position, we take the time to really get to know you and your needs.</p>
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/candidates')); ?>" class="btn btn--orange">HOW WE CAN HELP YOUR CAREER</a></p>
        </div>
        </div>
      </div> 
  </div>
</div>


<!-- Recent Jobs section -->
<div class="container page-section">
  <div class="row">
      <div class="full-width">
        <h2 class="headline headline--small-plus t-center underline">Recent Jobs</h2>

        <?php 
        $homeJobs = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'jobs'
        ));

        while($homeJobs->have_posts()){
          $homeJobs->the_post(); ?>

              <div class="event-summary">
                    <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                      <span class="event-summary__month"><?php the_time( 'M' ) ?></span>
                      <span class="event-summary__day"><?php the_time( 'd' ) ?></span>  
                    </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php if(has_excerpt()){
                      echo get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 18);
                    } ?><a href="<?php the_permalink(); ?>" class="nu gray"> Read more</a></p>
                  </div>
              </div>

          <?php } ?>        
               
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('jobs'); ?>" class="btn btn--purple">View All Jobs</a></p>

      </div>
    </div>
</div>



<!-- Slider for testimonials -->
  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/working.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;I have worked with Peter and MSP Recruitment on a few projects regarding Talent Acquisition for Schawk. He and his colleagues have a wealth of great contacts within the industry & have been flawless in bringing the highest talent to us for review. Any position open in SGK I would field it out to Peter as he will deliver back solid candidates.&#34;</p>
        <p class="t-center">Dan Paterson, Group Managing Director, Schawk</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/clients'); ?>" class="btn btn--orange">Find out more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/buildings.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;I have worked with Peter and MSP Recruitment on a few projects regarding Talent Acquisition for Schawk. He and his colleagues have a wealth of great contacts within the industry & have been flawless in bringing the highest talent to us for review. Any position open in SGK I would field it out to Peter as he will deliver back solid candidates.&#34;</p>
        <p class="t-center">John Smith - Group MD, Printforce</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/clients'); ?>" class="btn btn--orange">Find out more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/interview.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <p class="t-center">&#34;I have worked with Peter and MSP Recruitment on a few projects regarding Talent Acquisition for Schawk. He and his colleagues have a wealth of great contacts within the industry & have been flawless in bringing the highest talent to us for review. Any position open in SGK I would field it out to Peter as he will deliver back solid candidates.&#34;</p>
        <p class="t-center">John Smith - Group MD, Printforce</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/clients'); ?>" class="btn btn--orange">Find out more</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Specialist section -->
<div class="container page-section purple-bg">
  <h2 class="headline t-center text-white underline">Specialists</h2>
  <br>
  <h3 class="headline t-center text-white">We specialise in print and packaging recruitment in many fields</h3>
  <br>
 <div class="specialist-fields">
   <div class="fields">
     <ul class="field-list">
       <li>Point of Sale</li>
       <li>Bureau Services</li>
       <li>Exhibition</li>
       <li>Cardboard Engineering</li>
       <li>Audiovisual</li>
     </ul>
   </div>

   <div class="fields">
     <ul class="field-list">
       <li>Print</li>
       <li>Retail Interiors</li>
       <li>Signage</li>
       <li>Display</li>
     </ul>
   </div>

   <div class="fields">
     <ul class="field-list">
       <li>Event Services</li>
       <li>Media</li>
       <li>Reprographics</li>
       <li>Packaging</li>
       <li>Advertising Services</li>
     </ul>
   </div>
 </div>
</div>

<!-- Client section -->

 <div class="container page-section page-bg__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/shakehands-interview-col.jpg' ) ?>);">
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <div class="workbox">
          <h3 class="headline headline--small-plus-white t-center text-white underline">Looking for the right candidate?</h3>
           <p class="text-white">Searching for a suitable candidate on your own can take up valuable time that could otherwise be spent managing your business and generating income. We already have many prospective candidates on our books and can easily arrange a shortlist of those who meet your requirements: all you need to do is interview those few to find your ideal candidate.</p>
          </div>
      </div>
    </div>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="workbox">
           <a href="<?php echo site_url('clients') ?>"><i class="fa fa-file" aria-hidden="true"></i></a>
          <br>         
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/clients/submit-a-brief')); ?>" class="btn btn--small btn--orange">SUBMIT A BRIEF</a></p>
          <br>
          <a href="<?php echo site_url('candidates') ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
          <br>
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/clients/request-a-callback')); ?>" class="btn btn--small btn--orange">REQUEST A CALLBACK</a></p>
          </div>
        </div>
      </div> 
  </div>
</div>


<!-- Clients Include section -->
<div class="container page-section">
  <h2 class="headline t-center underline">Our Clients</h2>
  <div class="clients-row">
    <img src="<?php echo get_theme_file_uri('/images/clients/global.png'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/hobs.png'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/kesslers.jpg'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/matthews.png'); ?>" class="logo-medium">
  </div>
  <div class="clients-row">
    <img src="<?php echo get_theme_file_uri('/images/clients/schawk.png'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/sgk.png'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/sgs.png'); ?>" class="logo-medium">
    <img src="<?php echo get_theme_file_uri('/images/clients/taylor.png'); ?>" class="logo-medium">
  </div>
</div>

<!-- Candidate section -->

 <div class="container page-section page-bg__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/contact-laptop-col.jpg' ) ?>);">
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <div class="workbox">
          <h3 class="headline headline--small-plus-white t-center text-white underline">Looking for your next career move?</h3>
           <p class="text-white">It can be frustrating when you apply for a job only to be told “your skills and experience don’t match what we are looking for” or “you are over qualified”. Most professional job seekers have experienced this at least once in their career search. Contact us and we will spend time with you, taking all of your details and, more importantly finding out exactly what your need areas are, the type of role you are searching for and the skills and the experience you have to offer an employer.</p>
          </div>
      </div>
    </div>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="workbox">
           <a href="<?php echo esc_url(site_url('/upload-your-cv')); ?>"><i class="fa fa-upload" aria-hidden="true"></i></a>
          <br>       
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/upload-your-cv')); ?>" class="btn btn--small btn--orange">UPLOAD YOUR CV</a></p>
          <br>
          <a href="<?php echo esc_url(site_url('/jobs')); ?>"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
          <br>
          <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/jobs')); ?>" class="btn btn--small btn--orange">LATEST JOBS</a></p>
          </div>
        </div>
      </div> 
  </div>
</div>


<?php
get_footer();
 ?>