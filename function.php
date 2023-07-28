<?php
 
// Change all instances of THEME to your theme name.
  
function unlock_the_vault_scripts_styles(){
   wp_enqueue_style('unlock_the_vault_style', get_stylesheet_uri());
}
  
add_action('wp_enqueue_scripts','unlock_the_vault_scripts_styles');

// Change all instances of THEME to your theme name.

function unlock_the_vault_excerpt_length(){
   return 20;
 }
 
add_filter('excerpt_length', 'unlock_the_vault_excerpt_length');



