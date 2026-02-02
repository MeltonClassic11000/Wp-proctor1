<?php

/* ===============================
   Register Header Menu
================================ */
register_nav_menus([
  'primary_menu' => 'Header Menu',
  'footer_useful' => 'Footer Useful Links',
  'footer_services' => 'Footer Services'
]);

/* ===============================
   Enqueue CSS & JS
================================ */
function theme_assets()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/scss/style.css');
  wp_enqueue_style('header', get_template_directory_uri() . '/assets/scss/header.css');
  wp_enqueue_style('footer', get_template_directory_uri() . '/assets/scss/footer.css');


  wp_enqueue_style('section-half', get_template_directory_uri() . '/assets/scss/half-sections.css', [], '1.0');

  // if (is_page_template('about.php')) {
  //   wp_enqueue_style('about-hero', get_template_directory_uri() . '/assets/scss/about-hero.css');
  //   wp_enqueue_style('certifications-why-choose-us', get_template_directory_uri() . '/assets/scss/certifications-why-choose-us.css');
  //   wp_enqueue_style('why-choose-us', get_template_directory_uri() . '/assets/scss/why-choose-us.css');
  //   wp_enqueue_style('featured-blog', get_template_directory_uri() . '/assets/scss/featured-blog.css');
  // }

  // if (is_page_template('blog.php')) {
  //   wp_enqueue_style('featured-blog', get_template_directory_uri() . '/assets/scss/featured-blog.css');
  // }

  // if (is_page_template('contact-us.php')) {
  //   wp_enqueue_style('contact-sec', get_template_directory_uri() . '/assets/scss/contact-sec.css');
  //   wp_enqueue_style('contact-card-sec', get_template_directory_uri() . '/assets/scss/contact-card-sec.css');
  // }

  // wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/assets/js/jquery.js', [], null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}

add_action('wp_enqueue_scripts', 'theme_assets');


// // 1. Register all section CSS
// function register_section_styles()
// {
//   wp_register_style('section-home-hero', get_template_directory_uri() . '/assets/scss/home-hero.css', [], '1.0');
//   wp_register_style('section-slider', get_template_directory_uri() . '/assets/scss/infinite-slider.css', [], '1.0');
//   wp_register_style('section-faq', get_template_directory_uri() . '/assets/scss/faq-sec.css', [], '1.0');
//   wp_register_style('section-blog', get_template_directory_uri() . '/assets/scss/blog.css', [], '1.0');
// }
// add_action('wp_enqueue_scripts', 'register_section_styles');

// // 2. Queue section styles
// global $section_styles_queue;
// $section_styles_queue = [];

// function enqueue_section_style($handle)
// {
//   global $section_styles_queue;
//   $section_styles_queue[] = $handle;
//   if (wp_style_is($handle, 'registered')) {
//     wp_enqueue_style($handle);
//     error_log("Section CSS enqueued: " . $handle);
//   } else {
//     error_log("Section CSS NOT registered: " . $handle);
//   }
// }

// 3. Actually enqueue queued styles during wp_enqueue_scripts
function enqueue_queued_section_styles()
{
  global $section_styles_queue;
  if (!empty($section_styles_queue)) {
    foreach (array_unique($section_styles_queue) as $handle) {
      if (wp_style_is($handle, 'registered')) {
        wp_enqueue_style($handle);
      }
    }
  }
}
add_action('wp_enqueue_scripts', 'enqueue_queued_section_styles', 20);




/* ===============================
   Add class to menu <li>
================================ */
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
  if ($args->theme_location === 'primary_menu') {
    $classes[] = 'menu-links';
  }
  return $classes;
}, 10, 3);
