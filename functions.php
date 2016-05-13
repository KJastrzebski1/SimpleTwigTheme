<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function theme_init(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_init');