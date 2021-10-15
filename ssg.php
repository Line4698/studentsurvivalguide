<?php
/**
 * Plugin name: ssg plugin
 * Description: A nice test plugin by me.
 * Plugin URI: http://localhost/studentsurvivalguide
 * Version: 1.0
 * Author: Line Risum
 * Author http://localhost/studentsurvivalguide
 * License: GPL2
 */

 function plugintest () {
     $mycode = '<h2>Play</h2>';
     $mycode .= '<p>Play this game to have some fun with out product</p>';
     $mycode .= '<section id="game">
     <script src="https://cdn.htmlgames.com/embed.js?game=SaratogaSolitaire&amp;bgcolor=white"></script>
     </section>
     ';
     return $mycode;
 }

 function register_styles_plugin(){
     wp_enqueue_style('CustomStylesheet', plugins_url ('linerisumplugin/css/style.css'));
     wp_enqueue_script('CustomScript', plugins_url ('linerisumplugin/js/script.js'),array(),null,true);
 }
 
 add_shortcode('basicplugin', 'plugintest');
 add_action('wp_enqueue_scripts','register_styles_plugin');
?>