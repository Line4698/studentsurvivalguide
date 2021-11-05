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
     $content = '<div id="pins">
            <a href="index.html"><button type="button" id="pin0" class="bounce-in-top">
                    <span id="pin0tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin1" class="bounce-in-top">
                    <span id="pin1tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin2" class="bounce-in-top">
                    <span id="pin2tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin3" class="bounce-in-top">
                    <span id="pin3tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin4" class="bounce-in-top">
                    <span id="pin4tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin5" class="bounce-in-top">
                    <span id="pin5tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin6" class="bounce-in-top">
                    <span id="pin6tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin7" class="bounce-in-top">
                    <span id="pin7tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin8" class="bounce-in-top">
                    <span id="pin8tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="pin9" class="bounce-in-top">
                    <span id="pin9tekst"></span>
                </button>
            </a>
        </div>';
     return $content;
 }

 function register_styles_plugin(){
     wp_enqueue_style('CustomStylesheet', plugins_url ('studentsurvivalguide/css/style.css'));
     wp_enqueue_script('CustomScript', plugins_url ('studentsurvivalguide/js/script.js'),array(),null,true);
 }
 
 add_shortcode('basicplugin', 'plugintest');
 add_action('wp_enqueue_scripts','register_styles_plugin');
?>
