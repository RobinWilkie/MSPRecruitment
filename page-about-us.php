<?php  get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/city.jpg' ) ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Get to know us</p>
      </div>
    </div>  
  </div>

<!-- About section -->
  <div class="container page-section">
  <h2 class="headline headline--small-plus t-center text-purple underline">We are MSP Recruitment Solutions</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <p class="larger-text">MSP Recruitment Solutions is an established market leader specialising in international print and packaging recruitment solutions for the Brand Solutions, Visual Merchandising and Graphic Communications sectors.
        Established in 1995, our aim is, and always has been, to consistently provide a service that is well beyond the reach of our competitors and always exceeds the expectations of people we do business with.</p>
      </div>
    </div>


      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <p class="larger-text">We bring together an experienced team of print and packaging recruitment specialists and a thorough understanding of the industry. It is our professionalism and knowledge that has made us a leader in this sector.
          Our ethos is simple – to assist Candidates with their career aspirations and help Clients to meet their business needs.
          We recruit roles for all levels always applying the same philosophy and approach to each and every project we undertake.</p>
        </div>
      </div> 
  </div>
</div>

<!-- Colin Reedman Info section -->
<div class="container page-section purple-bg">
  <h2 class="headline headline--small t-center underline text-white">Our Managing Director</h2>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="workbox">
        <img src="<?php echo get_theme_file_uri('/icons/colin-reedman.gif'); ?>" class="profile-pic" alt="A headshot of Colin Reedman">
        <h3 class="text-white underline">Colin Reedman</h3>
      </div>
    </div>
    <div class="full-width-split__two">
      <div class="workbox-text-left">
        <p class="text-white">
          Colin has 20 years Print and Packaging executive search experience in the UK, Ireland, Europe, APAC and the US, having worked with the boards of many companies from SMEs to major corporations.
          Prior to founding MSP Recruitment Solutions Colin co-led the Packaging Pre-Press, Print and Paper executive search divisions at Harrison Scott Associates.
          He joined the recruitment industry in 1996 after spending his earlier years in offshore diving operations. Working for many of the world’s major oil companies
          Having swapped the Ayrshire coast for Glasgow Colin still finds time at the weekend to head for the country and, when time permits, the major peaks of the Scottish Highlands.
        </p>
      </div>
    </div>
  </div>
  <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/request-a-callback')); ?>" class="btn btn--orange">REQUEST A CALLBACK</a></p>
</div>

<div class="wrapper number-wrap" id="msp-numbers">
    <div class="counter col_fourth">
      <i class="fa fa-calendar fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="70" data-speed="1500"></h2>
       <p class="count-text ">More than 70 years combined experience</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-users fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="10000" data-speed="1000"></h2>
      <p class="count-text ">Over 10,000 candidate interviews</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-briefcase fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="3000" data-speed="1400"></h2>
      <p class="count-text ">More than 3000 placements</p>
    </div>

    <div class="counter col_fourth end">
      <i class="fa fa-line-chart fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="5000" data-speed="1300"></h2>
      <p class="count-text ">Over 5000 vacancies worked on</p>
    </div>
</div>

<script type="text/javascript">
(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  //   $('.timer').each(count);

function scrolltimer() {
    $('.timer').each(count);
     $(window).off('scroll');
}


$(window).on('scroll', function(){
  var element = $('#msp-numbers');
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(element).offset().top;
    var elemBottom = elemTop + $(element).height();

    if ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)) {
        scrolltimer();
    }
});
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});
</script>

	<?php get_footer(); ?>