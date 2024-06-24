<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />

</head>

<body <?php body_class();?> id="top">
<?php
 $custom_logo_id = get_theme_mod('custom_logo');
 $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
 ?>
<header class="l-wrap header">
      <div class="l-header-first">
        <div class="l-left">
          <?php
          // Logo
            echo '<a href="' . home_url() . '" class="navn">';
              echo '<img src="' . esc_url($logo[0]) . '" class="navn__logo" alt="' . get_bloginfo('name') . '" width="' . $logo[1] . '" height="' . $logo[2] . '" />';
              echo get_bloginfo('name');
            echo '</a>';

            // Breadcrumb
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<div class="breadcrumb small">// ','</div>' );
            }
            ?>

        </div>

        <div class="l-right">
          <div id="login" class="login">
            <a href="<?php echo home_url() ?>" class="login__home">
              <svg style="width: 32px" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"> <path id="home" d="m128 597.333h85.333v298.667c0 23.595 19.115 42.667 42.667 42.667h512c23.595 0 42.667-19.072 42.667-42.667v-298.667h85.333c16.853 0 32.128-9.899 38.955-25.301 6.869-15.403 4.053-33.408-7.253-45.909l-384-426.667c-16.171-18.005-47.232-18.005-63.403 0l-384 426.667c-11.264 12.501-14.123 30.507-7.253 45.909 6.827 15.403 22.101 25.301 38.955 25.301zm241.195-100.65c37.333-36.48 96.213-36.48 133.333 0l9.557 9.387 9.515-9.387c37.163-36.48 96.043-36.48 133.376 0 37.163 36.693 37.163 94.507 0 130.987l-142.891 140.331-142.891-140.331c-37.163-36.48-37.163-94.293 0-130.987z" fill-rule="nonzero" transform="matrix(.0585949 0 0 .0585949 -5.00091 -5.03636)" /></svg>
            </a>
            <a href="#" class="intra">E<span>I</span></a>
            <a href="#" class="intra">F<span>I</span></a>
            <a href="#" class="intra">P<span>I</span></a>
          </div>
          <button class="login__link small" onclick="loginFunction()">
            Logins //
          </button>
        </div>
      </div>
      <div class="l-header-second">
        <div class="l-left">
          <button class="menu-icon" onclick="menuFunction()">
            <div id="hamburger" class="hamburger">
              <span></span><span></span><span></span>
            </div>
            Menu
          </button>
        </div>
        <div class="l-right">
        <?php get_template_part('template-parts/content/search', 'form'); ?>
          <a href="#" class="fokus-btn">Opskrivning</a>
          <a href="#" class="fokus-btn">Nye forældre</a>
        </div>
      </div>


      <?php
            echo '<a href="' . home_url() . '" class="logo">';
              echo '<img src="' . esc_url($logo[0]) . '" class="logo__img" alt="' . get_bloginfo('name') . '" width="' . $logo[1] . '" height="' . $logo[2] . '" />';
            echo '</a>';
          ?>
    </header>

<header>
  


</header>
  <?php
wp_body_open();

get_template_part('template-parts/nav/main', 'menu');
