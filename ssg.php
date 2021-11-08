<?php
/**
 * Plugin name: ssg plugin
 * Description: A nice plugin about city guides in SSG.
 * Plugin URI: http://localhost/studentsurvivalguide
 * Version: 1.0
 * Author: Laura, Line, Maja & Marie
 * Author http://localhost/studentsurvivalguide
 * License: GPL2
 */

 function plugintest () {
     $content = '<div id="pins">
            <a href="https://www.studentsurvivalguide.dk/posts/aarhus-survival-guide"><button type="button" id="aarhus" class="bounce-in-top">
                    <span id="pin0tekst"></span>
                </button>
            </a>
            <a href="https://www.studentsurvivalguide.dk/posts/survival-guide-to-aalborg"><button type="button" id="aalborg" class="bounce-in-top">
                    <span id="pin1tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="kobenhavn" class="bounce-in-top">
                    <span id="pin2tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="odense" class="bounce-in-top">
                    <span id="pin3tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="vejle" class="bounce-in-top">
                    <span id="pin4tekst"></span>
                </button>
            </a>
            <a href="https://www.studentsurvivalguide.dk/posts/roskilde-survival-guide"><button type="button" id="roskilde" class="bounce-in-top">
                    <span id="pin5tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="esbjerg" class="bounce-in-top">
                    <span id="pin6tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="kolding" class="bounce-in-top">
                    <span id="pin7tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="sonderborg" class="bounce-in-top">
                    <span id="pin8tekst"></span>
                </button>
            </a>
            <a href="index.html"><button type="button" id="randers" class="bounce-in-top">
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
