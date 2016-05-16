<?php


$context = Timber::get_context();

$var = "Message from background";

$context['message'] = $var;
$context['posts'] = Timber::get_posts();
$context['about_us'] = Timber::get_post('about-us');
$context['our_service'] = Timber::get_post('our-service');
$context['top_post'] = Timber::get_post(30);

Timber::render("front-page.twig", $context);

