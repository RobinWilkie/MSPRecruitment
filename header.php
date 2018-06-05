<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="site-header">
    <div class="container">
      <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/icons/msp-logo.png'); ?>" class="msp-logo float-left"></a>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li <?php if(is_page('Clients') or wp_get_post_parent_id(0) == 14) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/clients')) ?>">Clients</a></li>
            <li <?php if(is_page('Candidates') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/candidates')) ?>">Candidates</a></li>
            <li <?php if(get_post_type() == 'jobs') echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/jobs')) ?>">Jobs</a></li>
            <li <?php if(get_post_type() == 'news') echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/news')) ?>">News</a></li>
            <li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 10) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/about-us')) ?>">About Us</a></li>
            <li <?php if(is_page('contact-us') or wp_get_post_parent_id(0) == 20) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/contact-us')) ?>">Contact Us</a></li>
          </ul>
        </nav>
        <div class="site-header__util">          
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
