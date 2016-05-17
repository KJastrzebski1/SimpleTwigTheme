<?php


$context = Timber::get_context();

$var = "Message from background";

$context['message'] = $var;
$context['posts'] = Timber::get_posts();
$context['about_us'] = Timber::get_post('about-us');
$context['our_service'] = Timber::get_post('our-service');


Timber::render("front-page.twig", $context);

