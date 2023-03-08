<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <?php
  $social_media_choose = get_field('social_media_choose', 'option');
  ?>
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
        <?php
          $social_media_icons = array(
            'Instagram' => 'fa fa-instagram',
            'Twitter' => 'fa fa-twitter',
            'Youtube' => 'fa fa-youtube-play',
            'Linkedin' => 'fa fa-linkedin',
            'Facebook' => 'fa fa-facebook',
          );
          foreach ($social_media_icons as $social_media_name => $social_media_icon_class) {
            if ($social_media_choose && in_array($social_media_name, $social_media_choose)) {
              $social_media_link = get_field('link_' . strtolower($social_media_name), 'option');
        ?>
            <a href="<?php echo esc_url($social_media_link); ?>" target="_blank"><i class="<?php echo esc_attr($social_media_icon_class); ?>"></i></a>
        <?php
            }
          }
        ?>
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