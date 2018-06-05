<?php 

get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/shakehands-interview.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Jobs</h1>
      <div class="page-banner__intro">
        <p>Looking for your next career move?</p>
      </div>
    </div>  
 </div>

<div class="container page-section">
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h3 class="headline t-center underline">Find your future role</h3>
        	<div class="job_search">
            <?php get_search_form(); ?>
            </div>
        </div>
      </div>

        <div class="full-width-split__two">
          <div class="full-width-split__inner">
            <div class="dropdown">
				<div class="drop">
					<label for="touch"><span class="drop_title">Find jobs by region</span></label>               
			  		<input type="checkbox" id="touch"> 

			  		<ul class="slide min-list">
			    		<li class="page_item"><a href="<?php echo esc_url(site_url('/category/scotland')); ?>">Scotland</a></li>
						<li class="page_item"><a href="<?php echo esc_url(site_url('/category/london')); ?>">London</a></li>
						<li class="page_item"><a href="<?php echo esc_url(site_url('/category/south-east-england')); ?>">South East England</a></li>
					    <li class="page_item"><a href="<?php echo esc_url(site_url('/category/north-england')); ?>">North England</a></li>
				        <li class="page_item"><a href="<?php echo esc_url(site_url('/category/west-midlands')); ?>">West Midlands</a></li>
				        <li class="page_item"><a href="<?php echo esc_url(site_url('/category/east-midlands')); ?>">East Midlands</a></li>
				        <li class="page_item"><a href="<?php echo esc_url(site_url('/category/wales')); ?>">Wales</a></li>
				        <li class="page_item"><a href="<?php echo esc_url(site_url('/category/northern-ireland')); ?>">Northern Ireland</a></li>
				        <li class="page_item"><a href="<?php echo esc_url(site_url('/category/international')); ?>">International</a></li>
			  		</ul>
				</div>
			</div>
          </div>
        </div> 
   </div>
</div>

 <div class="container container--narrow page-section all-jobs">
 	<?php 
 	while (have_posts()) {
 		the_post(); ?>
 		<div class="post-item grey-bg">
 			<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 			<div class="metabox">
 				<p>Posted on <?php the_time('j-n-y'); ?></p>
 			</div>

 			<div class="generic-content">
 				<?php the_excerpt(); ?>
 				<p><a class="btn btn--purple" href="<?php the_permalink(); ?>">More Details</a></p>
 			</div>
 		</div>

 		<?php
 	}

 	echo paginate_links();

 	 ?>
 	
 </div>

<?php
get_footer();

 ?>