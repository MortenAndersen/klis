<?php
if (has_nav_menu('main-menu')):
	$main_nav = array(
		'theme_location' => 'main-menu',
		'container' => false,
		'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
	);
endif;
  if (has_nav_menu('main-menu2')):
    $main_nav2 = array(
      'theme_location' => 'main-menu2',
      'container' => false,
      'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
    );
endif;
if (has_nav_menu('main-menu3')):
  $main_nav3 = array(
    'theme_location' => 'main-menu3',
    'container' => false,
    'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
  );
endif;
if (has_nav_menu('main-menu4')):
  $main_nav4 = array(
    'theme_location' => 'main-menu4',
    'container' => false,
    'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
  );
endif;
if (has_nav_menu('main-menu5')):
  $main_nav5 = array(
    'theme_location' => 'main-menu5',
    'container' => false,
    'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
  );
endif;

?>
  <div id="menu-toggle" class="menu-con">
      <div class="menu-inner">
        <div class="menu__quick">
          <div id="loginX" class="login">
            <a href="/" class="login__home"
              ><svg
                style="width: 32px"
                clip-rule="evenodd"
                fill-rule="evenodd"
                stroke-linejoin="round"
                stroke-miterlimit="2"
                viewBox="0 0 50 50"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  id="home"
                  d="m128 597.333h85.333v298.667c0 23.595 19.115 42.667 42.667 42.667h512c23.595 0 42.667-19.072 42.667-42.667v-298.667h85.333c16.853 0 32.128-9.899 38.955-25.301 6.869-15.403 4.053-33.408-7.253-45.909l-384-426.667c-16.171-18.005-47.232-18.005-63.403 0l-384 426.667c-11.264 12.501-14.123 30.507-7.253 45.909 6.827 15.403 22.101 25.301 38.955 25.301zm241.195-100.65c37.333-36.48 96.213-36.48 133.333 0l9.557 9.387 9.515-9.387c37.163-36.48 96.043-36.48 133.376 0 37.163 36.693 37.163 94.507 0 130.987l-142.891 140.331-142.891-140.331c-37.163-36.48-37.163-94.293 0-130.987z"
                  fill-rule="nonzero"
                  transform="matrix(.0585949 0 0 .0585949 -5.00091 -5.03636)" /></svg
            ></a>
            <a href="#" class="intra">E<span>I</span></a>
            <a href="#" class="intra">F<span>I</span></a>
            <a href="#" class="intra">P<span>I</span></a>
          </div>
          <div class="menu__search">

					<?php get_template_part('template-parts/content/search', 'form'); ?>

            <a href="#" class="fokus-btn">Opskrivning</a>
            <a href="#" class="fokus-btn">Nye forældre</a>
          </div>
        </div>
        <nav class="main-menu">
          <div>
						<?php wp_nav_menu($main_nav); ?>
          </div>
          <div>
          <?php wp_nav_menu($main_nav2); ?>
          </div>
          <div>
          <?php wp_nav_menu($main_nav3); ?>
          </div>
          <div>
          <?php wp_nav_menu($main_nav4); ?>
          </div>
          <div>
          <?php wp_nav_menu($main_nav5); ?>
          </div>
        </nav>
        
          <?php
            if (is_active_sidebar('kontakt')) {
              echo '<div class="menu__info">';
                  dynamic_sidebar('kontakt');
              echo '</div>';
            }
          ?>
        
      </div>
    </div>