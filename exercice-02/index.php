<?php

/**
 * Plugin Name: Hono - exo2
 * Version: 1.0
 * Author: Keny Zachelin
 */


class NetworkShortcode{

    const NETWORKS = [
        [
            "label" => "Facebook",
            "url" => "https://facebook.com/"
        ],
    
        [
            "label" => "Instagram",
            "url" => "https://instagram.com/"
        ],
    
        [
            "label" => "Linkedin",
            "url" => "https://instagram.com/"
        ],
    
        [
            "label" => "GitHub",
            "url" => "https://github.com/honoagency"
        ],
    ];


    public function __construct()
    {   
        add_shortcode("show_social_network", [$this, "shortcode_show_social_network"]);
    }

    public function shortcode_show_social_network(){

        $output = "<ul>";
        

        foreach(self::NETWORKS as $social){

            $output .= '<li><a href="' . $social["url"] . '">' . $social["label"] . '</a></li>';

        }

        $output .= "</ul>";

        return $output;
    
    }

}

new NetworkShortcode();