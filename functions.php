<?php
function ballet()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ballet');

function ballet_script()
{
  wp_enqueue_script('jquery');
  wp_enqueue_script(
    'ballet_script',
    get_template_directory_uri() . '/assets/js/ballet_script.js',
    array(),
    '1.0.0',
    true
  );

  wp_enqueue_style(
    'variable',
    get_template_directory_uri() . '/assets/css/general/variable.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'destyle',
    get_template_directory_uri() . '/assets/css/general/destyle.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'theme-common',
    get_template_directory_uri() . '/assets/css/general/common.css',
    array(),
    '1.0.0'
  );
  wp_enqueue_style(
    'header',
    get_template_directory_uri() . '/assets/css/general/header.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'footer',
    get_template_directory_uri() . '/assets/css/general/footer.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'parts-line',
    get_template_directory_uri() . '/assets/css/parts/line.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'parts-mainvisual',
    get_template_directory_uri() . '/assets/css/parts/mainvisual.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'parts-schedule',
    get_template_directory_uri() . '/assets/css/parts/schedule.css',
    array(),
    '1.0.0'
  ); 

  wp_enqueue_style(
    'parts-price',
    get_template_directory_uri() . '/assets/css/parts/price.css',
    array(),
    '1.0.0'
  ); 

  wp_enqueue_style(
    'parts-sub-heading',
    get_template_directory_uri() . '/assets/css/parts/sub-heading.css',
    array(),
    '1.0.0'
  );   

  wp_enqueue_style(
    'parts-contact',
    get_template_directory_uri() . '/assets/css/parts/contact.css',
    array(),
    '1.0.0'
  );   

  wp_enqueue_style(
    'index',
    get_template_directory_uri() . '/assets/css/pages/index.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'theme-about',
    get_template_directory_uri() . '/assets/css/pages/about.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'beginner',
    get_template_directory_uri() . '/assets/css/pages/beginner.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'class',
    get_template_directory_uri() . '/assets/css/pages/class.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'price',
    get_template_directory_uri() . '/assets/css/pages/price.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'recital',
    get_template_directory_uri() . '/assets/css/pages/recital.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'question',
    get_template_directory_uri() . '/assets/css/pages/question.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_style(
    'contact',
    get_template_directory_uri() . '/assets/css/pages/contact.css',
    array(),
    '1.0.0'
  );
}

add_action('wp_enqueue_scripts', 'ballet_script');
