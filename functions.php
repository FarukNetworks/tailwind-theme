<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
  add_theme_support('title-tag');

 register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'tailpress'),
    )
  );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  add_theme_support('align-wide');
  add_theme_support('wp-block-styles');

  add_theme_support('editor-styles');
  add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function my_theme_scripts()
{
  // Enqueue jQuery from WordPress core
  wp_enqueue_script('jquery');

  // Enqueue Slick slider script
  wp_enqueue_script('slick-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

  // Enqueue Slick slider stylesheet
  wp_enqueue_style('slick-slider-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');

  // Enqueue Lenis script
  wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/npm/lenis@1.1.12/dist/lenis.min.js', array('jquery'), '1.1.12', true);

  // Enqueue Lenis stylesheet
  wp_enqueue_style('lenis-style', 'https://cdn.jsdelivr.net/npm/lenis@1.1.12/dist/lenis.css', array(), '1.1.12');

  // Enqueue GSAP script
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array('jquery'), '3.12.5', true);

  // Enqueue GSAP ScrollTrigger script
  wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('jquery'), '3.12.5', true);

  // Enqueue GSAP stylesheet
  wp_enqueue_style('gsap-style', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.css', array(), '3.12.5');

  // Enqueue GSAP ScrollTrigger stylesheet
  wp_enqueue_style('gsap-scrolltrigger-style', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.css', array(), '3.12.5');


}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

function tailpress_enqueue_scripts()
{

  wp_enqueue_style('custom-css', tailpress_asset('css/app.css'), array());
  wp_enqueue_style('tailwind-css', tailpress_asset('css/tailwind.css'), array());
  wp_enqueue_script('custom-js', tailpress_asset('src/js/custom.js'), array());
  wp_enqueue_script('gsap-js', tailpress_asset('src/js/gsap.js'), array('jquery', 'gsap', 'gsap-scrolltrigger', 'lenis'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
  if (wp_get_environment_type() === 'production') {
    return get_stylesheet_directory_uri() . '/' . $path;
  }

  return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }

  if (isset($args->{"li_class_$depth"})) {
    $classes[] = $args->{"li_class_$depth"};
  }

  return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
  if (isset($args->submenu_class)) {
    $classes[] = $args->submenu_class;
  }

  if (isset($args->{"submenu_class_$depth"})) {
    $classes[] = $args->{"submenu_class_$depth"};
  }

  return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);




function tailwind_widgets_init()
{

  register_sidebar(
    array(
      'name' => 'Footer 1',
      'id' => 'footer-1',
      'before_widget' => '<div id="footer-1">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-black opacity-50 text-base mb-5">',
      'after_title' => '</h3>',
    )
  );

}
add_action('widgets_init', 'tailwind_widgets_init');



// Reading time for posts
function reading_time() {
    $post = get_post();
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
    $timer = " min";
    } else {
    $timer = " min";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

// Get the index and add 0 to the number
function indexZero($index) {
	if($index <= 9 && $index !== 0) {
		return "0{$index}";
	} else {
		return $index;
	}
}

// Fix the editor width
add_action('admin_head', 'my_custom_admin_css');
function my_custom_admin_css() {
  echo '<style>
    :where(.editor-styles-wrapper) .wp-block {
    max-width: 1300px !important;
}
  </style>';
}

// Add a class to the homepage helper function
function only_homepage_class($classes) {
  if (is_page('homepage')) {
   return $classes;
  }
  return;
}