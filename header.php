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
 <div class="page-wrap">
<header class="l-wrap header">
      <div class="l-header-first">
        <div class="l-left">
          <?php
          // Logo
            echo '<a href="' . home_url() . '" class="navn">';
              echo '<img src="' . esc_url($logo[0]) . '" class="navn__logo" alt="Logo" width="' . $logo[1] . '" height="' . $logo[2] . '" />';
              echo get_bloginfo('name');
            echo '</a>';

            // Breadcrumb
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<div class="breadcrumb small">// ','</div>' );
            }
            ?>

        </div>

        <div class="l-right">
        <?php get_template_part('template-parts/nav/login', 'nav'); ?>
          
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
          <a href="https://www.ventelisten.net/259013" class="fokus-btn" target="_blank">Opskrivning</a>
        </div>
      </div>


      <?php
            echo '<a href="' . home_url() . '" class="logo">';
              echo '<img src="' . esc_url($logo[0]) . '" class="logo__img" alt="Logo" width="' . $logo[1] . '" height="' . $logo[2] . '" />';
            echo '</a>';
          ?>
    </header>

  <?php
wp_body_open();

get_template_part('template-parts/nav/main', 'menu');
