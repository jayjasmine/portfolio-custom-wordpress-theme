<?php 
  function jjtheme_files() {
    wp_enqueue_script('jjtheme_main_js', get_theme_file_uri('/dist/main.js'), null,'1.0', true);
    wp_enqueue_style('jjtheme_main_styles', get_theme_file_uri('/dist/css/main.css'));

  }
  add_action('wp_enqueue_scripts', 'jjtheme_files');

// Custom post type code, located in wp-content/mu-plugins/ so if we change themes the post type will still be there in admin

?>

