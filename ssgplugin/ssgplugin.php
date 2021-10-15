<?php
/**
 * Plugin name: SSG plugin
 * Description: A nice test plugin by me.
 * Plugin URI: http://localhost/studentsurvivalguide
 * Version: 1.0
 * Author: Line Risum
 * Author http://localhost/studentsurvivalguide
 * License: GPL2
 */
function plugintest () {
    $mycode = '<div id="location" >Aarhus</div>';
    $mycode .= '<div id="temp">
    <p><span id="temp-value">10</span><span id="temp-unit">&#176C</span></p>

    <img id="temp-icon" src="icons/clear.png" alt="weather-icon">

</div>';
    return $mycode;
}

function register_styles_plugin(){
    wp_enqueue_style('CustomStylesheet', plugins_url ('linerisumplugin/css/style.css'));
    wp_enqueue_script('CustomScript', plugins_url ('linerisumplugin/js/script.js'),array(),null,true);
}

add_shortcode('basicplugin', 'plugintest');
add_action('wp_enqueue_scripts','register_styles_plugin');

?>
