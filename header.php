<!DOCTYPE html>
<!-- wordpress function to add language tag for search engines -->
<html <?php language_attributes(); ?>>

<head>
  <!-- what type of letters and numbers be used on the page -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tell run functions.php scripts -->
  <?php wp_head(); ?>
</head>
<!-- body_class will give you class names to manipulate in js or css -->

<body <?php body_class(); ?>>
  <header class="site-header">
    <nav class="nav" role="navigation">
      <a href="<?php echo site_url()?>" class="nav-logo">Jay <strong>Jasmine</strong></a>
      <ul class="nav-menu">
        <li class="nav-menu__item">
          <a href="#contact" class="nav-menu__link"> Contact </a>
        </li>

        <li class="nav-menu__item">
          <a href="#projects" class="btn"> View Projects </a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>