<?php

/**
 * Register style sheet.
 */
function blm_register_css_style() 
{
    wp_register_style( 'blm-style',  plugins_url('../public/css/style.css',  __FILE__) );
    wp_enqueue_style( 'blm-style');
}

add_action( 'wp_enqueue_scripts', 'blm_register_css_style' );

/**
 * Create banner
 */
function blm_add_banner() 
{
    $banner = '
    <div class="blm-banner-container">
        <div class="blm-action">
            <span class="blm-tweets">
                <a href="https://twitter.com/hashtag/BlackLivesMatter" target="_blank">#BlackLivesMatter</a>
            </span>
            <span class="blm-what-to-do">
                <a href="https://www.timeout.com/things-to-do/how-to-support-black-lives-matter" target="_blank" class="btlm-button"> Support An Initiative</a>
            </span>
        </div>
    </div>
    ';

    echo $banner; 
}

add_action("wp_head", "blm_add_banner");
