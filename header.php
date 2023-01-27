<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <header class="header">
    <a href="#">
      <img class="logo" alt="Omnifood logo" src="http://localhost:10008/wp-content/uploads/2023/01/omnifood-logo.png" />
    </a>

    <nav class="main-nav">
      <ul class="main-nav-list">
        <li><a class="main-nav-link" href="#how">How it works</a></li>
        <li><a class="main-nav-link" href="#meals">Meals</a></li>
        <li>
          <a class="main-nav-link" href="#testimonials">Testimonials</a>
        </li>
        <li><a class="main-nav-link" href="#pricing">Pricing</a></li>
        <li><a class="main-nav-link nav-cta" href="#cta">Try for free</a></li>
      </ul>
    </nav>

    <button class="btn-mobile-nav">
      <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
      <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
  </header>