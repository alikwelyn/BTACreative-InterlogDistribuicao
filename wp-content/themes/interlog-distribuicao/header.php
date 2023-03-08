<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <div id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-end">
      <div class="contact-info d-flex align-items-center">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'top-menu',
            'container' => false,
          ) );
        ?>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="#" class="facebook">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
  <?php if ( is_front_page() && is_home() ) { ?>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="<?php echo get_home_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-interlog.png" alt="<?php echo wp_get_document_title(); ?>">
      </a>
      <nav id="navbar" class="navbar">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => false,
          ) );
        ?>
      </nav>
      <i class="mobile-nav-toggle mobile-nav-show fa fa-bars"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none fa fa-times"></i>
    </div>
  </header>
  <?php } elseif ( is_page() ) { ?>
  <header id="header" class="page fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="<?php echo get_home_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-interlog.png" alt="<?php echo wp_get_document_title(); ?>">
      </a>
      <nav id="navbar" class="navbar page">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => false,
          ) );
        ?>
      </nav>
      <i class="mobile-nav-toggle mobile-nav-show fa fa-bars"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none fa fa-times"></i>
    </div>
  </header>
  <?php } ?>