<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <a href="<?php echo esc_url(site_url()) ?>"><img src="<?php echo get_theme_file_uri('/icons/msp-logo.png'); ?>" class="msp-logo float-left"></a>
          <br>
          <p><a class="site-footer__link" href="tel:+44 (0)141 636 6033">+44 (0)141 636 6033</a></p>
          <p><a class="site-footer__link" href="mailto:admin@msprecruitmentsolutions.com?Subject=Contact">admin@msprecruitmentsolutions.com</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Clients</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo esc_url(site_url('/submit-a-brief')) ?>">Submit a Brief</a></li>
                <li><a href="<?php echo esc_url(site_url('/Request-a-callback')) ?>">Request a Callback</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Candidates</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo esc_url(site_url('/upload-your-cv')) ?>">Upload Your CV</a></li>
                <li><a href="<?php echo esc_url(site_url('/jobs')) ?>">Jobs</a></li>
                <li><a href="<?php echo esc_url(site_url('/gdpr-privacy-policy')) ?>">GDPR Privacy Policy</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- social Media Links -->
        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav class="nav-list">
              <ul>
                <li><a href="<?php echo esc_url(site_url('/contact-us')) ?>">Contact Us</a></li>
              </ul>
            </nav>
            <hr>
          <nav>
            <ul class="min-list social-icons-list group">
            	<li><a href="https://www.linkedin.com/company/mcphee-stephens-partnership/" target="_blank" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/mspprintrecruit" target="_blank" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/MSPRecruitmentSolutions/" target="_blank" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>



<?php wp_footer(); ?>
</body>
</html>