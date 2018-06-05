<?php  get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/contact-laptop.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Get in touch</p>
      </div>
    </div>  
  </div>


  <div class="container page-section">
  <h2 class="headline headline--small-plus t-center text-purple underline">Tell us how we can help you</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
        </div>
      </div>
    </div>


      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="workbox">
            <img src="<?php echo get_theme_file_uri('/images/laptop.jpg'); ?>" class="col-image" alt="A man in a suit holds a mobile telephone while typing on a laptop">
          </div>
        </div>
      </div> 
  </div>
</div>



 <div class="container page-section grey-bg">
  <h2 class="headline headline--small-plus t-center text-purple underline">Prefer to have a conversation?</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <div class="workbox">
        <img src="<?php echo get_theme_file_uri('/images/suit-mobile.jpg'); ?>" class="col-image" alt="A man in a suit holds a mobile telephone">
      </div>
      </div>
    </div>


      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="conversation">
            <h3 class="underline">Request a callback</h3>
            <br>
            <div class="contact-form">
              <?php echo do_shortcode( '[contact-form-7 id="48" title="callback"]' ); ?>
            </div>
         </div>
        </div>
      </div> 
  </div>
</div>

<!-- Location section -->

   <div class="container page-section">
      <h2 class="headline headline--small-plus t-center text-purple underline">Where we are</h2>
      <div class="full-width-split group">
        <div class="full-width-split__one">
          <div class="workbox">             
              <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
          </div>
      </div>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <div class="workbox">
          <div class="address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="larger-text">270 Camphill Avenue<br/>Glasgow<br/>G41 3AS</p>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p class="larger-text">+44 (0)141 636 6033</p>
            <i class="fa fa-envelope-open" aria-hidden="true"></i>
            <p class="larger-text">admin@msprecruitmentsolutions.com</p>
         </div>
       </div>
        </div>
      </div> 
  </div>
</div>



	<?php get_footer(); ?>